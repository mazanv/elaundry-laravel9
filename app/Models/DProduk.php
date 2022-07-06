<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DProduk extends Model
{
    use HasFactory;
    use HasFactory;
    protected $fillable = [
        'nama_produk', 'tentang_produk', 'harga_produk'

    ];
}
