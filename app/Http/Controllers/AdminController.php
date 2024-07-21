<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function logOut(){
        Auth::guard('admin')->logout();
        //$request dan request() itu sama aja 
    request()->session()->invalidate();
 
    request()->session()->regenerateToken();
 
    return redirect('/admin/signIn');
     }
    public function login (Request $req){

        $req->validate([
            'username' => 'required' , 
            'password' => 'required' , 
        ]); 
        if (Auth::guard('admin')->attempt(['username' => $req->username , 'password' => $req->password] , $req->remember)) {
            request()->session()->regenerate();
 
            return redirect()->intended('/admin')->with('success' , 'Selamat Datang Kembali');;
        } else {
            return back()->with('gagal' , 'Login Gagal');
        }

        if (Auth::viaRemember()) {

            request()->session()->regenerate();

            return redirect()->intended('/admin');
        }

        
    }
    public function signIn(){
        return view(
            'admin.auth.login'
        );
    }
    public function katalog(){
        $data = Pengajuan::with(['dosen' , 'kategori'])->SearchPengajuan()->where('status','Terbit')->orderBy('id','DESC')->paginate(50);

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
        $data = Pengajuan::with(['dosen' , 'kategori','comment'])->SearchPengajuan()->paginate(10);
        $kategori = KategoriBerita::all();
        $isPengajuan = 1 ; 
        return view('admin/pages/pengajuan', [
            'data'=> $data,
            'kategori' => $kategori , 
            'isPengajuan' => $isPengajuan,
        ]);
    }
    public function adminBerita(){
        $data = Berita::with(['kategoriBerita'])->SearchBerita()->paginate(10);
        $kategori = KategoriBerita::all();
        $isBerita = true ; 
        return view('admin/pages/berita', [
            'data'=> $data,
            'kategori' => $kategori , 
            'isBerita' => $isBerita,
        ]);
    }
}
