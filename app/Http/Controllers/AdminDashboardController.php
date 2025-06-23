<?php

namespace App\Http\Controllers;

use App\Models\agendastatus;
use App\Models\asosiasipengusaha;
use App\Models\bantuanhibahbg;
use App\Models\bantuanteknis;
use App\Models\uijk;
use App\Models\undangundang;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    //
 public function index()
{
    $user = Auth::user();
    $dataChart = []; // Misalnya kamu punya data grafik, bisa diisi nanti

    // Ambil semua data statistik seperti di bestatistikhibah()
    $data = bantuanhibahbg::paginate(15);

    $jumlahPerInstansi = bantuanhibahbg::select('instansi')
        ->selectRaw('COUNT(*) as total')
        ->groupBy('instansi')
        ->get();

    $datajumlahbantuanhibah = bantuanhibahbg::count();
    $datajumlahbantuanhibah_dikembalikan = bantuanhibahbg::where('verifikasi1', 'belum')->count();
    $datajumlahdok_lapangan = bantuanhibahbg::where('verifikasi2', 'sudah')->count();
    $datajumlahsk_terbit = bantuanhibahbg::where('verifikasi3', 'sudah')->count();
    $datajumlahsk_selesai = bantuanhibahbg::where('verifikasi4', 'sudah')->count();
    $datajumlahbantuanhibahdinas = bantuanhibahbg::where('instansi')->count();

    return view('backend.00_administrator.01_halamanutama.dashboard', [
        'title' => 'Dashboard BKD Provinsi Jawa Barat',
        'user' => $user,
        'dataChart' => $dataChart,

        // Data statistik tambahan
        'data' => $data,
        'datajumlahbantuanhibah' => $datajumlahbantuanhibah,
        'datajumlahbantuanhibah_dikembalikan' => $datajumlahbantuanhibah_dikembalikan,
        'datajumlahdok_lapangan' => $datajumlahdok_lapangan,
        'datajumlahsk_terbit' => $datajumlahsk_terbit,
        'datajumlahsk_selesai' => $datajumlahsk_selesai,
        'datajumlahbantuanhibahdinas' => $datajumlahbantuanhibahdinas,
        'jumlahPerInstansi' => $jumlahPerInstansi,
    ]);
}


public function dashboarddinas()
{
    $user = Auth::user();

    $jumlahdata = [];

    for ($i = 1; $i <= 8; $i++) {
        $jumlahdata['jumlahdata' . $i] = bantuanteknis::whereHas('dinas.statusadmin', function ($query) {
            $query->where('id', 6);
        })->whereHas('jenispengajuanbantek', function ($query) use ($i) {
            $query->where('id', $i);
        })->whereHas('dinas', function ($query) use ($user) {
            $query->where('id', $user->id); // langsung cek pemohon.id user login
        })->count();
    }

    return view('backend.00_administrator.01_halamanutama.dashboarddinas', array_merge([
        'title' => 'Admin Dashboard ABG Blora Bangunan Gedung',
        'user' => $user,
    ], $jumlahdata));
}


}
