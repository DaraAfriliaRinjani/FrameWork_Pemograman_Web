<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($angka)
    {
        // Tambah angka berapapun (contoh: +10)
        $hasil = $angka + 10;

        // Kirim ke view
        return view('product', compact('hasil'));
    }
    
}
