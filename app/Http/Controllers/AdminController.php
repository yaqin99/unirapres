<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class AdminController extends Controller
{
    public function adminLayout(){
        // $data = Kategori::all();
        return view('admin/dashboard');
    }
    public function adminPengajuan(){
        $data = Pengajuan::with(['dosen' , 'kategori'])->SearchPengajuan()->paginate(10);
        return view('admin/pages/pengajuan', [
            'data'=> $data,
        ]);
    }
    public function adminBerita(){
        $data = Pengajuan::with(['dosen' , 'kategori'])->SearchPengajuan()->paginate(10);
        return view('admin/pages/berita', [
            'data'=> $data,
        ]);
    }
}
