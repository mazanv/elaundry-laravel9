<?php

namespace App\Http\Controllers;

use App\Models\DKurir;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class KurirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kurir = DB::table('d_kurirs')->get();
        //return view('kurir.index', $kurir);
        $kurir = DB::table('d_kurirs')->get();
        return view('kurir.index', [
            'title' => 'Data Kurir',
            'sub_title' => '',
            'kurir' => $kurir
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kurir.create', [
            'title' => 'Tambah Data Kurir',
            'sub_title' => ''
        ]);
        // return view('kelola_data/kurir/tambah_kurir', [
        //     'title' => 'Data Kurir',
        //     'sub_title' => 'Silahkan pilih kategori laundry '
        // ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        // return $request;

        $addkurir = DB::table('d_kurirs')->get();
        $addkurir = new DKurir();
        $addkurir->nama_kurir   = $request->nama_kurir;
        $addkurir->email        = $request->email;
        $addkurir->status       = 'Active';
        $addkurir->alamat       = $request->alamat;
        $addkurir->no_telp      = $request->no_telp;
        $addkurir->password     = Hash::make($request->password);
        $addkurir->save();

        // $addkurir->asJson($addkurir->auth);

        // Session::flash('success', 'Kurir Berhasil Ditambahkan.');
        return redirect('kurir');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kurir = DB::table('d_kurirs')->where('id', $id)->first();
        return view('kurir.edit', [
            'title' => 'Edit Data Kurir',
            'sub_title' => '',
            'id_kurir' => $id,
            'kurir' => $kurir
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DKurir $kurir)
    {
        $this->validate($request, [
            'nama_kurir' => 'required',
            'email' => 'required',
            'status' => 'required',
            'alamat' => 'required',
            'no_telp' => 'required',
        ]);

        $kurir->update([
            'nama_kurir'   => $request->nama_kurir,
            'email'        => $request->email,
            'status'       => $request->status,
            'alamat'       => $request->alamat,
            'no_telp'      => $request->no_telp
        ]);
        return redirect()->route('kurir.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $addkurir = DKurir::find($id);
        $addkurir->delete();
        return redirect('kurir')->route('kurir.index')->with('Sukses', 'Data Kurir berhasil di hapus');
    }
}
