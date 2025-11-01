<?php

namespace App\Http\Controllers;

use App\Models\jenistransaksi;
use App\Models\subtransaksi;
use Illuminate\Http\Request;

class SubtransaksiController extends Controller
{
    public function tambahtransaksi()
{
    // Cek apakah user sudah login
    $user = auth()->user();
    if (!$user) {
        return redirect()->route('login.index')->withErrors([
            'loginError' => 'Silakan login terlebih dahulu.',
        ]);
    }

    // Ambil semua jenis transaksi
    $jenistransaksi = jenistransaksi::all();

    $akunpengguna_id = $user->id;

    // Ambil transaksi terakhir untuk akun ini berdasarkan transaksi_id
    $lastTransaksi = subtransaksi::where('akunpengguna_id', $akunpengguna_id)
        ->orderBy('transaksi_id', 'desc')
        ->first();

    // Tentukan transaksi_id berikutnya
    $nextTransaksiId = $lastTransaksi ? $lastTransaksi->transaksi_id + 1 : 1;

    // Kirim data ke view
    return view('backendrekapin.03_tambahtransaksi', [
        'title' => 'Tambah Transaksi',
        'akunpengguna_id' => $akunpengguna_id,
        'subtransaksi_id' => $nextTransaksiId,
        'jenistransaksi' => $jenistransaksi,
    ]);
}



}
