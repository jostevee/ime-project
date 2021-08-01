<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Writer;
use App\Models\NGO;
use App\Models\Medpart;
use App\Models\FAQ;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class WriterController extends Controller
{
    // EVENTS
    public function index(){
        $data = Writer::where('id', Auth::guard('admin')->user()->id)->firstOrFail();

        return view('dashboard_admin', compact('data'));
    }

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
            $ngo->img_link = '';
        }

        $ngo->save();

        return redirect('/writer/ngo/list');
    }

    public function editNGO($id){
        $data = NGO::where('id', $id)->firstOrFail();

        return view('writer/edit_single_ngo', compact('data'));
    }

    public function updateNGO(Request $request, $id){
        $ngo =  NGO::where('id', $id)->firstOrFail();
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
        $ngo =  NGO::where('id', $id)->firstOrFail();
        $ngo->delete();

        return redirect('/writer/ngo/list')->with('success', 'Selected NGO succesfully deleted');
    }

    public function myNGO(){
        $ngo = NGO::orderByDesc('created_at')->get();

        return view('writer/my_ngo', compact('ngo'));
    }

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
            $medpart->img_link = '';
        }

        $medpart->save();

        return redirect('/writer/medpart/list');
    }

    public function editMedpart($id){
        $medpart = Medpart::where('id', $id)->firstOrFail();

        return view('writer/edit_single_medpart', compact('medpart'));
    }

    public function updateMedpart(Request $request, $id){
        $ngo =  Medpart::where('id', $id)->firstOrFail();
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

        return redirect('/writer/medpart/list');
    }

    public function deleteMedpart(Request $request, $id){
        $medpart =  Medpart::where('id', $id)->firstOrFail();
        $medpart->delete();

        return redirect('/writer/medpart/list')->with('success', 'Selected Media Partner succesfully deleted');
    }

    public function myMedpart(){
        $medpart = Medpart::orderByDesc('created_at')->get();

        return view('writer/my_medpart', compact('medpart'));
    }
}
