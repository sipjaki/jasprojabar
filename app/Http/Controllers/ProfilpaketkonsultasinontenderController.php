<?php

namespace App\Http\Controllers;


use App\Models\profilpaketkonsultasi;
use App\Models\profilpaketkonsultasinontender;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfilpaketkonsultasinontenderController extends Controller
{
    //
    public function paketkonsultasinontender()
    {
        $user = Auth::user();
        $data = profilpaketkonsultasinontender::paginate(15);

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.04_paketkonsultasinontender', [
            'title' => 'Profil Paket Konsultasi Non Tender',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function paketkonsultasinontendershow($jenispekerjaan)
    {
        $data = profilpaketkonsultasinontender::where('jenispekerjaan', $jenispekerjaan)->first();

        // if (!$databujkkontraktor) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(10);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.04_paketkonsultasinontendershow', [
        'title' => 'View Data Paket Konsultasi Tender',
        'data' => $data,

    ]);
    }


}
