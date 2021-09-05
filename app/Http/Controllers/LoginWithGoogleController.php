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
            $finduser = User::where('google_id', $user->id)->where('paid_status', '0')->first();
            $paiduser = User::where('google_id', $user->id)->where('paid_status', '1')->first();
       
            if ($paiduser) {
                Auth::login($paiduser);
                return redirect()->intended('home');
                // Auth::guard('customer')->login($newUser);
            } else if ($finduser) {
                Auth::login($finduser);
                return redirect()->intended('home');
            } else {
                $newUser = User::create([
                    'name' => $user->name,
                    'email' => $user->email,
                    'google_id'=> $user->id,
                    'paid_status'=> 0,
                    'password' => encrypt('123456')
                    // 'password' => encrypt('123456')
                ]);
                Auth::login($newUser);
                // $socialUserObject = $user->userFromToken($token);

                return redirect()->intended('home');
                // return redirect()->intended('/dashboard');
                // Auth::guard('customer')->login($newUser);    
            }
      
        } catch (Exception $e) {
            dd($e->getMessage());
        }
    }
}
