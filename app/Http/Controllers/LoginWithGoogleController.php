<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Exception;

class LoginWithGoogleController extends Controller
{
    //
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
      
            $user = Socialite::driver('google')->user();
            $finduser = User::where('google_id', $user->id)->where('done_paid', '0')->first();
            $paiduser = User::where('google_id', $user->id)->where('done_paid', '1')->first();
       
            if ($paiduser) {
                Auth::login($paiduser);
                return redirect()->intended('dashboard');
                // Auth::guard('customer')->login($newUser);
            } else if ($finduser) {
                return redirect()->intended('home#notpaid');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'done_paid'=> 0,
                    'password' => encrypt('123456')
                    // 'password' => encrypt('123456')
                ]);
                Auth::login($newUser);
                // $socialUserObject = $user->userFromToken($token);

                return redirect()->intended('/dashboard');
                // Auth::guard('customer')->login($newUser);    
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
