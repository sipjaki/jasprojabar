<?php

namespace App\Http\Controllers;

use App\Models\penyediastatustertibjakon;
use App\Models\tertibjasakonstruksi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TertibjasakonstruksiController extends Controller
{
    //

    public function index()
    {
        $data = tertibjasakonstruksi::paginate(10);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.index', [
            'title' => 'Tertib Usaha, Penyelenggaraan dan Pemanfaatan Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tertibjasakonstruksilist()
    {
        $data = tertibjasakonstruksi::paginate(10);
        $datasub = penyediastatustertibjakon::paginate(15);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.list', [
            'title' => 'Tertib Usaha Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function bujkkontraktorshow($namalengkap)
    {
        $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();

        if (!$databujkkontraktor) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(20);

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
