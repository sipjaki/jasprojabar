<?php

namespace App\Http\Controllers;

use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class ProfilpaketpekerjaanbloraController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.index', [
            'title' => 'Profil Paket Pekerjaan Konstruksi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function datapaketpekerjaanblora()
    {
        $data = bujkkontraktor::paginate(15);
        $datasub = bujkkontraktorsub::paginate(20);
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
            'title' => 'BUJK Kontraktor',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function datapaketpekerjaanblorashow($namalengkap)
    {
        $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();

        if (!$databujkkontraktor) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(10);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktorshow', [
        'title' => 'Data Bujk Kontraktor',
        'data' => $databujkkontraktor,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }


}
