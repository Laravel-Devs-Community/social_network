<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function home() {
        if( Auth::guest() ) {
            return view('home');
        } else {
            return view('dashboard');
        }
    }

    public function notifications() {
        return view('notifications');
    }

    public function messages() {
        return view('messages');
    }

    public function friends() {
        return view('friends');
    }
}
