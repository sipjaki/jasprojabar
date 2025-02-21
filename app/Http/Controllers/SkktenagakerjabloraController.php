<?php

namespace App\Http\Controllers;


use App\Models\skktenagakerjablora;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



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

        $data = skktenagakerjablora::paginate(15);
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

        $data = skktenagakerjablora::paginate(15);
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

}
