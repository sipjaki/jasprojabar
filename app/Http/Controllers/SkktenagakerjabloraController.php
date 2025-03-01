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
            'title' => 'SKK Tenaga Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function listskktenagakerjablora(Request $request)
    {
        $user = Auth::user();

        // $data = skktenagakerjablora::paginate(10);
        $datanamasekolah = namasekolah::all();
        $datajenjangpendidikan = jenjangpendidikan::all();
        $datajurusan = jurusan::all();
        $datajabatankerja = jabatankerja::all();
        $datajenjang = jenjang::all();
        $datalpspenerbit = lpspenerbit::all();

        $perPage = $request->input('perPage', 10);
            $search = $request->input('search');

            $query = skktenagakerjablora::query();

            if ($search) {
                $query->where('nama', 'LIKE', "%{$search}%")
                        ->orWhere('alamat', 'LIKE', "%{$search}%")
                        ->orWhere('tahunlulus', 'LIKE', "%{$search}%");
                        // ->orWhereHas('jabatankerja_id', function ($q) use ($search) {
                        // $q->where('jabatankerja', 'LIKE', "%{$search}%");
                        //     })
                        //     ->orWhereHas('jenjang_id', function ($q) use ($search) {
                        //         $q->where('jenjang', 'LIKE', "%{$search}%");
                        //     });

            }

            $data = $query->paginate($perPage);

            if ($request->ajax()) {
                return response()->json([
                    'html' => view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.partials.table', compact('data'))->render()
                ]);
            }

        return view('frontend.03_masjaki_jakon.03_tenagakerjakonstruksi.tenagakerjakonstruksi', [
            'title' => 'SKK Tenaga Konstruksi Di Selenggarakan DPUPR',
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
            'title' => 'Data SKK Tenaga Konstruksi',

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
            'title' => 'Daftar Tenaga Konstruksi Kabupaten Blora',
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
            'title' => 'Data SKK Tenaga Konstruksi',

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


}
