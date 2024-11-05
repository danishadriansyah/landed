<?php

namespace App\Http\Controllers;

use App\Models\Product; // Pastikan kamu sudah membuat model Product
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan daftar produk
    public function index()
    {
        $products = Product::all(); // Mengambil semua data produk
        return view('products.index', compact('products')); // Mengirimkan data ke view
    }

    // Menampilkan form untuk membuat produk baru
    public function create()
    {
        return view('products.create'); // Menampilkan view untuk menambah produk
    }

    // Menyimpan produk baru ke database
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        Product::create($request->all()); // Menyimpan data produk ke database
        return redirect()->route('products.index')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Menampilkan form untuk mengedit produk
    public function edit($id)
    {
        $product = Product::findOrFail($id); // Mengambil data produk berdasarkan ID
        return view('products.edit', compact('product')); // Mengirimkan data ke view
    }

    // Memperbarui data produk di database
    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        // Validasi form
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        // Update data di database
        $product->update($validatedData);

        // Redirect dengan flash message
        return redirect()->route('products.index')->with('success', 'Produk berhasil diperbarui.');
    }

    // Menghapus produk dari database
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')->with('success', 'Produk berhasil dihapus.');
    }
}
