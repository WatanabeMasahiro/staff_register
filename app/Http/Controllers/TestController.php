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

        // 「detailsページの案件ID飛ばし」
        $matters = Matter::where('completed', 0);
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
        $matters = $matters->orderBy('day', 'asc')->paginate(10);

        return view('home', compact('user', 'week', 'day1_search', 'day2_search', 'wage1_search','wage2_search', 'str_search', 'matters'));
    }


    public function indexPost(Request $request)
    {
        if ($request->has('mattersId')){
            $user = Auth::user();
            $week = array( "日", "月", "火", "水", "木", "金", "土" );
            $mattersId = $request->mattersId;
            $matter = Matter::where('id', $mattersId)->first();
            $m_ids = Staff::where('id', $user->id)->first()->matters;
            $counter = 0;
            return view('details', compact('user', 'week', 'matter', 'mattersId', 'm_ids', 'counter'));
        } elseif ($request->has('application')) {
            $user = Auth::user();
            $week = array( "日", "月", "火", "水", "木", "金", "土" );
            $mattersId = $request->application;
            $matter = Matter::where('id', $mattersId)->first();
            Staff::where('id', $user->id)->first()->matters()->syncWithoutDetaching($mattersId);
            $m_ids = Staff::where('id', $user->id)->first()->matters;
            $counter = 0;
            $appAnn = true;
            return view('details', compact('user', 'week', 'matter', 'mattersId', 'm_ids', 'counter', 'appAnn'));
        }
    }


    public function detailsGet(Request $request)
    {
        $user = Auth::user();
        return view('details', compact('user'));
    }

    public function detailsPost(Request $request)
    {
        $user = Auth::user();
        $week = array( "日", "月", "火", "水", "木", "金", "土" );
        $applicationId = $request->application;
        $matter = Matter::where('id', $applicationId)->first();
        $matter_staff = new Matter_staff;
        $matter_staff->application = $request->application;
        $matter_staff->save();
        return view('/details', compact('user', 'week', 'matter', 'applicationId',));
    }


    public function entryGet(Request $request)
    {
        $user = Auth::user();
        return view('entry', compact('user',));
    }

    public function entryPost(Request $request)
    {
        return redirect('/');
    }


    public function work_pastGet(Request $request)
    {
        $user = Auth::user();
        return view('work_past', compact('user',));
    }

    public function work_pastPost(Request $request)
    {
        return redirect('/');
    }


    public function staff_infoGet(Request $request)
    {
        $user = Auth::user();
        $user->photoId = str_replace('public/', 'storage/', $user->photoId);
        return view('staff_info', compact('user',));
    }

    public function staff_infoPost(Request $request)
    {
        return redirect('/');
    }


    public function payslipsGet(Request $request)
    {
        $user = Auth::user();
        return view('payslips', compact('user',));
    }

    public function payslipsPost(Request $request)
    {
        $user = Auth::user();
        return view('payslips', compact('user',));
    }


    public function payslips_durationGet(Request $request)
    {
        $user = Auth::user();
        return view('payslips_duration', compact('user',));
    }

    public function payslips_durationPost(Request $request)
    {
        $user = Auth::user();
        return view('payslips_duration', compact('user',));
    }


    public function contact_formGet(Request $request)
    {
        $user = Auth::user();
        $contact_title = DB::table('contact_title')->get('title');
        return view('contact_form', compact('user','contact_title',));
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
