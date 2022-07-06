<?php

namespace App\Http\Controllers;

use App\Models\NewProfil;
use Illuminate\Http\Request;

class NewProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/profil', [
            // 'newprofils' => NewProfil::where('user_id', auth()->user()->id)->get()
            // 'newprofils' => NewProfil::where('user_id', auth()->user()->id)->get(),
            'title' => 'My Profil',
            'sub_title' => 'Halo!'
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
     * @param  \App\Models\NewProfil  $newProfil
     * @return \Illuminate\Http\Response
     */
    public function show(NewProfil $newProfil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NewProfil  $newProfil
     * @return \Illuminate\Http\Response
     */
    public function edit(NewProfil $newProfil)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NewProfil  $newProfil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NewProfil $newProfil)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NewProfil  $newProfil
     * @return \Illuminate\Http\Response
     */
    public function destroy(NewProfil $newProfil)
    {
        //
    }
}
