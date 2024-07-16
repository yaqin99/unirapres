<?php

namespace App\Http\Controllers;

use App\Helpers\ExternalAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function signIn (Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 
        ExternalAuth::SIMAT($req->username , $req->password);
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


