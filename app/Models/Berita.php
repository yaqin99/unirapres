<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function kategoriBerita(){

        return $this->belongsTo(KategoriBerita::class,'kategori_id');
 
     }

     public function scopeSearchBerita($query ){
        if (request('search')) {
            $query->whereHas('kategoriBerita', function ($query) {
                $query->where('nama_kategori','like','%'.request('search').'%');
                // ->orWhere('nik','like','%'.request('search').'%');
            })->orWhere('judul','like','%'.request('search').'%')
            ->orWhere('isi','like','%'.request('search').'%');
                // ->orWhere('nik','like','%'.request('search').'%');
           
      }
      }
}
