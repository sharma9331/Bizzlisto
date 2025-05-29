<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class Forgetpassword extends Controller
{
    // Show the forget password form
    public function forgetpassword()
    {
        return view('email.forgetpassword');
    }

    // Handle form submission for forgetting password
    public function forgetpasswordform(Request $request)
    {
        $request->validate([
            'email' => "required|email|exists:users,email"
        ]);

        $token = Str::random(70);

        // Store token in forget_password table
        DB::table('forget_password')->updateOrInsert(
            ['email' => $request->email],
            [
                'token' => $token,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        );

        // Send reset email
        Mail::send("emails.forgetpassword", ["token" => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject("Reset Your Password");
        });

        return redirect()->route("sigin")->with("success", "We have sent you a password reset link.");
    }

    public function showlinkform( $token){
        return view("email.forgetpasswordlink",compact("token"));

        
    }

     public function resetpassword( Request $request){
       $request->validate([
        'email' =>"required|email|exists|users",
        'password' =>"required|confirmed"

       ]);

       $first=DB::table("forget_password")->where("email",$request->email)->where("token",$request->token)->first();

        
    }
}
