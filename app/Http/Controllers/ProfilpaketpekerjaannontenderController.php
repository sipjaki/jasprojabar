<?php

namespace App\Http\Controllers;


use App\Models\profilpaketpekerjaannontender;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfilpaketpekerjaannontenderController extends Controller
{
    //

    public function paketpekerjaannontender()
    {
        $user = Auth::user();
        $data = profilpaketpekerjaannontender::paginate(15);

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.02_paketpekerjaannontender', [
            'title' => 'Profil Paket Pekerjaan Non Tender',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function paketpekerjaannontendershow($jenispekerjaan)
    {
        $data = profilpaketpekerjaannontender::where('jenispekerjaan', $jenispekerjaan)->first();

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

    return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.02_paketpekerjaannontendershow', [
        'title' => 'View Data Paket Pekerjaan Non Tender',
        'data' => $data,

    ]);
    }


}
