<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class myController extends BaseController
{
    //
    function index()
    {
        return view('main.home');
    }


    function about()
    {
        return view('main.about');
    }

    function contact()
    {
        return view('main.contact');
    }

    function courses()
    {
        return view('main.courses');
    }

}