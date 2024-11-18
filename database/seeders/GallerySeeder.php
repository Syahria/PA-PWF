<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Gallery;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Gallery::create([
            'title' => $request->title,
            'description' => $request->description,
            'image_path' => $imagePath, // Path gambar
        ]);
        
        // Tambahkan data lainnya sesuai kebutuhan
    }
}
