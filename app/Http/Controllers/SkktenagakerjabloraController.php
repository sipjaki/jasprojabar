<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\skktenagakerjablora;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;
use App\Models\skktenagakerjabloralist;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class SkktenagakerjabloraController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.index', [
            'title' => 'SKK Tenaga Ahli Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function listskktenagakerjablora()
    {
        $user = Auth::user();

        $data = skktenagakerjablora::paginate(10);
        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksi', [
            'title' => 'SKK Tenaga Ahli Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view

            'data' => $data, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
        ]);
    }

    public function listskktenagakerjablorashow($nama)
    {
        $dataskk = skktenagakerjablora::where('nama', $nama)->first();

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();


        // Ambil data user saat ini
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksishow', [
            'title' => 'Data SKK Tenaga Ahli Konstruksi',

            'data' => $dataskk, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

    ]);


    }



    // =============================================================================

    public function datalistskktenagakerjablora()
    {
        $user = Auth::user();

        $data = skktenagakerjabloralist::paginate(10);

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();
        $dataasosiasimasjaki = asosiasimasjaki::all();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.listtenagakerjakonstruksi', [
            'title' => 'Daftar Tenaga Ahli Konstruksi Kabupaten Blora',
            'user' => $user, // Mengirimkan data paginasi ke view

            'data' => $data, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
            'dataasosiasimasjaki' => $dataasosiasimasjaki, // Mengirimkan data paginasi ke view
        ]);
    }

    public function datalistskktenagakerjablorashow($nama)
    {
        $dataskklist = skktenagakerjabloralist::where('nama', $nama)->first();

        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();
        $dataasosiasimasjaki = asosiasimasjaki::all();


        // Ambil data user saat ini
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.listtenagakerjakonstruksishow', [
            'title' => 'Data SKK Tenaga Ahli Konstruksi',

            'data' => $dataskklist, // Mengirimkan data paginasi ke view
            'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
            'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
            'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
            'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
            'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
            'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
            'dataasosiasimasjaki' => $dataasosiasimasjaki, // Mengirimkan data paginasi ke view
            'user' => $user, // Mengirimkan data paginasi ke view

    ]);


    }


    // public function datastatistikskktenagakerjablora()
    // {
    //     $dataskklist = skktenagakerjabloralist::all();

    //     $datanamasekolah = namasekolah::all();
    //     $datajenjangpendidikan = jenjangpendidikan::all();
    //     $datajurusan = jurusan::all();
    //     $datajabatankerja = jabatankerja::all();
    //     $datajenjang = jenjang::all();
    //     $datalpspenerbit = lpspenerbit::all();
    //     $dataasosiasimasjaki = asosiasimasjaki::all();


    //     // Ambil data user saat ini
    //     $user = Auth::user();

    //     return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.listtenagakerjakonstruksishow', [
    //         'title' => 'Data SKK Tenaga Ahli Konstruksi',

    //         'data' => $dataskklist, // Mengirimkan data paginasi ke view
    //         'datanamasekolah' => $datanamasekolah, // Mengirimkan data paginasi ke view
    //         'datajenjangpendidikan' => $datajenjangpendidikan, // Mengirimkan data paginasi ke view
    //         'datajurusan' => $datajurusan, // Mengirimkan data paginasi ke view
    //         'datajabatankerja' => $datajabatankerja, // Mengirimkan data paginasi ke view
    //         'datajenjang' => $datajenjang, // Mengirimkan data paginasi ke view
    //         'datalpspenerbit' => $datalpspenerbit, // Mengirimkan data paginasi ke view
    //         'dataasosiasimasjaki' => $dataasosiasimasjaki, // Mengirimkan data paginasi ke view
    //         'user' => $user, // Mengirimkan data paginasi ke view

    // ]);


    // }

    public function datastatistikskktenagakerjablora()
{
    $dataskklist = skktenagakerjabloralist::all();
    $totalData = $dataskklist->count();

    // Statistik Jenjang
    $statistikJenjang = skktenagakerjabloralist::select('jenjang_id', DB::raw('COUNT(*) as jumlah'))
        ->groupBy('jenjang_id')
        ->with('jenjang')
        ->get()
        ->map(function ($item) use ($totalData) {
            return [
                'jenjang' => $item->jenjang->nama ?? 'Tidak Diketahui',
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
                'jabatan_kerja' => $item->jabatankerja->nama ?? 'Tidak Diketahui',
                'jumlah' => $item->jumlah,
                'persentase' => $totalData ? round(($item->jumlah / $totalData) * 100, 2) : 0,
            ];
        });

    return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.statistik.statistiklisttenagakerjakonstruksi', [
        'title' => 'Data Statistik Tenaga Ahli Konstruksi',
        'statistikJenjang' => $statistikJenjang,
        'statistikJabatanKerja' => $statistikJabatanKerja,
    ]);
}


}
