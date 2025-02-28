<?php

namespace App\Http\Controllers;

use App\Models\shstblora;

use Illuminate\Support\Facades\Auth;

class ShstbloraController extends Controller
{
    //
    public function bujkkonsultan()
    {
        $data = shstblora::paginate(10);
        $user = Auth::user();

        return view('frontend.07_ahsp.04_shst.shstindex', [
            'title' => 'Standar Harga Satuan Tertinggi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view

        ]);
    }

}
