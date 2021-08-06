<?php

namespace App\Http\Controllers;

use App\Order;
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

    public function user()
    {
        return view('admin.datauser', [
            'users' => User::where('role', 'pembeli')->paginate(5)
        ]);
    }

    public function pembelian()
    {
        return view('admin.pembelian', [
            'orders' => Order::paginate(5)
        ]);
    }

    public function user_destroy(User $user)
    {
        $user->delete();
        return back()->with('success', 'User di hapus!');
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
