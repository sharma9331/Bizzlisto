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

    public function Claim()
    {
        return view('business.claim');
    }

    public function explore()
    {
        return view('business.Explore');
    }

    public function Login()
    {
        return view('business.login');
    }

    public function Review()
    {
        return view('review');
    }

    public function Project()
    {
        return view('project');
    }


    public function Takeout()
    {
        return view('resturant.takeout');
    }

    public function Contractor()
    {
        return view('contractor');
    }

}
