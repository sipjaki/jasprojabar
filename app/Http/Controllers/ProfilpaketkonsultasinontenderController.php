<?php

namespace App\Http\Controllers;


use App\Models\profilpaketkonsultasi;
use App\Models\profilpaketkonsultasinontender;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class ProfilpaketkonsultasinontenderController extends Controller
{
    //
    public function paketkonsultasinontender()
    {
        $user = Auth::user();
        $data = profilpaketkonsultasinontender::paginate(15);

        return view('frontend.03_masjaki_jakon.04_profilpaketpekerjaan.04_paketkonsultasinontender', [
            'title' => 'Profil Paket Konsultasi Non Tender',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

}
