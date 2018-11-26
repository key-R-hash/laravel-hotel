<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class RegistrationController extends Controller
{
    public function __construct()
    {
//        $this->middleware("auth")->except("login");
    }
    public function login(){

        if(!Auth::check())
            return view('sessions.login');
        else
            return redirect("/permition");

    }

    public function loginvalidate(){

        if(!Auth::check()){
            $email = request('email');
            $password = request('password');
            if(!Auth::attempt(['email' => $email, 'password' => $password])){
                return back()->withErrors([

                    'message' => 'Please check your credentials and try again.'

                ]);
            }else{

                return redirect('/admin');
//        session()->flash('message','Thanks so much for singing up!');
            }

        }else {
            return redirect("/permision");
        }
    }

    public function destroy(){

        auth()->logout();

        return redirect()->home();
    }

}
