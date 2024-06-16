<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function layout(){
        $data = Kategori::all();
        $rilis = Pengajuan::with(['dosen' , 'kategori'])->where('status','Terbit')->paginate(4);
        // dd($rilis);
        return view('dosen/welcome' , [
            'kategori' => $data , 
            'rilis'=> $rilis,
        ]);
    }
    public function list(){
        $data = Kategori::all();
        $books = Pengajuan::with(['dosen' , 'kategori'])->SearchPengajuan()->paginate(10);
        return view('dosen/pages/list' , [
            'kategori' => $data ,
            'buku' => $books,
        ]);
    }
    public function pengajuan(){
        request()->validate(
            [
             'judul' => 'required|string' , 
             'penulis' => 'required|string' , 
             'ukuran' => 'required|string' , 
             'jumlah_halaman' => 'required|string' , 
             'kategori' => 'required' , 
             'tanggal' => 'required' , 
             'cover' => 'required|max:30000|mimes:jpeg,jpg,png' , 
             'daftar_isi' => 'required|max:30000|mimes:pdf' , 
             'isi_buku' => 'required|max:30000|mimes:pdf' , 
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
            return  redirect('/dosen/listPengajuan');
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
