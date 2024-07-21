<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dosen;
use Illuminate\Support\Facades\Storage;


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
    public function update($id){
        $data = Dosen::find($id);
        $profilDosen = $data->foto; 
        if($profilDosen !== null){
            Storage::disk('public')->delete('fotoProfil/'.$data->foto);
            $profilDosen = uniqid().'.'.request()->file('fotoProfil')->extension();
            request()->file('fotoProfil')->storeAs('fotoProfil' , $profilDosen , ['disk' => 'public']);

        } else {
            $profilDosen = uniqid().'.'.request()->file('fotoProfil')->extension();
            request()->file('fotoProfil')->storeAs('fotoProfil' , $profilDosen , ['disk' => 'public']);
        }
                
        $updating = Dosen::where('id',$id)->update([
            'nama_depan' => request('nama_depan'),
            'nama_belakang' => request('nama_depan') ,
            'foto' => $profilDosen,
            'email' => request('email'),
            'alamat' => request('alamat'),
            'no_hp' => request('no_hp'),
        ]);

        if($updating){
            return redirect('dosen/akun/'.$data->id);
        }
    }
}
