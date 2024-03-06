<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


        public function dosen(){

        return $this->belongsTo(Dosen::class);
        }

        public function kategori(){

            return $this->belongsTo(Kategori::class);
     
         }
         public function scopeSearchPengajuan($query ){
            if (request('search')) {
                $query->whereHas('kategori', function ($query) {
                    $query->where('nama_kategori','like','%'.request('search').'%');
                    // ->orWhere('nik','like','%'.request('search').'%');
                })->orWhereHas('dosen', function ($query) {
                    $query->where('name','like','%'.request('search').'%');
                    // ->orWhere('nik','like','%'.request('search').'%');
                });
          }
          }

}
