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

        $datakontraktor = bujkkontraktor::count();
        $datakonsultan = bujkkonsultan::count();
        $total = $datakontraktor + $datakonsultan;

        // Menghitung persentase
        $persen_kontraktor = $total > 0 ? ($datakontraktor / $total) * 100 : 0;
        $persen_konsultan = $total > 0 ? ($datakonsultan / $total) * 100 : 0;

        return view('frontend.03_masjaki_jakon.00_datastatistikabujk.datastatistikabujk', [
            'title' => 'Data Statistika BUJK Kontraktor & Konsultan',
            'user' => $user,
            'datakontraktor' => $datakontraktor,
            'datakonsultan' => $datakonsultan,
            'persen_kontraktor' => $persen_kontraktor,
            'persen_konsultan' => $persen_konsultan,
        ]);
    }


}
