<?php

namespace App\Http\Controllers;


use App\Models\profilpaketkonsultasi;
use App\Models\prosespaketkonsultasi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfilpaketkonsultasiController extends Controller
{
    //
    public function paketkonsultasi()
    {
        $user = Auth::user();
        $data = profilpaketkonsultasi::paginate(15);

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.03_paketkonsultasitender', [
            'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function paketkonsultasishow($jenispekerjaan)
    {
        $datapaketkonsultasi = profilpaketkonsultasi::where('jenispekerjaan', $jenispekerjaan)->first();

        $subdata = prosespaketkonsultasi::all();
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

    return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.03_paketkonsultasitendershow', [
        'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
        'data' => $datapaketkonsultasi,
        'subdata' => $subdata,
        'user' => $user,

    ]);
    }


}

