<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        // Contoh login sederhana tanpa database
        if ($request->email === 'a@a' && $request->password === '1234') {
            return redirect()->route('barang');
        } else {
            return back()->with('error', 'Email atau password salah!');
        }
    }

    public function showBarang()
    {
        return view('barang');
    }

    public function showTransaksi()
    {
        return view('transaksi');
    }
}
