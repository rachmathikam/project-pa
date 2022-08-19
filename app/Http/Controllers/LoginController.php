<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    public function index(){
        if($user = Auth::user()){
            // if($user->level == '1' && '2' && '3' ){
            //     return  redirect()->intended('beranda');
            // }elseif($user->level == '2'){
            //     return  redirect()->intended('guru');
            // }
            return  redirect()->intended('/');
        }
        return view('login.view_login');
    }

    public function proses(Request $request){
        $request->validate([
            'email' => 'required',
            'password'=>'required',
        ],
        [
            'email.required' => 'Email tidak boleh kosong',

        ]
    );
    $kredensial = $request->only('email', 'password');
    if(Auth::attempt($kredensial)){
        $request->session()->regenerate();
        $user = Auth::user();

        // if($user->level == '1'){
        //     return  redirect()->intended('beranda');

        // }elseif($user->level == '2'){
        //     return  redirect()->intended('guru');
        // }
            if($user){
            return  redirect()->intended('/');

            }
        return redirect()->intended('/');
    }
    return back()->withErrors([
        'email' => 'Maaf Email atau Password anda salah',

        ])->onlyInput('email');
    }

    public function logout(Request $request)
{
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
}

}
