<?php

namespace App\Http\Controllers;

use App\Models\DTransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaksi = DB::table('d_transaksis')->get();

        return view('kelola_data/transaksi/dtransaksi', [
            'title' => 'Data Transaksi',
            'sub_title' => '',
            'transaksi' => $transaksi
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  \App\Models\DTransaksi  $dTransaksi
     * @return \Illuminate\Http\Response
     */
    public function show(DTransaksi $dTransaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DTransaksi  $dTransaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(DTransaksi $dTransaksi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DTransaksi  $dTransaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DTransaksi $dTransaksi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DTransaksi  $dTransaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DTransaksi $dTransaksi)
    {
        //
    }
}
