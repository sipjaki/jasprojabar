<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    //
    public function index()
    {

        $user = Auth::user();

        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('backend.00_administrator.01_halamanutama.dashboard', [
            'title' => 'Dashboard Mas Jaki DPUPR Blora',
            'user' => $user,
            // 'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
            // 'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
            // 'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view
        ]);
    }

}
