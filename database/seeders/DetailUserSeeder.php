<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          DB::table('detail_users')->insert([
            'user_id' => '4',
            'first_name' => 'admin',
            'last_name' => 'super',
            'alamat' => 'Jl. kenangan setu bekasi',
            'no_telp' => '089765345',
            'jenis_kelamin' => 'Laki-laki',
            'foto_profil' => 'foto.jpg',
            
            
        ]);

        DB::table('detail_users')->insert([
            'user_id' => '5',
            'first_name' => 'catur',
            'last_name' => 'angga',
            'alamat' => 'Jl. kenangan setu bekasi',
            'no_telp' => '089765345',
            'jenis_kelamin' => 'Laki-laki',
            'foto_profil' => 'fotoprofil.jpg',
        ]);
    }
}
