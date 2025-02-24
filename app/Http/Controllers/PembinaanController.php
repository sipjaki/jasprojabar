<?php

namespace App\Http\Controllers;


use App\Models\pembinaan;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class PembinaanController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        $data = pembinaan::paginate(15);

        return view('frontend.04_pembinaan.01_agendapembinaan.index', [
            'title' => 'Agenda Pembinaan',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function paketkonsultasishow($jenispekerjaan)
    // {
    //     $data = pembinaan::where('jenispekerjaan', $jenispekerjaan)->first();

        // if (!$databujkkontraktor) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(10);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    // $user = Auth::user();

    // return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.03_paketkonsultasitendershow', [
    //     'title' => 'View Agenda Pembinaan',
    //     'data' => $data,

    // ]);
    // }


}

