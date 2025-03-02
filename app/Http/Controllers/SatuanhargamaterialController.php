<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\bujkkontraktorsub;
use App\Models\satuanhargamaterial;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SatuanhargamaterialController extends Controller
{
    //
    public function index()
    {
        $user = Auth::user();
        // $data = satuanhargamaterial::all();

        return view('frontend.07_ahsp.02_hargasatuandasar.01_hargasatuanmaterial.index', [
            'title' => 'Satuan Harga Dasar',
            'user' => $user, // Mengirimkan data paginasi ke view
            // 'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }


}
