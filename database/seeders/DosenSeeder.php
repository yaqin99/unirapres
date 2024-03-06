<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('dosens')->insert(
            [
                'name' => "Fahrosi Angger Kelana" , 
                'username' => "rosi" , 
                'password' => bcrypt('rosi') , 
                'email' => "rosi@gmail.com" , 
                'alamat' => "rosi@gmail.com" , 
                'no_hp' => "085232324697" , 
                'isDosen' => 0 , 
            ]
            );
    }
}
