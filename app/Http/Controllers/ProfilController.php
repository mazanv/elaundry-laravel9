<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use Auth;
use Session;
use App\Models\User;

class ProfilController extends Controller
{

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('admin/profil', [
            'title' => 'Profil',
            'sub_title' => 'Halo!'
        ]);
    }

    public function adminProfil($id)
    {
        $user = User::find($id);
        return view('admin.profil', compact('users'));
    }

    // Profile admin save
    // public function editAdminProfil($id)
    // {
    //     $user = User::find($id);
    //     return view('admin')
    // }
    public function adminProfilSave(Request $request, $id)
    {
        $foto = $request->file('foto');
        if ($foto) {
            $nama_foto = time() . "_" . $foto->getClientOriginalName();
            // isi dengan nama folder tempat kemana file diupload
            $tujuan_upload = 'public/images/foto_profile';
            $foto->storeAs($tujuan_upload, $nama_foto);
        }

        if ($request->password) {
            $password = Hash::make($request->password);
        }
        $profile = Profil::findOrFail($id);
        $profile->name            = $request->name;
        $profile->email           = $request->email;
        $profile->alamat          = $request->alamat;
        $profile->nama_cabang     = $request->nama_cabang;
        $profile->alamat_cabang   = $request->alamat_cabang;
        $profile->foto            = $nama_foto ?? Auth::user()->foto;
        $profile->password        = $password ?? Auth::user()->password;
        $profile->save();

        Session::flash('success', 'Data profile berhasil diupdate !');
        return back();
    }
}
