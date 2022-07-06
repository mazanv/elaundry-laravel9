<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ELaundryController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        return view('elaundry/e_laundry', [
            'title' => 'E-Laundry',
            'sub_title' => 'Silahkan pilih kategori laundry '
        ]);
    }
}
