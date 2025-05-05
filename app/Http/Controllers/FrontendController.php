<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('index');
    }

    public function addBusiness()
    {
        return view('business.addbusiness');
    }
}
