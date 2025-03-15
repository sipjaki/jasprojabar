<?php

namespace App\Http\Controllers;

use Carbon\Carbon;

use App\Models\agendapelatihan;
use App\Models\jenjang;
use App\Models\kategoripelatihan;
use App\Models\pembinaan;
use App\Models\pesertapelatihan;
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
                  ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                      $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
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



    public function namakegiatandaftar($namakegiatan)
    {
        $dataagendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        // if (!$databujkkontraktor) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.04_pembinaan.01_agendapembinaan.show', [
        'title' => 'Agenda Pelatihan',
        'data' => $dataagendapelatihan,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }


// DAFTAR PESERTA PELATIHAN AGENDA PELATIHAN WORKSHOP DAN LAINLAIN

    public function daftarpesertapelatihan(Request $request)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = agendapelatihan::query();

        if ($search) {
            $query->where('namakegiatan', 'LIKE', "%{$search}%")
                  ->orWhere('keterangan', 'LIKE', "%{$search}%")
                  ->orWhereHas('kategoripelatihan', function ($q) use ($search) {
                      $q->where('kategoripelatihan', 'LIKE', "%{$search}%");
                  });

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        $user = Auth::user();

        return view('frontend.04_pembinaan.01_agendapembinaan.daftaragenda', [
            'title' => 'Daftar Agenda Pelatihan Jakon Blora',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }

    public function daftarpesertapelatihanshow(Request $request, $namakegiatan)
    {
        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $query = pesertapelatihan::query();

        if ($search) {
            $query->where('jeniskelamin', 'LIKE', "%{$search}%")
                  ->orWhere('instansi', 'LIKE', "%{$search}%")
                  ->orWhereHas('user', function ($q) use ($search) {
                      $q->where('user', 'LIKE', "%{$search}%");
                  });

        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.04_pembinaan.01_agendapembinaan.partials.table', compact('data'))->render()
            ]);
        }

        $agendapelatihan = agendapelatihan::where('namakegiatan', $namakegiatan)->first();

        // Jika asosiasi tidak ditemukan, tampilkan 404
        if (!$agendapelatihan) {
            return abort(404, 'Asosiasi tidak ditemukan');
        }

        $user = Auth::user();
            // Ambil semua data dari tabel bujkkontraktor berdasarkan asosiasi_id
            $data = pesertapelatihan::where('agendapelatihan_id', $agendapelatihan->id)->get(['id', 'user_id', 'jeniskelamin', 'instansi', 'namakegiatan']);
            // $databujkkontraktorpaginate = bu::where('asosiasimasjaki_id', $asosiasi->id)->paginate(10);



        return view('frontend.04_pembinaan.01_agendapembinaan.daftarpesertashow', [
            'title' => 'Daftar Peserta Agenda Pelatihan',
            'data' => $data,
            // 'datapeserta' => $datapesertapelatihan,
            'perPage' => $perPage,
            'search' => $search,
            'user' => $user
        ]);
    }



}

