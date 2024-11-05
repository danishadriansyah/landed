<?php
// CategoryController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = [
            ['name' => 'Audio', 'image' => 'gambar/audio.png'],
            ['name' => 'Buku', 'image' => 'gambar/buku (2).png'],
            ['name' => 'Dapur', 'image' => 'gambar/dapur.png'],
            ['name' => 'Fashion', 'image' => 'gambar/fashion.png'],
            ['name' => 'Elektronik', 'image' => 'gambar/elektronik.png'],
            ['name' => 'Kesehatan', 'image' => 'gambar/kesehatan.png'],
        ];

        return view('category', compact('categories'));
    }
}