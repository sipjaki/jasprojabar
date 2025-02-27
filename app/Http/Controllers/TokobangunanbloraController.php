<?php

namespace App\Http\Controllers;

use App\Models\kecamatanblora;
use App\Models\tokobangunanblora;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class TokobangunanbloraController extends Controller
{
    //
    public function index()
    {
        $data = kecamatanblora::paginate(20);
        $datasub = tokobangunanblora::paginate(15);
        $user = Auth::user();

        return view('frontend.06_rantaipasok.03_tokobangunanblora.tokobangunanblora', [
            'title' => 'Toko Bangunan Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function bujkkonsultanshow($namalengkap)
    // {
    //     $databujkkonsultan = bujkkonsultan::where('namalengkap', $namalengkap)->first();

    //     if (!$databujkkonsultan) {
    //         // Tangani jika kegiatan tidak ditemukan
    //         return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
    //     }

    //     // Menggunakan paginate() untuk pagination
    //     $subdata = bujkkonsultansub::where('bujkkonsultan_id', $databujkkonsultan->id)->paginate(10);

    //       // Menghitung nomor urut mulai
    //         $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // // Ambil data user saat ini
    // $user = Auth::user();

    // return view('frontend.03_masjaki_jakon.02_bujkkonsultan.bujkkonsultanshow', [
    //     'title' => 'Data Bujk Konsultan',
    //     'data' => $databujkkonsultan,
    //     'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
    //     'user' => $user,
    //     'start' => $start,
    // ]);
    // }

}
