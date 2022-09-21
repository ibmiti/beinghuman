<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SessionsController extends Controller
{

    // login view
    public function create(){
        return view('auth.create');
    }

    public function store(){
        // validate incoming request first.
         $attributes=request()->validate([
            'email'=>'required|email',
            'password'=> 'required'
         ]);

        // attempt to authenticate user ( using provided credentials )
        // then, login user to seesion
        if(auth()->attempt($attributes)){
            return redirect('/')->with('success', 'Welcome Back!');
        }

        // AUTH failed
        return Back()->withInput()
        ->withErrors([
            'email'=>'Your provided credentials could not be verified',
            'password'=>"Password entered was invalid. Try again."
    ]);
    }

    // logout the user from session
    public function destroy()
    {
        Session::flush();
        auth()->logout(); // or Auth::logout();
        return redirect('/')->with('success', 'GoodBye!');
    }

    // Only admin or authors should be able to get here
    public function dashboard()
    {

        // dd('here');
        // $loggedInUserName = Auth::user()->name;
        // $currentUserRole = User::where('name', $loggedInUserName)->first()->role;
        // if($currentUserRole == null) return back();
        // if($currentUserRole !== 'admin' || 'author')

        return view('auth.admin.dashboard');

    }

}
