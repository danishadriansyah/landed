<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi
    protected $table = 'products'; // Ganti dengan nama tabel yang sesuai

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'name',
        'description',
        'price',
        'stock',
        'image', // Jika ada kolom untuk menyimpan nama gambar
    ];

}
