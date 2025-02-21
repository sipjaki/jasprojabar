<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultansub;

use Illuminate\Support\Facades\Auth;

class DatastatistikajakonbloraController extends Controller
{
    //

    public function databujk()
    {
        $user = Auth::user();

        $datakontraktor = bujkkontraktor::all(15);
        $datakonsultan = bujkkonsultan::paginate(20);

        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikabujk', [
            'title' => 'BUJK Konsultan',
            'user' => $user, // Mengirimkan data paginasi ke view
            'datakontraktor' => $datakontraktor, // Mengirimkan data paginasi ke view
            'datakonsultan' => $datakonsultan, // Mengirimkan data paginasi ke view
        ]);
    }


}
