<?php

namespace App\Http\Controllers;

use App\Models\profilpaketpekerjaanblora;
use App\Models\prosespaket;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class ProfilpaketpekerjaanbloraController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.index', [
            'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function paketpekerjaantender()
    {
        $user = Auth::user();
        $data = profilpaketpekerjaanblora::paginate(15);
        $datasub = prosespaket::all();

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.01_paketpekerjaantender', [
            'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function datapaketpekerjaanblorashow($jenispekerjaan)
    {
        // Pastikan model dan nama tabel sudah benar
        $datapaketpekerjaan = profilpaketpekerjaanblora::where('jenispekerjaan', $jenispekerjaan)->first();

        if (!$datapaketpekerjaan) {
            // Jika data tidak ditemukan, arahkan kembali dengan pesan error
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = prosespaket::where('prosespaket_id', $datapaketpekerjaan->id)->paginate(5);

        // Ambil data user saat ini
        $user = Auth::user();

        // Kirim variabel ke view
        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.01_paketpekerjaantendershow', [
            'title' => 'Profil Paket Pekerjaan Konstruksi & Konsultasi Kabupaten Blora',
            'data' => $datapaketpekerjaan,
            'user' => $user,
            'datasub' => $subdata,
            // 'start' => $start,  // Pastikan start diteruskan jika dibutuhkan di view
        ]);
    }


}
