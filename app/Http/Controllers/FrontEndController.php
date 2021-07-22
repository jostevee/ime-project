<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontEndController extends Controller
{
    // This is a controller for all of IME's frontend pages
    public function home(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('home'); //, compact('event')
    }
}
