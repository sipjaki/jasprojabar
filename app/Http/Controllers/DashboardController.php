<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //

    public function index()
    {
        //
        return view('frontend.00_halamanutama.index',[
            'title' => 'Tenang, Rekapinaja',
        ]);
    }

public function dashboard()
{
    // Pastikan user sudah login
    $user = auth()->user();

    // Kalau belum login, arahkan ke halaman login
    if (!$user) {
        return redirect()->route('login.index')->withErrors([
            'loginError' => 'Silakan login terlebih dahulu untuk mengakses dashboard.',
        ]);
    }

    // Kalau sudah login, tampilkan view dashboard
    return view('backendrekapin.01_halamanutama', [
        'title' => 'Tenang, Rekapinaja',
        'user' => $user,
    ]);
}
}
