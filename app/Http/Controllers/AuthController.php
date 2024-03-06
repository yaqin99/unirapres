<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ; 

class AuthController extends Controller
{
    public function signIn (Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 

        
        // $nama = User::select('name')->where('username' , $req->username)->first();
        if (Auth::guard('dosen')->attempt(['username' => $req->username , 'password' => $req->password] , $req->remember)) {
            request()->session()->regenerate();
 
            return redirect()->intended('/')->with('success' , 'Selamat Datang Kembali');;
        } else {
            return back()->with('gagal' , 'Login Gagal');
        }

        if (Auth::viaRemember()) {

            request()->session()->regenerate();

            return redirect()->intended('/');
        }

        
    }

    public function logOut(){
        Auth::guard('dosen')->logout();
        //$request dan request() itu sama aja 
    request()->session()->invalidate();
 
    request()->session()->regenerateToken();
 
    return redirect('/');
     }
}
