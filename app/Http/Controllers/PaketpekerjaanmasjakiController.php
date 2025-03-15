<?php

namespace App\Http\Controllers;

use App\Models\paketpekerjaanmasjaki;
use Illuminate\Http\Request;

class PaketpekerjaanmasjakiController extends Controller
{
    //

    public function paketpekerjaanmasjaki(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = paketpekerjaanmasjaki::query();

        if ($search) {
            $query->where('namapekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('cvptpenyedia', 'LIKE', "%{$search}%")
                  ->orWhere('dinas', 'LIKE', "%{$search}%")
                  ->orWhereHas('profiljenispekerjaan', function ($q) use ($search) {
                      $q->where('jenispekerjaan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })
                  ->orWhereHas('tahunpilihan', function ($q) use ($search) {
                      $q->where('tahunpilihan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })
                  ->orWhereHas('sumberdana', function ($q) use ($search) {
                      $q->where('sumberdana', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  });
        }


        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.partials.table', compact('data'))->render()
            ]);
        }


        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.00_paketpekerjaan.index', [
            'title' => 'Profil Paket Pekerjaan Konstruksi dan Konsultasi Konstruksi',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

}
