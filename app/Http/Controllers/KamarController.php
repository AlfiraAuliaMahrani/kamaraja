<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\kamar; // Assuming the model is named kamar

class KamarController extends Controller
{

       // Menampilkan daftar semua kamar
    public function index()
    {
        $kamars = Kamar::all();
        return view('kamar.index', compact('kamars'));
    }
    public function create()
    {
        return view('kamar.create');        
    }



    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'required|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $gambarPath = $request->file('gambar')->store('kamars', 'public');

        Kamar::create([
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambarPath,
        ]);

        return redirect('/')->with('success', 'Data kamar berhasil disimpan!');
    }
    public function show($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.show', compact('kamar'));
    }
    public function edit($id)
    {
        $kamar = Kamar::findOrFail($id);
        return view('kamar.edit', compact('kamar'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'deskripsi' => 'nullable',
            'gambar' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $kamar = Kamar::findOrFail($id);

        if ($request->hasFile('gambar')) {
            $gambarPath = $request->file('gambar')->store('kamars', 'public');
            $kamar->gambar = $gambarPath;
        }

        $kamar->judul = $request->judul;
        $kamar->deskripsi = $request->deskripsi;
        $kamar->save();

        return redirect('/')->with('success', 'Data kamar berhasil diperbarui!');
    }
    public function destroy($id)
    {
        $kamar = Kamar::findOrFail($id);
        $kamar->delete();
        return redirect('/')->with('success', 'Data kamar berhasil dihapus!');
    }
}
