<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Medpart;
use App\Models\NGO;
use App\Models\TalkshowDay;
use App\Models\TalkshowDetail;

class FrontEndController extends Controller
{
    // This is a controller for all of IME's frontend pages
    public function home(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('home'); //, compact('event')
    }

    public function talkshow(){
        $data = TalkshowDay::orderByDesc('day_title')->get();

        return view('talkshow_room', compact('data')); //, compact('event')
    }

    public function talkshowDetails($id){
        $data_root = TalkshowDay::where('id', $id)->firstOrFail();
        $data = TalkshowDetail::where('id_talkshow', $id)->orderByDesc('created_at')->get();
        // $event = Event::orderByDesc('created_at')->take(4)->get();

        return view('talkshow_details', compact('data', 'data_root')); //, compact('event')
    }

    public function games(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('games'); //, compact('event')
    }

    public function ngo(){
        $ngo = NGO::orderByDesc('created_at')->take(4)->get();

        return view('ngo', compact('ngo')); //, compact('event')
    }

    public function medpart(){
        $medpart = Medpart::orderByDesc('created_at')->get();

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
