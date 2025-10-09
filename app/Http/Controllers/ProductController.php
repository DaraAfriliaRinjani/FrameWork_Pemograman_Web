<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($msg)
    {
        if ($msg === 'ganjil') {
            $alertType = 'warning';
            $message = 'Parameter ganjil diterima';
        } elseif ($msg === 'genap') {
            $alertType = 'success';
            $message = 'Parameter genap diterima';
        } else {
            $alertType = 'danger';
            $message = 'Parameter tidak dikenali';
        }

        // kirim data ke view
        return view('product', [
            'msg' => $msg,
            'alertType' => $alertType,
            'message' => $message,
        ]);
    }

    public function create()
    {
        return view('master-data.product-master.create-product');
    }

    public function store(Request $request)
    {
        // validasi
        $validasi_data = $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        // Proses simpan data kedalam database
        Product::create($validasi_data);

        return redirect()->back()->with('success', 'Product created successfully!');
    }

    // Tampilin semua produk ke tabel
    public function showList()
    {
        // Ambil semua data produk dari database
        $products = Product::all();

        // Kirim data ke view
        return view('master-data.product-master.product-list', compact('products'));
    }

    // Tampilin form edit Produk
    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('master-data.product-master.edit-product', compact('product'));
    }

    // Update Produk di Database
    public function update(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required|string|max:255',
            'unit' => 'required|string|max:50',
            'type' => 'required|string|max:50',
            'information' => 'nullable|string',
            'qty' => 'required|integer',
            'producer' => 'required|string|max:255',
        ]);

        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route('products.list')->with('success', 'Produk berhasil diperbarui!');
    }

    // Hapus Produk dari Database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.list')->with('success', 'Produk berhasil dihapus!');
    }
}
