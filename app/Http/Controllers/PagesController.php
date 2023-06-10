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

    public function test() {
        return view('test');
    }

    public function test2() {
        return view('test2');
    }

}
