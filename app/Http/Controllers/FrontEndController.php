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

    public function talkshow(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('talkshow'); //, compact('event')
    }

    public function talkshow($id){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('talkshow_details'); //, compact('event')
    }

    public function games(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('games'); //, compact('event')
    }

    public function ngo(){
        $ngo = Event::orderByDesc('created_at')->take(4)->get();

        return view('ngo'); //, compact('event')
    }

    public function medpart(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('medpart'); //, compact('event')
    }

    public function donation(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('donation'); //, compact('event')
    }

    public function merchandise(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('merchandise'); //, compact('event')
    }
}
