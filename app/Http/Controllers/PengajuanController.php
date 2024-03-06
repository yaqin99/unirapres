<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function layout(){
        $data = Kategori::all();
        return view('dosen/welcome' , [
            'kategori' => $data , 
        ]);
    }
    public function pengajuan(){
       
        request()->validate(
            [
             'judul' => 'required|string|max:13' , 
             'penulis' => 'required|string|max:13' , 
             'ukuran' => 'required|string|max:13' , 
             'jumlah_halaman' => 'required|string|max:13' , 
             'kategori' => 'required' , 
             'tanggal' => 'required' , 
             'cover' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
             'daftar_isi' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
             'isi_buku' => 'required|max:30000|mimes:pdf,png,jpg,jpeg' , 
             'sinopsis' => 'required' , 
            ]
         );

         $uniqCover = uniqid().'.'.request()->file('cover')->extension();
         request()->file('cover')->storeAs('cover' , $uniqCover , ['disk' => 'public']);
         $uniqDaftar = uniqid().'.'.request()->file('daftar_isi')->extension();
         request()->file('daftar_isi')->storeAs('daftar_isi' , $uniqDaftar , ['disk' => 'public']);
         $uniqIsi = uniqid().'.'.request()->file('isi_buku')->extension();
         request()->file('isi_buku')->storeAs('isi_buku' , $uniqIsi , ['disk' => 'public']);

         $pengajuan = Pengajuan::create([
            'dosen_id' => 1 , 
            'kategori_id' => request()->kategori , 
            'penulis' => request()->penulis,
            'judul_buku' => request()->judul,
            'tanggal' => request()->tanggal,
            'cover' => $uniqCover,
            'daftar_isi' => $uniqDaftar,
            'isi_buku' => $uniqIsi,
            'sinopsis' => request()->sinopsis,
            'ukuran' => request()->ukuran,
            'jumlah_halaman' => request()->jumlah_halaman,
            'views' => 0,
            'status' => 'Belum Terbit',
        ]); 

        if ($pengajuan) {
            return  redirect('/');
        }
    }

    public function terbit($id){
        $update =  Pengajuan::where('id' , $id)->update([
            'status' => 'Terbit' , 
        ]);
    
    
        if ($update) {
            return redirect('/admin/pengajuan')->with('success' , 'Update Berhasil');;
    
        } else {
            dd('gagal');
        }
    }
}
