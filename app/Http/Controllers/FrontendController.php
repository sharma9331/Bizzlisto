<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\Models\Register;

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


    public function Sigin()
    {
        return view('sigin');
    }

    public function Signup()
    {
        return view('signup');
    }

    public function insert(Request $request)
    {
        // Validate the inputs
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:registers,email',
            'password' => 'required|string|min:6',
        ]);
        // Save the user
        $register = new Register();
        $register->name = $request->input('name');
        $register->email = $request->input('email');
        $register->password = bcrypt($request->input('password'));
        $register->save();

        return redirect('sigin')->with('success', 'Registration successful.');
    }


    public function dashboard(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Check for 'business_mode' checkbox
            if ($request->has('business_mode')) {
                return redirect()->route('businessdashboard.dashboard');
            }

            // Role-based redirect fallback
            return match (Auth::user()->role) {
                'admin' => redirect()->route('admin.dashboard'),
                'businessowner' => redirect()->route('businessdashboard.dashboard'),
                'user' => redirect()->route('index'),
               
            };
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}
