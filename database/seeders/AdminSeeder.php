<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    
    public function run(): void
    {
        DB::table('admins')->insert(
            [
                'name' => "Moh Ainul Yaqin" , 
                'username' => "yaqin" , 
                'password' => bcrypt('yaqin') , 
                'email' => "yaqin@gmail.com" , 
                'alamat' => "yaqin@gmail.com" , 
                'no_hp' => "085232324069" , 
                'isAdmin' => 0 , 
            ]
            );
        DB::table('admins')->insert(
            [
                'name' => "Admin" , 
                'username' => "admin" , 
                'password' => bcrypt('admin') , 
                'email' => "admin@gmail.com" , 
                'alamat' => "admin@gmail.com" , 
                'no_hp' => "085232324069" , 
                'isAdmin' => 0, 
            ]
            );
       
       
    }
}
