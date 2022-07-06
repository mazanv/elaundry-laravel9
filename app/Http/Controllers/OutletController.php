<?php

namespace App\Http\Controllers;

use App\Models\DOutlet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class OutletController extends Controller
{

    public function index()
    {
        $outlet = DB::table('d_outlets')->get();
        return view('outlet.index', [
            'title' => 'Data Outlet',
            'sub_title' => 'Silahkan pilih kategori laundry ',
            'outlet' => $outlet
        ]);
    }
    public function create()
    {
        return view('outlet.create', [
            'title' => 'Data Outlet',
            'sub_title' => 'Silahkan pilih kategori laundry '
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
        $addoutlet = DB::table('d_outlets')->get();
        $addoutlet = new DOutlet();
        $addoutlet->nama_outlet          = $request->nama_outlet;
        $addoutlet->alamat_outlet        = $request->alamat_outlet;
        $addoutlet->no_telp              = $request->no_telp;
        $addoutlet->email                = $request->email;
        $addoutlet->kategori             = $request->kategori;
        $addoutlet->tentang_outlet       = $request->tentang_outlet;
        $addoutlet->password             = Hash::make($request->password);
        $addoutlet->save();

        return redirect('outlet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function show(DOutlet $dOutlet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function edit(DOutlet $dOutlet)
    {
        $dOutlet = DB::table('d_outlets')->get();
        return view('outlet.edit', [
            'title' => '',
            'sub_title' => '',
            'outlet' => $dOutlet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DOutlet $dOutlet)
    {
        $dOutlet = DB::table('d_outlets')->get();
        $dOutlet = new DOutlet();
        $dOutlet->nama_outlet          = $request->nama_outlet;
        $dOutlet->alamat_outlet        = $request->alamat_outlet;
        $dOutlet->no_telp              = $request->no_telp;
        $dOutlet->email                = $request->email;
        $dOutlet->kategori             = $request->kategori;
        $dOutlet->tentang_outlet       = $request->tentang_outlet;
        $dOutlet->password             = Hash::make($request->password);
        $dOutlet->save();

        return redirect('outlet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DProduk  $dProduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(DOutlet $dOutlet)
    {
        //
    }
}
