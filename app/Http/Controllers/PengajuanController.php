<?php

namespace App\Http\Controllers;

use App\Events\PusherBroadcast;
use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Models\Pengajuan;
use App\Models\Berita;
use App\Models\Dosen;
use App\Models\Comment;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;



class PengajuanController extends Controller
{

    public function destroy()
    {
        Pengajuan::find(request()->id)->delete();
        return redirect('/admin/pengajuan')->with('success','Berita Berhasil Dihapus');
    }
    

    public function akun($id){
        $data = Dosen::find($id);
        
        // dd($rilis);
        return view('dosen/pages/akun' , [
            'data' => $data , 
            
        ]);
    }
    public function layout(){
        $data = Kategori::all();
        $rilis = Pengajuan::with(['dosen' , 'kategori'])->where('status','Terbit')->paginate(4);
        $rekom = Pengajuan::with(['dosen' , 'kategori'])->where('status','Terbit')->orderBy('views','DESC')->paginate(6);
        $news = Berita::with(('kategoriBerita'))->paginate(4);
        // dd($rilis);
        return view('dosen/welcome' , [
            'kategori' => $data , 
            'rilis'=> $rilis,
            'rekom' => $rekom , 
            'news'=> $news,
        ]);
    }
    public function list(){
        $data = Kategori::all();
        $books = Pengajuan::with(['dosen' , 'kategori','comment'])->SearchPengajuan()->paginate(10);
        return view('dosen/pages/list' , [
            'kategori' => $data ,
            'buku' => $books,
        ]);
    }

    public function editPengajuan($id){
        $data = Pengajuan::find($id);
        $uniqCover = $data->cover; 
        $uniqDaftar = $data->daftar_isi; 
        $uniqIsi = $data->isi_buku; 
        // dd([
        //     request('cover_ubah') , 
        //     request('daftar_isi_ubah'),
        //     request('isi_buku_ubah'),
        // ]);

        if(request('cover_ubah') != null ){
            Storage::disk('public')->delete('cover/'.$data->cover);
            $uniqCover = uniqid().'.'.request()->file('cover_ubah')->extension();
            request()->file('cover_ubah')->storeAs('cover' , $uniqCover , ['disk' => 'public']);
            
        } 
        if(request('daftar_isi_ubah') != null ){
            Storage::disk('public')->delete('daftar_isi/'.$data->daftar_isi);
            $uniqDaftar = uniqid().'.'.request()->file('daftar_isi_ubah')->extension();
            request()->file('daftar_isi_ubah')->storeAs('daftar_isi' , $uniqDaftar , ['disk' => 'public']);
           
        } 
        if(request('isi_buku_ubah') != null ){
            Storage::disk('public')->delete('isi_buku/'.$data->isi_buku);
            $uniqIsi = uniqid().'.'.request()->file('isi_buku_ubah')->extension();
            request()->file('isi_buku_ubah')->storeAs('isi_buku' , $uniqIsi , ['disk' => 'public']);
           
        } 
   
        $pengajuan = Pengajuan::where('id' , $id)->update([
            'penulis' => request('edit_penulis'),
            'judul_buku' => request('edit_judul'),
            'cover' => $uniqCover,
            'daftar_isi' => $uniqDaftar,
            'isi_buku' => $uniqIsi,
            'tanggal' => request('edit_tanggal'),
            'sinopsis' => request('edit_sinopsis'),
            'ukuran' => request('edit_ukuran'),
            'jumlah_halaman' => request('edit_jumlah_halaman'),
        ]); 

                          
        if ($pengajuan) {
            return  redirect('/dosen/listPengajuan');
        }
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
            'dosen_id' => Auth::user()->id , 
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

            $theId = $pengajuan->id;
            $adding =  Comment::create([
                'pengajuan_id' => $theId , 
                'body' => '',
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
