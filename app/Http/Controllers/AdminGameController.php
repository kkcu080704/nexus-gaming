<?php

namespace App\Http\Controllers;

use App\Models\GamePost;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class AdminGameController extends Controller
{
    // 1. Tampilkan Form Tambah
    public function create()
    {
        return view('admin.game.create');
    }

    // 2. Simpan Data Baru
    public function store(Request $request)
    {
        $data = $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required',
            'platform' => 'required',
            'rating' => 'required|integer|min:1|max:10', // Validasi 1-10
            'gambar' => 'required|url', // Menggunakan Link URL
            'analisis_singkat' => 'required|max:255',
            'konten' => 'required',
        ]);

        $data['slug'] = Str::slug($request->judul);
        
        GamePost::create($data);

        return redirect()->route('dashboard')->with('success', 'Game Review Created Successfully!');
    }

    // 3. Tampilkan Form Edit
    public function edit(GamePost $post)
    {
        return view('admin.game.edit', compact('post'));
    }

    // 4. Update Data Lama
    public function update(Request $request, GamePost $post)
    {
        $data = $request->validate([
            'judul' => 'required|max:255',
            'genre' => 'required',
            'platform' => 'required',
            'rating' => 'required|integer|min:1|max:10',
            'gambar' => 'required|url',
            'analisis_singkat' => 'required|max:255',
            'konten' => 'required',
        ]);

        $data['slug'] = Str::slug($request->judul);

        $post->update($data);

        return redirect()->route('dashboard')->with('success', 'Game Data Updated!');
    }

    // 5. Hapus Data
    public function destroy(GamePost $post)
    {
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Game Review Terminated.');
    }
}