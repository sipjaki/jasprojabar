<?php

namespace App\Http\Controllers;

use App\Models\subtransaksi;
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

    // Cegah error jika belum login
    if (!$user) {
        return redirect()->route('login.index')->withErrors([
            'loginError' => 'Silakan login terlebih dahulu untuk mengakses dashboard.',
        ]);
    }

    // Ambil ID akun pengguna yang sedang login
    $akunpengguna_id = $user->id;

    // Ambil semua subtransaksi milik akun ini, dengan pagination 10 data per halaman
    $subtransaksi = subtransaksi::where('akunpengguna_id', $akunpengguna_id)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    // Tampilkan view dashboard
    return view('backendrekapin.02_dashboard', [
        'title' => 'Halaman Transaksi',
        'user' => $user,
        'data' => $subtransaksi,
    ]);
}

public function transaksi()
{
    // Pastikan user sudah login
    $user = auth()->user();

    // Cegah error jika belum login
    if (!$user) {
        return redirect()->route('login.index')->withErrors([
            'loginError' => 'Silakan login terlebih dahulu untuk mengakses dashboard.',
        ]);
    }

    // Ambil ID akun pengguna yang sedang login
    $akunpengguna_id = $user->id;

    // Ambil semua subtransaksi milik akun ini, dengan pagination 10 data per halaman
    $subtransaksi = subtransaksi::where('akunpengguna_id', $akunpengguna_id)
        ->orderBy('created_at', 'desc')
        ->paginate(10);

    // Tampilkan view dashboard
    return view('backendrekapin.01_halamantransaksi', [
        'title' => 'Tenang, Rekapinaja',
        'user' => $user,
        'data' => $subtransaksi,
    ]);
}

}
