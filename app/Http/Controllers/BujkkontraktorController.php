<?php

namespace App\Http\Controllers;

use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;



class BujkkontraktorController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.01_bujkkontraktor.index', [
            'title' => 'BUJK Kontraktor & Konsultan',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function bujkkontraktor()
    {
        $data = bujkkontraktor::paginate(15);
        $datasub = bujkkontraktorsub::all();
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
            'title' => 'BUJK Kontraktor',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function bujkkontraktorshow($namalengkap)
    {
    // Ambil data kontraktor berdasarkan namalengkap
    $data = bujkkontraktor::where('namalengkap', $namalengkap)->firstOrFail();

    // Ambil data terkait lainnya jika diperlukan (bujkkontraktorsub)
    $subData = bujkkontraktorsub::where('bujkkontraktor_id', $data->id)->get();  // Misal, menghubungkan dengan ID kontraktor

    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
        'title' => 'Data Bujk Kontraktor',
        'data' => $data,
        'subData' => $subData,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
    ]);
    }


}
