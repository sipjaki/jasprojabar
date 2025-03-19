<?php

namespace App\Http\Controllers;

use App\Models\pagevisit;
use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    //
    public function index()
    {

        $user = Auth::user();

        $visitCount = pagevisit::sum('visit_count'); // Total kunjungan
        $conversionRate = 12; // Angka contoh, sesuaikan dengan logika Anda
        $salesRate = 0.8; // Angka contoh, sesuaikan dengan logika Anda
        $registrationRate = -1; // Angka contoh, sesuaikan dengan logika

        // return view('backend.00_adminmasjaki.01_fiturterpisah.01_dashboard', [
        return view('backend.00_administrator.01_halamanutama.dashboard', [
            'title' => 'Dashboard Mas Jaki DPUPR Blora',
            'user' => $user,
            'visitCount' => $visitCount,
            'conversionRate' => $conversionRate,
            'salesRate' => $salesRate,
            'registrationRate' => $registrationRate,
            // 'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
            // 'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
            // 'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view
        ]);
    }



}
