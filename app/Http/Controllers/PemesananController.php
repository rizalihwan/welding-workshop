<?php

namespace App\Http\Controllers;

use App\Modeling;
use App\Order;
use App\Product;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index()
    {
        if(Auth::check())
        {
            $orders = Order::where('user_id', auth()->user()->id)->get();
        } else {
            $orders = NULL;
        }
        return view('welcome', [
            'products' => Product::get(),
            'orders' => $orders
        ]);
    }

    public function pesan(Product $product)
    {
        return view('pembeli.pesan', compact('product'));
    }

    public function order(Modeling $modeling)
    {
        return view('pembeli.order', compact('modeling'));
    }

    public function buy()
    {
        $attr = $this->validate(request(), [
            'modeling_id' => 'required',
            'full_name' => 'required',
            'address' => 'required',
            'city' => 'required',
            'district' => 'required',
            'province' => 'required',
            'postal_code' => 'required',
            'phone' => 'required'
        ]);
        auth()->user()->orders()->create($attr);
        return back()->with('success', '(Pesanan berhasil Di Buat) Dalam 1x24 jam Customer Service akan segera mengkonsultasikan pesanan dan dilanjutkan survey!');
    }
}
