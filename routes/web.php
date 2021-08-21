<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\FrontEndController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WriterController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('google7582d4fd2d46f6e4.html', function () {return redirect('/');});

Route::get('/', function () {return redirect('/home');});
Route::get('about', [FrontEndController::class, 'about']);
Route::get('speaker', [FrontEndController::class, 'speaker']);
Route::get('schedule', [FrontEndController::class, 'schedule']);
Route::get('home', [FrontEndController::class, 'home']);
Route::get('talkshow', [FrontEndController::class, 'talkshow']);
Route::get('talkshow/{id}', [FrontEndController::class, 'talkshowDetails']);
Route::get('games', [FrontEndController::class, 'games']);
Route::get('ngo', [FrontEndController::class, 'ngo']);
Route::get('ngo/{id}', [FrontEndController::class, 'ngoDetails']);
Route::get('medpart', [FrontEndController::class, 'medpart']);
Route::get('medpart/{id}', [FrontEndController::class, 'medpartDetails']);
Route::get('donation', [FrontEndController::class, 'donation']);
Route::get('merchandise', [FrontEndController::class, 'merchandise']);

// Google Authorization
Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);

// Login landing page
Route::get('/panel', [FrontEndController::class, 'landingLogin'])->name('not-login');
Route::get('/writer', function () {return redirect('/panel');});

// Writer Auth
Route::get('/login-admin', [LoginController::class, 'login']); //->name('login');
Route::post('/login-admin', [LoginController::class, 'authAdmin']);
Route::get('/sign-up', [LoginController::class, 'signup']);
Route::post('/sign-up', [LoginController::class, 'registerWriter']);
Route::get('/logout', [LoginController::class, 'logout']);

// Writer - Admin
Route::middleware('auth:writer')->group(function () {
    Route::get('/writer', [WriterController::class, 'index']);

    Route::get('/writer/ngo/list', [WriterController::class, 'myNGO']);
    Route::get('/writer/ngo/add', [WriterController::class, 'addNGO']);
    Route::post('/writer/ngo/add', [WriterController::class, 'saveNGO']);
    Route::get('/writer/ngo/edit/{id}', [WriterController::class, 'editNGO']);
    Route::post('/writer/ngo/edit/{id}', [WriterController::class, 'updateNGO']);
    Route::post('/writer/ngo/delete/{id}', [WriterController::class, 'deleteNGO']);
    Route::get('/writer/ngo/{id}', [WriterController::class, 'lookNGO']);

    Route::get('/writer/medpart/list', [WriterController::class, 'myMedpart']);
    Route::get('/writer/medpart/add', [WriterController::class, 'addMedpart']);
    Route::post('/writer/medpart/add', [WriterController::class, 'saveMedpart']);
    Route::get('/writer/medpart/edit/{id}', [WriterController::class, 'editMedpart']);
    Route::post('/writer/medpart/edit/{id}', [WriterController::class, 'updateMedpart']);
    Route::post('/writer/medpart/delete/{id}', [WriterController::class, 'deleteMedpart']);
    Route::get('/writer/medpart/{id}', [WriterController::class, 'lookMedpart']);

    Route::get('/writer/talkshow-day/list', [WriterController::class, 'myTalkshowDay']);
    Route::get('/writer/talkshow-day/add', [WriterController::class, 'addTalkshowDay']);
    Route::post('/writer/talkshow-day/add', [WriterController::class, 'saveTalkshowDay']);
    Route::get('/writer/talkshow-day/edit/{id}', [WriterController::class, 'editTalkshowDay']);
    Route::post('/writer/talkshow-day/edit/{id}', [WriterController::class, 'updateTalkshowDay']);
    Route::post('/writer/talkshow-day/delete/{id}', [WriterController::class, 'deleteTalkshowDay']);
    Route::get('/writer/talkshow-day/{id}', [WriterController::class, 'lookTalkshowDay']);

    Route::get('/writer/talkshow-speaker/list', [WriterController::class, 'myTalkshowSpeaker']);
    Route::get('/writer/talkshow-speaker/add', [WriterController::class, 'addTalkshowSpeaker']);
    Route::post('/writer/talkshow-speaker/add', [WriterController::class, 'saveTalkshowSpeaker']);
    Route::get('/writer/talkshow-speaker/edit/{id}', [WriterController::class, 'editTalkshowSpeaker']);
    Route::post('/writer/talkshow-speaker/edit/{id}', [WriterController::class, 'updateTalkshowSpeaker']);
    Route::post('/writer/talkshow-speaker/delete/{id}', [WriterController::class, 'deleteTalkshowSpeaker']);
    Route::get('/writer/talkshow-speaker/{id}', [WriterController::class, 'lookTalkshowSpeaker']);

    Route::get('/writer/talkshow-detail/list', [WriterController::class, 'myTalkshowDetail']);
    Route::get('/writer/talkshow-detail/add', [WriterController::class, 'addTalkshowDetail']);
    Route::post('/writer/talkshow-detail/add', [WriterController::class, 'saveTalkshowDetail']);
    Route::get('/writer/talkshow-detail/edit/{id}', [WriterController::class, 'editTalkshowDetail']);
    Route::post('/writer/talkshow-detail/edit/{id}', [WriterController::class, 'updateTalkshowDetail']);
    Route::post('/writer/talkshow-detail/delete/{id}', [WriterController::class, 'deleteTalkshowDetail']);
    Route::get('/writer/talkshow-detail/{id}', [WriterController::class, 'lookTalkshowDetail']);

    Route::get('/writer/editAccount/{id}', [WriterController::class, 'editAccount']);
    Route::post('/writer/editAccount/{id}', [WriterController::class, 'updateAccount']);
});
