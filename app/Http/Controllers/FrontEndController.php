<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Medpart;
use App\Models\NGO;
use App\Models\TalkshowDetail;
use App\Models\TalkshowDay;
use App\Models\TalkshowSpeaker;
use Auth;

// use Illuminate\Support\Facades\Auth;

class FrontEndController extends Controller
{
    // This is a controller for all of IME's frontend pages
    public function home(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();
        $data_speaker = TalkshowSpeaker::all();
        $data_day = TalkshowDay::orderBy('title')->get();
        $data_detail = TalkshowDetail::orderByDesc('from_time')->get();

        return view('home', compact('data_speaker', 'data_day', 'data_detail')); //, compact('event')
    }

    public function savePayment(Request $request){
        $ngo = new NGO();
        $ngo->name = $request->input('name');
        $ngo->info = $request->input('info');
        $ngo->video = $request->input('video');
        $ngo->ig = $request->input('ig');
        $ngo->fb = $request->input('fb');

        if ($request->hasFile('img_link')) {
            $gambar = $request->file('img_link');
            $fileName = time().$gambar->getClientOriginalName();

            // Create 'img/event_list' directory if it isn't available yet
            if(!is_dir('assets/img/ngo_list')) {
                mkdir('assets/img/ngo_list', 0777, true);
            }

            // Move the file to the selected directory
            $request->file('img_link')->move('assets/img/ngo_list', $fileName);

            $ngo->logo = $fileName;
        } else {
            $ngo->logo = '';
        }

        $ngo->save();

        return redirect('/writer/ngo/list');
      }

    public function test(){
        return view('test');
    }

    public function about(){
        return redirect('/home#about');
    }

    public function speaker(){
        return redirect('/home#speaker');
    }

    public function schedule(){
        return redirect('/home#schedule');
    }
    

    public function talkshow(){
        $data = TalkshowDay::orderByDesc('title')->get();

        return view('talkshow_room', compact('data')); //, compact('event')
    }

    public function talkshowDetails($id){
        $data_root = TalkshowDay::where('id', $id)->firstOrFail();
        $data = TalkshowDetail::where('id_day', $id)->orderByDesc('created_at')->get();
        // $event = Event::orderByDesc('created_at')->take(4)->get();

        return view('talkshow_details', compact('data', 'data_root')); //, compact('event')
    }

    public function games(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('games'); //, compact('event')
    }

    public function ngo(){
        $data = NGO::orderByDesc('created_at')->get();

        return view('ngo', compact('data')); //, compact('event')
    }

    public function medpart(){
        $data = Medpart::orderByDesc('id')->get();

        return view('medpart', compact('data')); //, compact('event')
    }

    public function donation(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('donation'); //, compact('event')
    }

    public function merchandise(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('merchandise'); //, compact('event')
    }

    public function misatoto(){
        //$event = Event::orderByDesc('created_at')->take(4)->get();

        return view('misatoto'); //, compact('event')
    }

    // Login landing page
    public function landingLogin() {
        if(Auth::guard('writer')->user() != null){
            return redirect('/writer');
        } else {
            return redirect()->intended('/login-admin');
        }
    }
}
