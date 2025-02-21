<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultansub;

use App\Models\skktenagakerjablora;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;

use Illuminate\Support\Facades\Auth;

class DatastatistikajakonbloraController extends Controller
{
    //

    public function databujk()
    {
        $user = Auth::user();

        $datakontraktor = bujkkontraktor::count();
        $datakonsultan = bujkkonsultan::count();
        $total = $datakontraktor + $datakonsultan;

        // Menghitung persentase
        $persen_kontraktor = $total > 0 ? ($datakontraktor / $total) * 100 : 0;
        $persen_konsultan = $total > 0 ? ($datakonsultan / $total) * 100 : 0;

        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikabujk', [
            'title' => 'Data Statistika BUJK Kontraktor & Konsultan',
            'user' => $user,
            'datakontraktor' => $datakontraktor,
            'datakonsultan' => $datakonsultan,
            'persen_kontraktor' => $persen_kontraktor,
            'persen_konsultan' => $persen_konsultan,
        ]);
    }

    public function statistikaskktenagakerjablora()
    {
        $user = Auth::user();

        $data = skktenagakerjablora::count();

        // Ambil total jumlah tenaga kerja per jabatan
        $jumlahData = skktenagakerjablora::select('jabatankerja_id')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('jabatankerja_id')
            ->get()
            ->pluck('total', 'jabatankerja_id');

        // Hitung total semua tenaga kerja
        $totalTenagaKerja = $jumlahData->sum();

        // Buat array persentase berdasarkan jumlah tenaga kerja
        $persentaseJabatan = jabatankerja::whereIn('id', $jumlahData->keys())
            ->get()
            ->map(function ($jabatan) use ($jumlahData, $totalTenagaKerja) {
                $jumlah = $jumlahData[$jabatan->id] ?? 0;
                return [
                    'jabatan' => $jabatan->nama,
                    'persentase' => $totalTenagaKerja > 0 ? round(($jumlah / $totalTenagaKerja) * 100, 2) : 0
                ];
            });

        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikaskktenagakerja', [
            'title' => 'Data Statistika SKK Tenaga Ahli Berdasarkan Jabatan Kerja',
            'user' => $user,
            'data' => $data,
            'persentaseJabatan' => $persentaseJabatan,
        ]);
    }



}
