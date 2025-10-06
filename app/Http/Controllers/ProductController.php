<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($angka)
    {
        // Tambah angka dengan angka lain (bebas, misalnya +10)
        $hasil = $angka + 10;

        // Kirim hasil ke view resources/views/product.blade.php
        return view('product', compact('hasil'));
    }
}
