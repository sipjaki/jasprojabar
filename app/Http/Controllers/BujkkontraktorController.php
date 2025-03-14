<?php

namespace App\Http\Controllers;

use App\Models\asosiasimasjaki;
use App\Models\bujkkonsultan;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BujkkontraktorController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();

        return view('frontend.03_masjaki_jakon.01_bujkkontraktor.index', [
            'title' => 'BUJK Konstruksi & Konsultasi Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
        ]);
    }

    public function asosiasimasjaki(Request $request)
    {

        $databujkkontraktor = bujkkontraktor::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
        ->groupBy('asosiasimasjaki_id')
        ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
        ->get();

        $databujkkonsultan = bujkkonsultan::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
        ->groupBy('asosiasimasjaki_id')
        ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
        ->get();

        $perPage = $request->input('perPage', 10);
        $search = $request->input('search');

        $user = Auth::user();
        // $data = asosiasimasjaki::paginate(15);

        $databujkkontraktorpaginate = bujkkontraktor::paginate(15);
        $databujkkonsultanpaginate = bujkkonsultan::paginate(15);

        $query = bujkkonsultan::query();
        $query = bujkkontraktor::query();

        if ($search) {
            $query->where('namaasosiasi', 'LIKE', "%{$search}%");
                //   ->orWhere('alamat', 'LIKE', "%{$search}%")
                //   ->orWhere('email', 'LIKE', "%{$search}%")
                //   ->orWhere('nib', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.03_masjaki_jakon.05_asosiasimasjaki.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.index', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'perPage' => $perPage,
            'search' => $search,
            'databujkkontraktor' => $databujkkontraktor,
            'databujkkontraktorpaginate' => $databujkkontraktorpaginate,
            'databujkkonsultanpaginate' => $databujkkonsultanpaginate,
            'databujkkonsultan' => $databujkkonsultan,
        ]);
    }


    public function bujkkontraktor(Request $request)
{
    $perPage = $request->input('perPage', 10);
    $search = $request->input('search');

    $query = bujkkontraktor::query();

    if ($search) {
        $query->where('namalengkap', 'LIKE', "%{$search}%")
              ->orWhere('alamat', 'LIKE', "%{$search}%")
              ->orWhere('email', 'LIKE', "%{$search}%")
              ->orWhere('nib', 'LIKE', "%{$search}%");
    }

    $data = $query->paginate($perPage);

    if ($request->ajax()) {
        return response()->json([
            'html' => view('frontend.03_masjaki_jakon.01_bujkkontraktor.partials.table', compact('data'))->render()
        ]);
    }


    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
        'title' => 'BUJK Konstruksi',
        'data' => $data,
        'perPage' => $perPage,
        'search' => $search
    ]);
}

    public function bujkkontraktorshow($namalengkap)
    {
        $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();

        if (!$databujkkontraktor) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

          // Menghitung nomor urut mulai
            $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktorshow', [
        'title' => 'Data Bujk Konstruksi',
        'data' => $databujkkontraktor,
        'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        'start' => $start,
    ]);
}


public function asosiasikonstruksishow($namaasosiasi)
{
    // Cari asosiasi berdasarkan namaasosiasi
    $asosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$asosiasi) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();
        // Ambil semua data dari tabel bujkkontraktor berdasarkan asosiasi_id
        $databujkkontraktor = bujkkontraktor::where('asosiasimasjaki_id', $asosiasi->id)->get(['id', 'namalengkap', 'no_telepon']);
        // $databujkkontraktorpaginate = bu::where('asosiasimasjaki_id', $asosiasi->id)->paginate(10);


        // Return ke view dengan format yang diminta
        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.showasosiasikontraktor', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user,
            'data' => $databujkkontraktor,
       ]);
    }


public function asosiasikonsultanshow($namaasosiasi)
{
    // Cari asosiasi berdasarkan namaasosiasi
    $asosiasi = asosiasimasjaki::where('namaasosiasi', $namaasosiasi)->first();

    // Jika asosiasi tidak ditemukan, tampilkan 404
    if (!$asosiasi) {
        return abort(404, 'Asosiasi tidak ditemukan');
    }

    $user = Auth::user();
        // Ambil semua data dari tabel bujkkontraktor berdasarkan asosiasi_id
        $databujkkonsultan = bujkkonsultan::where('asosiasimasjaki_id', $asosiasi->id)->get(['id', 'namalengkap', 'no_telepon']);
        // $databujkkontraktorpaginate = bu::where('asosiasimasjaki_id', $asosiasi->id)->paginate(10);


        // Return ke view dengan format yang diminta
        return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.showasosiasikonsultan', [
            'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
            'user' => $user,
            'data' => $databujkkonsultan,
       ]);
    }



}
