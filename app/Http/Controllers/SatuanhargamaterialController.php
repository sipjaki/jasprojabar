<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\bujkkontraktorsub;
use App\Models\satuanhargamaterial;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class SatuanhargamaterialController extends Controller
{
    // //
    // public function index()
    // {
    //     $user = Auth::user();
    //     $data = satuanhargamaterial::paginate();

    //     return view('frontend.07_ahsp.02_hargasatuandasar.01_hargasatuanmaterial.index', [
    //         'title' => 'Satuan Harga Dasar',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         // 'data' => $data, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 20);
        $search = $request->input('search');

        $query = satuanhargamaterial::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.02_hargasatuandasar.01_hargasatuanmaterial.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.07_ahsp.02_hargasatuandasar.01_hargasatuanmaterial.index', [
            'title' => 'Satuan Harga Dasar Material',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



}
