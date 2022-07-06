<?php

namespace App\Http\Controllers;

use App\Models\DProduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = DB::table('d_produks')->get();
        return view('kelola_data/produk/dproduk', [
            'title' => 'Data Produk',
            'sub_title' => 'Produk - Produk yang tersedia',
            'produk' => $produk
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelola_data/produk/tambah_produk', [
            'title' => 'Tambah Data Produk',
            'sub_title' => ''
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function show(DProduk $dProduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(DProduk $dProduk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DProduk $dProduk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(DProduk $dProduk)
    {
        //
    }
}
