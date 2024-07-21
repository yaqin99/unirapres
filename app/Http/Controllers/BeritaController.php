<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\KategoriBerita;
use Illuminate\Support\Facades\Storage;

class BeritaController extends Controller
{

    public function news($id){
        $data = Berita::with('kategoriBerita')->where('id',$id)->first();
        $recent = Berita::with('kategoriBerita')->orderBy('id','DESC')->paginate(5);
        $foot = Berita::with('kategoriBerita')->orderBy('id','DESC')->paginate(3);
        $kategori = KategoriBerita::all();
        return view(
            'news.news', [
                'data' => $data , 
                'kategori' => $kategori,
                'recent' => $recent,
                'foot' => $foot,
            ]
        );
    }

    public function destroy()
    {
        Berita::find(request()->id)->delete();
        return redirect('/admin/berita')->with('success','Berita Berhasil Dihapus');
    }

    public function addNews(){
        
       $validatedData =  request()->validate([
            'kategori' => 'required|string' , 
            'judul_berita' => 'required|string' , 
            'gambar' => 'required|max:30000|mimes:jpeg,jpg,png' , 
            'deskripsi_gambar' => 'required|string' , 
            'isi_berita' => 'required',
            'author' => 'required',
            'tanggal' => 'required',
        ]);

        

        $encriptedName = uniqid().'.'.request()->file('gambar')->extension();
        request()->file('gambar')->storeAs('gambar_berita',$encriptedName,['disk' => 'public']);

        $addNews = Berita::create([
            'kategori_id' => request('kategori'), 
            'judul' => request('judul_berita'), 
            'gambar' => $encriptedName, 
            'deskripsi_gambar' => request('deskripsi_gambar'), 
            'isi' => request('isi_berita'), 
            'pengirim' => request('author'),
            'tanggal' => request('tanggal'), 
        ]);

        if ($addNews) {
            return  redirect('/admin/berita');
        }
        
    }

    public function editNews ($id){
        
        $data = Berita::find($id);
        $ready = [] ;
        
        // $validatedData =  request()->validate([
        //     'kategori' => 'string' , 
        //     'judul_berita' => 'string' , 
        //     'gambar' => 'max:30000|mimes:jpeg,jpg,png' , 
        //     'deskripsi_gambar' => 'required|string' , 
        //     'isi_berita' => 'string',
        //     'author' => 'string',
        //     'tanggal' => 'string',
        // ]);
 
        if(request('gambar') === null){
            $ready = [
                 'kategori_id' => request('kategori'), 
                 'judul' => request('judul_berita'), 
                 'gambar' => $data->gambar,
                 'deskripsi_gambar' => request('deskripsi_gambar'), 
                 'isi' => request('isi_berita'), 
                 'pengirim' => request('author'),
                 'tanggal' => request('tanggal'), 
             ];

             $update = Berita::where('id' , $id)->update($ready);

             if ($update) {
                return redirect('/admin/berita')->with('success' , 'Update Berhasil');;
        
            } else {
                dd('gagal');
            }

         } else {
            Storage::disk('public')->delete('gambar_berita/'.$data->gambar);
            $encriptedName = uniqid().'.'.request()->file('gambar')->extension();
            request()->file('gambar')->storeAs('gambar_berita',$encriptedName,['disk' => 'public']);

            $ready = [
                'kategori_id' => request('kategori'), 
                'judul' => request('judul_berita'), 
                'gambar' => $encriptedName,
                'deskripsi_gambar' => request('deskripsi_gambar'), 
                'isi' => request('isi_berita'), 
                'pengirim' => request('author'),
                'tanggal' => request('tanggal'), 
            ];
           $update = Berita::where('id' , $id)->update($ready);

           if ($update) {
            return redirect('/admin/berita')->with('success' , 'Update Berhasil');;
    
        } else {
            dd('gagal');
        }
         }
           
        

        
       }
}
