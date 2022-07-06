<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProductController extends Controller
{
    public function __invoke(Request $request)
    {
        return view('user.products.layouts');
    }
}
