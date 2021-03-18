<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Matter;
use App\Models\Matter_staff;
use App\Models\Payslip;
use App\Models\Contact;
use App\Models\Contact_title;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Pagination\LengthAwarePaginator;


class TestController extends Controller
{

    public function indexGet(Request $request)
    {
        $user = Auth::user();
        $week = array( "日", "月", "火", "水", "木", "金", "土" );
        $day1_search = $request->day1_search;
        $day2_search = $request->day2_search;
        $wage1_search = $request->wage1_search;
        $wage2_search = $request->wage2_search;
        $str_search = mb_convert_kana(strtolower($request->str_search), 'a');
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
            });

        $matters = Matter::where('completed', 0)->where('day', '>=', $nowdate);
        if (!empty($day1_search)) {
            $matters->whereDate('day', '>=', $day1_search);
        }
        if (!empty($day2_search)) {
            $matters->whereDate('day', '<=', $day2_search);
        }
        if (!empty($wage1_search)) {
            $matters->where('wage', '>=', $wage1_search);
        }
        if (!empty($wage2_search)) {
            $matters->where('wage', '<=', $wage2_search);
        }
        if (!empty($str_search)) {
            $matters->where(function($matters) use($str_search){
                $matters->where('client', 'like', "%{$str_search}%")
                    ->orwhere('matter_name', 'like', "%{$str_search}%")
                    ->orwhere('work_name', 'like', "%{$str_search}%")
                    ->orwhere('place', 'like', "%{$str_search}%")
                    ->orwhere('place_near_sta', 'like', "%{$str_search}%")
                    ->orwhere('start_time', 'like', "%{$str_search}%")
                    ->orwhere('ending_time', 'like', "%{$str_search}%")
                    ->orwhere('work_time', 'like', "%{$str_search}%")
                    ->orwhere('production_time', 'like', "%{$str_search}%")
                    ->orwhere('over_time', 'like', "%{$str_search}%");
            });
        }
        $matters = $matters->orderBy('day', 'asc')->orderBy('start_time', 'asc')->paginate(10);

        return view('home', compact('user', 'week', 'day1_search', 'day2_search', 'wage1_search','wage2_search', 'str_search', 'nowdate', 'now', 'm_ids', 'matters'));
    }


    public function details(Request $request)
    {
        if ($request->has('mattersId')){
            $user = Auth::user();
            $week = array( "日", "月", "火", "水", "木", "金", "土" );
            $mattersId = $request->mattersId;
            $matter = Matter::where('id', $mattersId)->first();
            $nowdate = date("Y-m-d");
            $now = now();
            $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
                if ($first['day'] == $second['day']) {
                return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
                }
                return $first['day'] < $second['day'] ? -1 : 1 ;
                });
            $counter = 0;
            $nowdate = date("Y-m-d");
            return view('details', compact('user', 'week', 'matter', 'mattersId', 'nowdate', 'now', 'm_ids', 'counter', 'nowdate'));
        } elseif ($request->has('application')) {
            $user = Auth::user();
            $week = array( "日", "月", "火", "水", "木", "金", "土" );
            $mattersId = $request->application;
            $matter = Matter::where('id', $mattersId)->first();
            Staff::where('id', $user->id)->first()->matters()->syncWithoutDetaching($mattersId);
            $nowdate = date("Y-m-d");
            $now = now();
            $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
                if ($first['day'] == $second['day']) {
                return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
                }
                return $first['day'] < $second['day'] ? -1 : 1 ;
                });
            $counter = 0;
            $appAnn = true;
            $nowdate = date("Y-m-d");
            return view('details', compact('user', 'week', 'matter', 'mattersId', 'nowdate', 'now', 'm_ids', 'counter', 'appAnn', 'nowdate'));
        }
    }


    // public function detailsGet(Request $request)
    // {
    //     $user = Auth::user();
    //     return view('details', compact('user'));
    // }

    // public function detailsPost(Request $request)
    // {
    //     $user = Auth::user();
    //     $week = array( "日", "月", "火", "水", "木", "金", "土" );
    //     $applicationId = $request->application;
    //     $matter = Matter::where('id', $applicationId)->first();
    //     $matter_staff = new Matter_staff;
    //     $matter_staff->application = $request->application;
    //     $matter_staff->save();
    //     return view('/details', compact('user', 'week', 'matter', 'applicationId',));
    // }


    public function entryGet(Request $request)
    {
        $user = Auth::user();
        $week = array( "日", "月", "火", "水", "木", "金", "土" );
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
                if ($first['day'] == $second['day']) {
                return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
                }
                return $first['day'] < $second['day'] ? -1 : 1 ;
                });
        $m_ids = new LengthAwarePaginator(
            $m_ids->forPage($request->page, 5),
            $m_ids->count(),
            5,
            null,
            ['path' => $request->url()]
        );
        return view('entry', compact('user', 'week', 'nowdate', 'now', 'm_ids',));
    }

    public function entryPost(Request $request)
    {
        if ($request->has('punchIn')){
            $user = Auth::user();
            $punchin_id = $request->punchIn;
            $m_s = Staff::where('id', $user->id)->first()->matters()->updateExistingPivot($punchin_id, ['punchin' => true]);
            return redirect('/entry');
        } elseif ($request->has('punchOut')){
            $user = Auth::user();
            $punchout_id = $request->punchOut;
            $m_s = Staff::where('id', $user->id)->first()->matters()->updateExistingPivot($punchout_id, ['punchout' => true]);
            return redirect('/entry');
        }
        
    }


    public function work_pastGet(Request $request)
    {
        $user = Auth::user();
        $week = array( "日", "月", "火", "水", "木", "金", "土" );
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
        });
        $m_ids_past = Staff::where('id', $user->id)->first()->matters->where('day', '<', $nowdate)->sort(function ($first, $second){
                if ($first['day'] == $second['day']) {
                return $first['start_time'] < $second['start_time'] ? 1 : -1 ;
                }
                return $first['day'] < $second['day'] ? 1 : -1 ;
                });
        $m_ids_past = new LengthAwarePaginator(
            $m_ids_past->forPage($request->page, 10),
            $m_ids_past->count(),
            10,
            null,
            ['path' => $request->url()]
        );
        return view('work_past', compact('user', 'week', 'nowdate', 'now', 'm_ids', 'm_ids_past', ));
    }

    public function work_pastPost(Request $request)
    {
        return redirect('/');
    }


    public function payslipsGet(Request $request)
    {
        $user = Auth::user();
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
            });
        return view('payslips', compact('user', 'nowdate', 'now', 'm_ids'));
    }

    public function payslipsPost(Request $request)
    {
        $user = Auth::user();
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
            });
        return view('payslips', compact('user', 'nowdate', 'now', 'm_ids',));
    }


    public function payslips_durationGet(Request $request)
    {
        $user = Auth::user();
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
            });
        return view('payslips_duration', compact('user', 'nowdate', 'now', 'm_ids',));
    }

    public function payslips_durationPost(Request $request)
    {
        $user = Auth::user();
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
            });
        return view('payslips_duration', compact('user', 'nowdate', 'now', 'm_ids',));
    }


    public function staff_infoGet(Request $request)
    {
        $user = Auth::user();
        $user->photoId = str_replace('public/', 'storage/', $user->photoId);
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
            });
        return view('staff_info', compact('user', 'nowdate', 'now', 'm_ids',));
    }

    public function staff_infoPost(Request $request)
    {
        return redirect('/');
    }


    public function contact_formGet(Request $request)
    {
        $user = Auth::user();
        $nowdate = date("Y-m-d");
        $now = now();
        $m_ids = Staff::where('id', $user->id)->first()->matters->where('day', '>=', $nowdate)->sort(function ($first, $second){
            if ($first['day'] == $second['day']) {
            return $first['start_time'] < $second['start_time'] ? -1 : 1 ;
            }
            return $first['day'] < $second['day'] ? -1 : 1 ;
            });
        $contact_title = DB::table('contact_title')->get('title');
        return view('contact_form', compact('user', 'nowdate', 'now', 'm_ids', 'contact_title',));
    }

    public function contact_formPost(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $stock = new Contact;
        $form = $request->all();
        unset($form['_token']);
        $stock->fill($form)->save();
        return redirect('/contact_form');
    }

}
