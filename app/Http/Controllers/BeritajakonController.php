<?php

namespace App\Http\Controllers;

use App\Models\artikeljakon;
use App\Models\artikeljakonmasjaki;
use App\Models\beritajakon;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;



class BeritajakonController extends Controller
{
    //

    public function index()
    {
        $user = Auth::user();
        $databerita = beritajakon::paginate(6);


        return view('frontend.02_beritajakon.index', [
            'title' => 'Berita Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $databerita, // Mengirimkan data paginasi ke view
        ]);
    }

    public function artikeljakon()
    {
        $user = Auth::user();
        $dataartikel = artikeljakonmasjaki::paginate(6);

        return view('frontend.02_beritajakon.artikeljakon', [
            'title' => 'Artikel Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $dataartikel, // Mengirimkan data paginasi ke view
        ]);
    }

//     public function asosiasimasjaki(Request $request)
//     {

//         $databujkkontraktor = bujkkontraktor::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
//         ->groupBy('asosiasimasjaki_id')
//         ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
//         ->get();

//         $databujkkonsultan = bujkkonsultan::select('asosiasimasjaki_id', DB::raw('count(*) as jumlah'))
//         ->groupBy('asosiasimasjaki_id')
//         ->with('asosiasimasjaki') // Pastikan ada relasi ke tabel asosiasi
//         ->get();

//         $perPage = $request->input('perPage', 10);
//         $search = $request->input('search');

//         $user = Auth::user();
//         // $data = asosiasimasjaki::paginate(15);

//         $query = bujkkonsultan::query();
//         $query = bujkkontraktor::query();

//         if ($search) {
//             $query->where('namaasosiasi', 'LIKE', "%{$search}%");
//                 //   ->orWhere('alamat', 'LIKE', "%{$search}%")
//                 //   ->orWhere('email', 'LIKE', "%{$search}%")
//                 //   ->orWhere('nib', 'LIKE', "%{$search}%");
//         }

//         $data = $query->paginate($perPage);

//         if ($request->ajax()) {
//             return response()->json([
//                 'html' => view('frontend.03_masjaki_jakon.05_asosiasimasjaki.partials.table', compact('data'))->render()
//             ]);
//         }

//         return view('frontend.03_masjaki_jakon.05_asosiasimasjaki.index', [
//             'title' => 'Asosiasi Konstruksi dan Konsultasi Konstruksi',
//             'user' => $user, // Mengirimkan data paginasi ke view
//             'data' => $data, // Mengirimkan data paginasi ke view
//             'perPage' => $perPage,
//             'search' => $search,
//             'databujkkontraktor' => $databujkkontraktor,
//             'databujkkonsultan' => $databujkkonsultan,
//         ]);
//     }


//     public function bujkkontraktor(Request $request)
// {
//     $perPage = $request->input('perPage', 10);
//     $search = $request->input('search');

//     $query = bujkkontraktor::query();

//     if ($search) {
//         $query->where('namalengkap', 'LIKE', "%{$search}%")
//               ->orWhere('alamat', 'LIKE', "%{$search}%")
//               ->orWhere('email', 'LIKE', "%{$search}%")
//               ->orWhere('nib', 'LIKE', "%{$search}%");
//     }

//     $data = $query->paginate($perPage);

//     if ($request->ajax()) {
//         return response()->json([
//             'html' => view('frontend.03_masjaki_jakon.01_bujkkontraktor.partials.table', compact('data'))->render()
//         ]);
//     }

//     return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktor', [
//         'title' => 'BUJK Konstruksi',
//         'data' => $data,
//         'perPage' => $perPage,
//         'search' => $search
//     ]);
// }

//     public function bujkkontraktorshow($namalengkap)
//     {
//         $databujkkontraktor = bujkkontraktor::where('namalengkap', $namalengkap)->first();

//         if (!$databujkkontraktor) {
//             // Tangani jika kegiatan tidak ditemukan
//             return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
//         }

//         // Menggunakan paginate() untuk pagination
//         $subdata = bujkkontraktorsub::where('bujkkontraktor_id', $databujkkontraktor->id)->paginate(50);

//           // Menghitung nomor urut mulai
//             $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


//     // Ambil data user saat ini
//     $user = Auth::user();

//     return view('frontend.03_masjaki_jakon.01_bujkkontraktor.bujkkontraktorshow', [
//         'title' => 'Data Bujk Konstruksi',
//         'data' => $databujkkontraktor,
//         'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
//         'user' => $user,
//         'start' => $start,
//     ]);
//     }


}
