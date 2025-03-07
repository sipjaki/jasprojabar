<?php

namespace App\Http\Controllers;

use App\Models\agendapelatihan;
use App\Models\jenjang;
use App\Models\kategoripelatihan;
use App\Models\pembinaan;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class PembinaanController extends Controller
{
    //
    // public function index()
    // {
    //     $data = agendapelatihan::paginate(15);
    //     $user = Auth::user();
    //     $datasub = jenjang::all();
    //     $datasubkategori = kategoripelatihan::all();

    //     return view('frontend.04_pembinaan.01_agendapembinaan.index', [
    //         'title' => 'Agenda Pembinaan',
    //         'user' => $user,
    //         'data' => $data,
    //         'datasub' => $datasub,
    //         'datasubkategori' => $datasubkategori,
    //     ]);
    // }

    public function index(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendapelatihan::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('penyelenggara', 'LIKE', "%{$search}%")
                  ->orWhere('lokasi', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('jenjang', function ($q) use ($search) {
                    $q->where('kategoripelatihan', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();
        $datasub = jenjang::all();
        $datasubkategori = kategoripelatihan::all();


        return view('frontend.04_pembinaan.01_agendapembinaan.index', [
            'title' => 'Agenda Pelatihan Konstruksi Kab Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'datasub' => $datasub,
            'datasubkategori' => $datasubkategori,
            'user' => $user
        ]);
    }


}

