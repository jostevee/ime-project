<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginWithGoogleController;
use App\Http\Controllers\FrontEndController;

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
Route::get('home', [FrontEndController::class, 'home']);
Route::get('talkshow', [FrontEndController::class, 'talkshow']);
Route::get('talkshow-details/{id}', [FrontEndController::class, 'talkshowDetails']);
Route::get('games', [FrontEndController::class, 'games']);
Route::get('ngo', [FrontEndController::class, 'ngo']);
Route::get('medpart', [FrontEndController::class, 'medpart']);
Route::get('donation', [FrontEndController::class, 'donation']);
Route::get('merchandise', [FrontEndController::class, 'merchandise']);
Route::get('authorized/google', [LoginWithGoogleController::class, 'redirectToGoogle']);
Route::get('authorized/google/callback', [LoginWithGoogleController::class, 'handleGoogleCallback']);
