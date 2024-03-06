<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function signIn(){
        // $data = Kategori::all();
        return view('dosen/auth/signIn');
    }
    public function signUp(){
        // $data = Kategori::all();
        return view('dosen/auth/signUp');
    }
}
