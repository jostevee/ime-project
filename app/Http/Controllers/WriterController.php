<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Writer;
use App\Models\NGO;
use App\Models\Medpart;
use App\Models\TalkshowDay;
use App\Models\TalkshowDetail;
use App\Models\TalkshowSpeaker;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WriterController extends Controller
{
    // EVENTS
      public function index(){
        $data = Writer::where('id', Auth::guard('writer')->user()->id)->firstOrFail();

        return view('dashboard_admin', compact('data'));
      }

    // NGO
      public function lookNGO($id){
        $data = NGO::where('id', $id)->firstOrFail();

        return view('writer/look_single_ngo', compact('data'));
      }

      public function addNGO(){
        return view('writer/add_ngo');
      }

      public function saveNGO(Request $request){
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

      public function editNGO($id){
        $ngo = NGO::where('id', $id)->firstOrFail();

        return view('writer/edit_single_ngo', compact('ngo'));
      }

      public function updateNGO(Request $request, $id){
        $ngo = NGO::where('id', $id)->firstOrFail();
        $ngo->info = $request->input('info');
        $ngo->video = $request->input('video');
        $ngo->ig = $request->input('ig');
        $ngo->fb = $request->input('fb');

            /*
            if ($request->input('img_link_update') != null) {
                if ($request->hasFile('img_link_update')) {
                    $event->img_link = '';
                    $gambar = $request->file('img_link_update');
                    $fileName = time().$gambar->getClientOriginalName();

                    if(!is_dir('img')) {
                        mkdir('img', 0777, true);
                    }
                    $request->file('img_link_update')->move('img/', $fileName);

                    $event->img_link = $fileName;
                } else {
                    $event->img_link = '';
                }
            }
            */

        $ngo->save();

        return redirect('/writer/ngo/list');
      }

      public function deleteNGO(Request $request, $id){
        $ngo = NGO::where('id', $id)->firstOrFail();
        $ngo->delete();

        return redirect('/writer/ngo/list')->with('success', 'Selected NGO succesfully deleted');
      }

      public function myNGO(){
        $ngo = NGO::orderByDesc('created_at')->get();

        return view('writer/my_ngo', compact('ngo'));
      }

    // Medpart
      public function lookMedpart($id){
        $data = Medpart::where('id', $id)->firstOrFail();

        return view('writer/look_single_medpart', compact('data'));
      }

      public function addMedpart(){
        return view('writer/add_medpart');
      }

      public function saveMedpart(Request $request){
        $medpart = new Medpart();
        $medpart->name = $request->input('name');
        $medpart->info = $request->input('info');
        $medpart->video = $request->input('video');
        $medpart->ig = $request->input('ig');
        $medpart->fb = $request->input('fb');

        if ($request->hasFile('img_link')) {
            $gambar = $request->file('img_link');
            $fileName = time().$gambar->getClientOriginalName();

            // Create 'img/event_list' directory if it isn't available yet
            if(!is_dir('assets/img/medpart_list')) {
                mkdir('assets/img/medpart_list', 0777, true);
            }

            // Move the file to the selected directory
            $request->file('img_link')->move('assets/img/medpart_list', $fileName);

            $medpart->logo = $fileName;
        } else {
            $medpart->logo = '';
        }

        $medpart->save();

        return redirect('/writer/medpart/list');
      }

      public function editMedpart($id){
        $medpart = Medpart::where('id', $id)->firstOrFail();

        return view('writer/edit_single_medpart', compact('medpart'));
      }

      public function updateMedpart(Request $request, $id){
        $medpart = Medpart::where('id', $id)->firstOrFail();
        $medpart->info = $request->input('info');
        $medpart->video = $request->input('video');
        $medpart->ig = $request->input('ig');
        $medpart->fb = $request->input('fb');

            /*
            if ($request->input('img_link_update') != null) {
                if ($request->hasFile('img_link_update')) {
                    $event->img_link = '';
                    $gambar = $request->file('img_link_update');
                    $fileName = time().$gambar->getClientOriginalName();

                    if(!is_dir('img')) {
                        mkdir('img', 0777, true);
                    }
                    $request->file('img_link_update')->move('img/', $fileName);

                    $event->img_link = $fileName;
                } else {
                    $event->img_link = '';
                }
            }
            */

        $medpart->save();

        return redirect('/writer/medpart/list');
      }

      public function deleteMedpart(Request $request, $id){
        $medpart = Medpart::where('id', $id)->firstOrFail();
        $medpart->delete();

        return redirect('/writer/medpart/list')->with('success', 'Selected Media Partner succesfully deleted');
      }

      public function myMedpart(){
        $medpart = Medpart::orderByDesc('created_at')->get();

        return view('writer/my_medpart', compact('medpart'));
      }
    
    // TalkshowDay
      public function lookTalkshowDay($id){
        $data = TalkshowDay::where('id', $id)->firstOrFail();

        return view('writer/look_single_talkshow_day', compact('data'));
      }

      public function addTalkshowDay(){
        return view('writer/add_talkshow_day');
      }

      public function saveTalkshowDay(Request $request){
        $talkshow_day = new TalkshowDay();
        $talkshow_day->title = $request->input('title');
        $talkshow_day->theme = $request->input('theme');

        $talkshow_day->save();

        return redirect('/writer/talkshow-day/list');
      }

      public function editTalkshowDay($id){
        $talkshow_day = TalkshowDay::where('id', $id)->firstOrFail();

        return view('writer/edit_single_talkshow_day', compact('talkshow_day'));
      }

      public function updateTalkshowDay(Request $request, $id){
        $talkshow_day = TalkshowDay::where('id', $id)->firstOrFail();
        $talkshow_day->title = $request->input('title');
        $talkshow_day->theme = $request->input('theme');

        $talkshow_day->save();

        return redirect('/writer/talkshow-day/list');
      }

      public function deleteTalkshowDay(Request $request, $id){
        $talkshow_day =  TalkshowDay::where('id', $id)->firstOrFail();
        $talkshow_day->delete();

        return redirect('/writer/talkshow-day/list')->with('success', 'Selected Talkshow Day succesfully deleted');
      }

      public function myTalkshowDay(){
        $talkshow_day = TalkshowDay::orderByDesc('created_at')->get();

        return view('writer/my_talkshow_day', compact('talkshow_day'));
      }

    // TalkshowSpeaker
      public function lookTalkshowSpeaker($id){
        $data = TalkshowSpeaker::where('id', $id)->firstOrFail();

        return view('writer/look_single_talkshow_speaker', compact('data'));
      }

      public function addTalkshowSpeaker(){
        return view('writer/add_talkshow_speaker');
      }

      public function saveTalkshowSpeaker(Request $request){
        $talkshow_speaker = new TalkshowSpeaker();
        $talkshow_speaker->name = $request->input('name');
        $talkshow_speaker->organization = $request->input('organization');

        if ($request->hasFile('img_link')) {
          $gambar = $request->file('img_link');
          $fileName = time().$gambar->getClientOriginalName();

          // Create 'img/event_list' directory if it isn't available yet
          if(!is_dir('assets/img/talkshow_speaker_list')) {
              mkdir('assets/img/talkshow_speaker_list', 0777, true);
          }

          // Move the file to the selected directory
          $request->file('img_link')->move('assets/img/talkshow_speaker_list', $fileName);
          $talkshow_speaker->image = $fileName;
        } else {
            $talkshow_speaker->image = '';
        }

        $talkshow_speaker->save();

        return redirect('/writer/talkshow-speaker/list');
      }

      public function editTalkshowSpeaker($id){
        $talkshow_speaker = TalkshowSpeaker::where('id', $id)->firstOrFail();

        return view('writer/edit_single_talkshow_speaker', compact('talkshow_speaker'));
      }

      public function updateTalkshowSpeaker(Request $request, $id){
        $talkshow_speaker = TalkshowSpeaker::where('id', $id)->firstOrFail();
        $talkshow_speaker->name = $request->input('name');
        $talkshow_speaker->speaker = $request->input('speaker');
        $talkshow_speaker->organization = $request->input('org');
        
        $talkshow_speaker->save();

        return redirect('/writer/talkshow-speaker/list');
      }

      public function deleteTalkshowSpeaker(Request $request, $id){
        $talkshow_speaker = TalkshowSpeaker::where('id', $id)->firstOrFail();
        $talkshow_speaker->delete();

        return redirect('/writer/talkshow-speaker/list')->with('success', 'Selected Talkshow Speaker succesfully deleted');
      }

      public function myTalkshowSpeaker(){
        $talkshow_speaker = TalkshowSpeaker::orderByDesc('created_at')->get();

        return view('writer/my_talkshow_speaker', compact('talkshow_speaker'));
      }


    // TalkshowDetail
      public function lookTalkshowDetail($id){
        $data = TalkshowDetail::where('id', $id)->firstOrFail();

        return view('writer/look_single_talkshow_detail', compact('data'));
      }

      public function addTalkshowDetail(){
        $data_day = TalkshowDay::all();
        $data_speaker = TalkshowSpeaker::all();

        return view('writer/add_talkshow_detail', compact('data_day', 'data_speaker'));
      }

      public function saveTalkshowDetail(Request $request){
        $talkshow_detail = new TalkshowDetail();
        $talkshow_detail->title = $request->input('title');
        $talkshow_detail->theme = $request->input('theme');

        $talkshow_detail->save();

        return redirect('/writer/talkshow-detail/list');
      }

      public function editTalkshowDetail($id){
        $talkshow_day = TalkshowDay::where('id', $id)->firstOrFail();

        return view('writer/edit_single_talkshow_detail', compact('talkshow_day'));
      }

      public function updateTalkshowDetail(Request $request, $id){
        $talkshow_day = TalkshowDay::where('id', $id)->firstOrFail();
        $talkshow_day->title = $request->input('title');
        $talkshow_day->theme = $request->input('theme');

        $talkshow_day->save();

        return redirect('/writer/talkshow-detail/list');
      }

      public function deleteTalkshowDetail(Request $request, $id){
        $talkshow_day =  TalkshowDay::where('id', $id)->firstOrFail();
        $talkshow_day->delete();

        return redirect('/writer/talkshow-day/list')->with('success', 'Selected Talkshow Day succesfully deleted');
      }

      public function myTalkshowDetail(){
        $talkshow_day = TalkshowDay::orderByDesc('created_at')->get();

        return view('writer/my_talkshow_day', compact('talkshow_day'));
      }

}
