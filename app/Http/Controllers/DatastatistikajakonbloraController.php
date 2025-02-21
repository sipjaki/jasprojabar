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

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();

        // ---------------------------------
        $totalData = skktenagakerjablora::count();

        // Mengambil semua jenis jabatan kerja
        $dataJabatanKerja = jabatankerja::all();

        // Menyiapkan array untuk menyimpan persentase tiap jabatan kerja
        $persentaseJabatan = [];

        foreach ($dataJabatanKerja as $jabatankerja) {
            // Hitung jumlah tenaga kerja berdasarkan jabatan kerja
            $jumlah = skktenagakerjablora::where('jabatankerja_id', $jabatankerja->id)->count();

            // Hitung persentase
            $persentase = $totalData > 0 ? ($jumlah / $totalData) * 100 : 0;

            // Simpan dalam array dengan format ['Nama Jabatan' => Persentase]
            $persentaseJabatan[$jabatankerja->jabatankerja] = $persentase;
        }

        // ---------------------------------


        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikaskktenagakerja', [
            'title' => 'Data Statistika SKK Tenaga Ahli Berdasarkan Jabatan Kerja',
            'user' => $user,
            'data' => $data,

            'datanamasekolah' => $datanamasekolah,
            'datajenjangpendidikan' => $datajenjangpendidikan,
            'datajurusan' => $datajurusan,
            'datajabatankerja' => $datajabatankerja,
            'datajenjang' => $datajenjang,
            'datalpspenerbit' => $datalpspenerbit,

        ]);
    }


}
