<?php

namespace App\Http\Controllers;


use App\Models\profilpaketkonsultasi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfilpaketkonsultasiController extends Controller
{
    //
    public function paketkonsultasi()
    {
        $user = Auth::user();
        $data = profilpaketkonsultasi::paginate(15);

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.03_paketkonsultasitender', [
            'title' => 'Profil Paket Konsultasi Tender',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

}
