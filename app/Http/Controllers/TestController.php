<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Staff;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TestController extends Controller
{

    public function indexGet(Request $request)
    {
        $user = Auth::user();
        return view('home', compact('user',));
    }

    public function indexPost(Request $request)
    {
        return redirect('/');
    }


    public function detailsGet(Request $request)
    {
        $user = Auth::user();
        return view('details', compact('user',));
    }

    public function detailsPost(Request $request)
    {
        return redirect('/');
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
