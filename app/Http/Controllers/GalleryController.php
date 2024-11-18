<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::all();
        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Dapatkan file
            $image = $request->file('image');
            
            // Generate nama unik untuk file
            $fileName = time() . '_' . $image->getClientOriginalName();
            
            // Simpan file ke storage/app/public/images
            $imagePath = $image->storeAs('images', $fileName, 'public');

            // Buat record di database
            Gallery::create([
                'title' => $request->title,
                'description' => $request->description,
                'image_path' => $imagePath
            ]);

            return redirect()->route('gallery.index')
                ->with('success', 'Galeri berhasil ditambahkan!');
        }

        return back()->with('error', 'Gagal mengupload gambar!');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);
        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        $gallery = Gallery::findOrFail($id);

        // Update data dasar
        $gallery->title = $request->title;
        $gallery->description = $request->description;

        // Jika ada file gambar baru
        if ($request->hasFile('image')) {
            // Hapus file lama jika ada
            if ($gallery->image_path && Storage::disk('public')->exists($gallery->image_path)) {
                Storage::disk('public')->delete($gallery->image_path);
            }

            // Upload file baru
            $image = $request->file('image');
            $fileName = time() . '_' . $image->getClientOriginalName();
            $imagePath = $image->storeAs('images', $fileName, 'public');
            
            // Update path gambar
            $gallery->image_path = $imagePath;
        }

        $gallery->save();

        return redirect()->route('gallery.index')
            ->with('success', 'Galeri berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);
        
        // Hapus file gambar dari storage
        if ($gallery->image_path && Storage::disk('public')->exists($gallery->image_path)) {
            Storage::disk('public')->delete($gallery->image_path);
        }

        $gallery->delete();

        return redirect()->route('gallery.index')
            ->with('success', 'Galeri berhasil dihapus!');
    }
}