<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultansub;

use App\Models\skktenagakerjablora;
use App\Models\skktenagakerjabloralist;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
            ->map(function ($jabatankerja) use ($jumlahData, $totalTenagaKerja) {
                $jumlah = $jumlahData[$jabatankerja->id] ?? 0;
                return [
                    'jabatan' => $jabatankerja->jabatankerja,
                    'persentase' => $totalTenagaKerja > 0 ? round(($jumlah / $totalTenagaKerja) * 100, 2) : 0
                ];
            });

            // ------------------

            $jumlahDatabaru = skktenagakerjablora::select('jabatankerja_id')
            ->selectRaw('COUNT(*) as total')
            ->groupBy('jabatankerja_id')
            ->get()
            ->pluck('total', 'jabatankerja_id');

        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikaskktenagakerja', [
            'title' => 'Data Statistika SKK Tenaga Ahli Berdasarkan Jabatan Kerja',
            'user' => $user,
            'data' => $data,
            'persentaseJabatan' => $persentaseJabatan,
            'jumlahDatabaru' => $jumlahDatabaru, // Pastikan data ini dikirim ke view
        ]);
    }


    public function datastatistikaskktenagakerjablora()
{
    $dataskklist = skktenagakerjabloralist::all();
    $datacount = skktenagakerjabloralist::count();
    $totalData = $dataskklist->count();

    // Statistik Jenjang
    $statistikJenjang = skktenagakerjabloralist::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    // Statistik Jabatan Kerja
    $statistikJabatanKerja = skktenagakerjabloralist::select('jabatankerja_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jabatankerja_id')
        ->with('jabatankerja')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jabatankerja' => $item->jabatankerja->jabatankerja ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

        $jumlahstatistikJenjang = skktenagakerjabloralist::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
            ];
        });


    return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.statistiklisttenagakerjakonstruksi', [
        'title' => 'Data Statistik Tenaga Ahli Konstruksi',
        'statistikJenjang' => $statistikJenjang,
        'jumlahstatistikJenjang' => $jumlahstatistikJenjang,
        'statistikJabatanKerja' => $statistikJabatanKerja,
        'datacount' => $datacount,

    ]);
}

public function datajenjang1()
{
    $dataskklist = skktenagakerjabloralist::where('jenjang_id', 1)->get();  // Filter based on jenjang_id = 1
    $datacount = $dataskklist->count();
    $totalData = $datacount;  // The total data after filtering

    // Statistik Jabatan Kerja berdasarkan Jenjang ID 1
    $statistikJabatanKerja = $dataskklist->groupBy('jabatankerja_id')
    ->map(function ($group, $jabatankerja_id) use ($totalData) {
        $jabatankerja = $group->first()->jabatankerja->jabatankerja ?? 'Tidak Diketahui';
        $jumlah = $group->count();
        $persentase = $totalData ? round(($jumlah / $totalData) * 100, 2) : 0;

        return [
            'jabatankerja' => $jabatankerja,
            'jumlah' => $jumlah,
            'persentase' => $persentase,
        ];
        })->values();  // Reindex the array after map

        $statistikJenjang = skktenagakerjabloralist::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->jenjang ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });


        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.01_jenjang1', [
            'title' => 'Data Statistik Tenaga Ahli Konstruksi',
            'statistikJabatanKerja' => $statistikJabatanKerja,
            'datacount' => $datacount,
            'statistikJenjang' => $statistikJenjang,
        ]);
}






}
