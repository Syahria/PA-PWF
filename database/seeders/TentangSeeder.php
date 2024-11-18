<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TentangSeeder extends Seeder
{
    public function run()
    {
        DB::table('tentangs')->insert([
            'deskripsi' => 'Deskripsi tentang wisata budaya Desa Pampang',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

