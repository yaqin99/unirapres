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
        $curl = curl_init();
        
        curl_setopt_array($curl, [
          CURLOPT_URL => "https://api.unira.ac.id/v1/token",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "-----011000010111000001101001\r\nContent-Disposition: form-data; name=\"username\”\r\n\r\n”nimmu”\r\n——011000010111000001101001\r\nContent-Disposition: form-data; name=\"password\”\r\n\r\n”password”\r\n——011000010111000001101001--\r\n",
          CURLOPT_COOKIE => "PHPSESSID=4jejk0dtbvgdc371ovtnvund89",
          CURLOPT_HTTPHEADER => [
            "Content-Type: multipart/form-data; boundary=---011000010111000001101001",
            "User-Agent: insomnia/9.3.2"
          ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
          echo $response;
        }

        
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
