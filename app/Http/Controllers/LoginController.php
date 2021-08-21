<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Models\Writer;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use function Symfony\Component\HttpFoundation\get;
// use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:writer')->except('login', 'logoutAdmin', 'logout');
        $this->middleware('guest:web')->except('logout');
    }

    public function login(){
        return view('writer/login_admin');
    }

    public function loginAdmin(){
        return view('admin/login');
    }

    /*
    public function auth(Request $request){
        if(Auth::guard('web')->user() != null){
            return redirect()->intended('/writer');
        } elseif (Auth::guard('web')->attempt(['user_id' => $request->user_id, 'password' => $request->password])) {
            return redirect()->intended('/writer');
        }

        return redirect('/login')->with('error','Invalid login credentials');
    }
    */

    public function authAdmin(Request $request){
        if(Auth::guard('writer')->user() != null){
            return redirect()->intended('/writer');
        } elseif (Auth::guard('writer')->attempt(['user_id' => $request->user_id, 'password' => $request->password])) {
            return redirect()->intended('/writer');
        }

        return redirect('/login-admin')->with('error','Invalid login credentials');
    }

    /*
    public function authJoin(Request $request){
        if ($request->admin == 0){
            if (Auth::guard('web')->attempt(['user_id' => $request->user_id, 'password' => $request->password])) {
                return redirect()->intended('/writer');
            } else {
                return redirect('/login')->with('error','Invalid login credentials');
            }
        } elseif ($request->admin == 1){
            if (Auth::guard('writer')->attempt(['user_id' => $request->user_id, 'password' => $request->password])){
                return redirect()->intended('/admin');
            } else {
                return redirect('/admin/login')->with('error','Invalid login credentials');
            }
        }
    }
    */

    public function signup(){
        return view('signup');
    }

    public function registerWriter(Request $request){
        $validatedData = $request->validate([
            'user_id' => 'required|unique:writer|max:255',
            'password' => 'required|min:6',
            'name' => 'required',
        ]);

        $writer = new Writer();
        $writer->name = $request->name;
        $writer->user_id = $request->user_id;
        $writer->password = Hash::make($request->password);
        $writer->save();

        return redirect('/login-admin')->with('success', 'Registration process successful, please sign in');
    }

    public function editAccount(Request $request){
        $name = $request->$name;
        $user_id = $request->$user_id;
        $password = $request->$password;

        $validatedData = $request->validate([
            'user_id' => 'required|unique:writer|max:255',
            'password' => 'required|min:6',
            'name' => 'required',
        ]);

        $writer = get(Writer::all());
        $writer->name = $request->name;
        $writer->user_id = $request->user_id;
        $writer->password = Hash::make($request->password);
        $writer->save();

        return redirect('/login-admin')->with('success', 'Update Account successful, please sign in');
    }

    public function logout(){
        // if (Auth::guard('web')->check()) {
        //     Auth::guard('web')->logout();
        //     return redirect('/login');
        // } else
        
        if (Auth::guard('writer')->check()) {
            Auth::guard('writer')->logout();
            return redirect('/login-admin');
        }
    }

    public function logoutAdmin(){
        return redirect('/logout');
    }
}
