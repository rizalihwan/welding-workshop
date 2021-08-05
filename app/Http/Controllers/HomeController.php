<?php

namespace App\Http\Controllers;

use App\User;

class HomeController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function daftar_view()
    {
        return view('pembeli.pendaftaran');
    }

    public function daftar()
    {
        $this->validate(request(), [
            'name' => ['required', 'string', 'max:255'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required']
        ]);
        $attr = request()->all();
        $attr['password'] = bcrypt(request('password'));
        User::create($attr);
        return redirect()->route('login')->with('success', 'Successful Registration! silahkan untuk Login');
    }
}
