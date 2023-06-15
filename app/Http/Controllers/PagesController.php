<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{

    public function home() {
        if( Auth::guest() ) {
            dd('controller');
            return view('home');
        } else {
            return view('dashboard');
        }
    }

    public function acercade() {
        return view('acercade');
    }

    public function contacto() {
        return view('contacto');
    }

    public function me() {
        return view('me');
    }

    public function test() {
        return view('test');
    }

    public function test2() {
        return view('test2');
    }

}
