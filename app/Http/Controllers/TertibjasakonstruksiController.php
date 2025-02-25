<?php

namespace App\Http\Controllers;

use App\Models\penyediastatustertibjakon;
use App\Models\tertibjasakonstruksi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TertibjasakonstruksiController extends Controller
{
    //

    public function index()
    {
        $data = tertibjasakonstruksi::paginate(10);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.index', [
            'title' => 'Tertib Usaha, Penyelenggaraan dan Pemanfaatan Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tertibjasakonstruksilist()
    {
        $data = tertibjasakonstruksi::paginate(10);
        $datasub = penyediastatustertibjakon::paginate(15);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.list', [
            'title' => 'Tertib Usaha Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }


}
