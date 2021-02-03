<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{

    public function indexGet(Request $request)
    {
        // return view('home', compact());
        return view('home', );
    }


    public function detailsGet(Request $request)
    {
        // return view('home', compact());
        return view('details', );
    }


    public function confirmGet(Request $request)
    {
        // return view('home', compact());
        return view('confirm', );
    }


    public function work_pastGet(Request $request)
    {
        // return view('home', compact());
        return view('work_past', );
    }


    public function contact_formGet(Request $request)
    {
        // return view('home', compact());
        return view('contact_form', );
    }

}
