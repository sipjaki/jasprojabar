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

        return view('frontend.06_rantaipasok.03_tokobangunanblora.new.tokobangunan', [
            'title' => 'Toko Bangunan Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tokobangunanblorashow($kecamatanblora)
    {
        $datakecamatanblora = kecamatanblora::where('kecamatanblora', $kecamatanblora)->first();

        if (!$datakecamatanblora) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = tokobangunanblora::where('kecamatanblora_id', $datakecamatanblora->id)->paginate(10);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.06_rantaipasok.03_tokobangunanblora.tokobangunanblorashow', [
        'title' => 'Toko Bangunan Cakupan Per Kecamatan',
        'data' => $datakecamatanblora,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }

    public function tokobangunanbloralistdetails($namatokobangunan)
    {
        $datatokobangunan = tokobangunanblora::where('namatokobangunan', $namatokobangunan)->first();

        if (!$datatokobangunan) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = kecamatanblora::where('tokobangunanblora_id', $datatokobangunan->id)->paginate(10);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.06_rantaipasok.03_tokobangunanblora.tokobangunanbloralistshow', [
        'title' => 'Toko Bangunan Cakupan Per Kecamatan',
        'data' => $datatokobangunan,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
    }

}
