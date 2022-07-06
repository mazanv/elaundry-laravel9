<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DOutlet extends Model
{

    use HasFactory;

    protected $fillable = [
        'nama_outlet',
        'alamat_outlet',
        'no_telp',
        'email',
        'kategori',
        'tentang_outlet',
        // 'image',
        'password'
    ];

    public function semua()
    {
    }
}
