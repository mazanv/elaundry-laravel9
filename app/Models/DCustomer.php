<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DCustomer extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama', 'email', 'no_telp', 'status', 'alamat', 'created_at'
    ];
}
