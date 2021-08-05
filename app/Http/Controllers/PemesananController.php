<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'products' => Product::get()
        ]);
    }
}
