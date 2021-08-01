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

Route::get('/', function () {return redirect('/home');});
Route::get('about', [FrontEndController::class, 'about']);
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

// Writer Auth
Route::get('/login-admin', [LoginController::class, 'login']); //->name('login');
Route::post('/login-admin', [LoginController::class, 'authAdmin']);
Route::get('/signup', [LoginController::class, 'signup']);
Route::post('/signup', [LoginController::class, 'registerWriter']);
Route::get('/logout', [LoginController::class, 'logout']);

// Writer - Admin
Route::middleware('auth:admin')->group(function () {
    Route::get('/writer', [WriterController::class, 'index']);
    Route::get('/writer/ngo/list', [WriterController::class, 'myNGO']);
    Route::get('/writer/ngo/add', [WriterController::class, 'addNGO']);
    Route::post('/writer/ngo/add', [WriterController::class, 'saveNGO']);
    Route::get('/writer/ngo/edit/{id}', [WriterController::class, 'editNGO']);
    Route::post('/writer/ngo/edit/{id}', [WriterController::class, 'updateNGO']);
    Route::post('/writer/ngo/delete/{id}', [WriterController::class, 'deleteNGO']);
    Route::get('/writer/ngo/{id}', [WriterController::class, 'lookNGO']);

    Route::get('/writer/job/list', [WriterController::class, 'myCareer']);
    Route::get('/writer/job/add', [WriterController::class, 'addCareer']);
    Route::post('/writer/job/add', [WriterController::class, 'saveCareer']);
    Route::get('/writer/job/edit/{id}', [WriterController::class, 'editCareer']);
    Route::post('/writer/job/edit/{id}', [WriterController::class, 'updateCareer']);
    Route::post('/writer/job/delete/{id}', [WriterController::class, 'deleteCareer']);
    Route::get('/writer/job/{id}', [WriterController::class, 'lookCareer']);
    Route::get('/writer/faq/list', [WriterController::class, 'myFAQ']);
    Route::get('/writer/faq/add', [WriterController::class, 'addFAQ']);
    Route::post('/writer/faq/add', [WriterController::class, 'saveFAQ']);
    Route::get('/writer/faq/edit/{id}', [WriterController::class, 'editFAQ']);
    Route::post('/writer/faq/edit/{id}', [WriterController::class, 'updateFAQ']);
    Route::post('/writer/faq/delete/{id}', [WriterController::class, 'deleteFAQ']);
    Route::get('/writer/faq/{id}', [WriterController::class, 'lookFAQ']);
    Route::get('/writer/editAccount/{id}', [WriterController::class, 'editAccount']);
    Route::post('/writer/editAccount/{id}', [WriterController::class, 'updateAccount']);
});
