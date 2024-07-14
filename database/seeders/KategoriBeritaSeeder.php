<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriBeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kategori_beritas')->insert(
            [
                'nama_kategori' => "PMB" , 
            ]
            );
        DB::table('kategori_beritas')->insert(
            [
                'nama_kategori' => "PKKMB" , 
            ]
            );
        DB::table('kategori_beritas')->insert(
            [
                'nama_kategori' => "Event Musik" , 
            ]
            );
        DB::table('kategori_beritas')->insert(
            [
                'nama_kategori' => "BEM Kampus" , 
            ]
            );
    }
}
