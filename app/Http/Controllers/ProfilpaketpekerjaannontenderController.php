<?php

namespace App\Http\Controllers;


use App\Models\profilpaketpekerjaannontender;
use App\Models\prosespaketnontender;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfilpaketpekerjaannontenderController extends Controller
{
    //

    public function paketpekerjaannontender()
    {
        $user = Auth::user();
        $data = profilpaketpekerjaannontender::paginate(15);
        $datasub = prosespaketnontender::paginate(15);


        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.02_paketpekerjaannontender', [
            'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function paketpekerjaannontendershow($namapekerjaan)
    {
        $datapaketpekerjaannontender = profilpaketpekerjaannontender::where('namapekerjaan', $namapekerjaan)->first();
        $datasub = prosespaketnontender::all();

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
        'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
        'data' => $datapaketpekerjaannontender,
        'user' => $user,
        'datasub' => $datasub,


    ]);
    }


}
