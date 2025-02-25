<?php

namespace App\Http\Controllers;

use App\Models\kecelakaankerjamasjaki;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class KecelakaankerjamasjakiController extends Controller
{
    //

    public function index()
    {
        $data = kecelakaankerjamasjaki::paginate(10);
        $user = Auth::user();

        return view('frontend.05_pengawasan.02_kecelakaankerja.02_kecelakaankerja', [
            'title' => 'Angka Kecelakaan Kerja',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function kecelakaankerjalist()
    {
        $data = kecelakaankerjamasjaki::paginate(10);
        $user = Auth::user();

        return view('frontend.05_pengawasan.02_kecelakaankerja.02_kecelakaankerjalist', [
            'title' => 'Angka Kecelakaan Kerja',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function kecelakaankerjashow($namapaketpekerjaan)
    {
        $datakecelakaankerja = kecelakaankerjamasjaki::where('namapaketpekerjaan', $namapaketpekerjaan)->first();
        $user = Auth::user();

    return view('frontend.05_pengawasan.02_kecelakaankerja.02_kecelakaankerjashow', [
        'title' => 'Angka Kecelakaan Kerja',
        'data' => $datakecelakaankerja,
        'user' => $user,

    ]);
    }


}
