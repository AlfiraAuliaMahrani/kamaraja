<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        // Logic to retrieve and display products
        $produks = \App\Models\Produk::all();
        return view('produk.index', compact('produks'));
    }
}
