<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class SessionsController extends Controller
{
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
        $loggedInUserName = Auth::user()->name;
        $currentUserRole = User::where('name', $loggedInUserName)->first()->role;
        if($currentUserRole == null) return back();
        if($currentUserRole !== 'admin' || 'author') return view('auth.admin.dashboard');

    }

}
