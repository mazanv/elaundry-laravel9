<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DKurir extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_kurir',
        'email',
        'status',
        'alamat',
        'no_telp',
        'password'

    ];
}
