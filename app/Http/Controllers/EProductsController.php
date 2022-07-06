<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EProductsController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('elaundry/products', [
            'title' => 'Our Products',
            'sub_title' => 'Produk apa yang kamu cari?, '
        ]);
    }
}
