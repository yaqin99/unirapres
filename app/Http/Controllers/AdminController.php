<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Berita;
use App\Models\KategoriBerita;

class AdminController extends Controller
{
    public function katalog(){
        $data = Pengajuan::with(['dosen' , 'kategori'])->SearchPengajuan()->orderBy('id','DESC')->paginate(50);

        return view('/dosen/pages/katalog', [
            'data' => $data , 

        ]);
    }
    public function editNews($id){
        $kategori = KategoriBerita::all();
        $data = Berita::find($id);

        return view('admin/pages/editNews', [
            'kategori' => $kategori , 
            'data' => $data , 

        ]);
    }
    public function adminLayout(){
        $kategori = KategoriBerita::all();
        return view('admin/dashboard', [
            'kategori' => $kategori 

        ]);
    }
    public function adminPengajuan(){
        $data = Pengajuan::with(['dosen' , 'kategori'])->SearchPengajuan()->paginate(10);
        $kategori = KategoriBerita::all();

        return view('admin/pages/pengajuan', [
            'data'=> $data,
            'kategori' => $kategori , 

        ]);
    }
    public function adminBerita(){
        $data = Berita::with(['kategoriBerita'])->SearchBerita()->paginate(10);
        $kategori = KategoriBerita::all();
        return view('admin/pages/berita', [
            'data'=> $data,
            'kategori' => $kategori , 
        ]);
    }
}
