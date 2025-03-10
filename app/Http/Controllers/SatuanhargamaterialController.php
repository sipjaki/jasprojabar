<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\bujkkontraktorsub;
use App\Models\satuanhargamaterial;
use App\Models\satuanhargaperalatan;
use App\Models\satuanhargaupahtenagakerja;
use App\Models\hspkonstruksiumum;
use App\Models\subhargadiv1;
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
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargamaterial::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
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

    public function satuanhargaupah(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargaupahtenagakerja::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('kode', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%")
                  ->orWhere('besaranperjam', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.02_hargasatuandasar.02_hargasatuanupah.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.07_ahsp.02_hargasatuandasar.02_hargasatuanupah.newindex', [
            'title' => 'Satuan Harga Dasar Upah Tenaga Kerja',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


    public function satuanhargaperalatan(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = satuanhargaperalatan::query();

        if ($search) {
            $query->where('uraian', 'LIKE', "%{$search}%")
                  ->orWhere('kode', 'LIKE', "%{$search}%")
                  ->orWhere('satuan', 'LIKE', "%{$search}%")
                  ->orWhere('besaran', 'LIKE', "%{$search}%");
                //   ->orWhere('keterangan', 'LIKE', "%{$search}%");
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.02_hargasatuandasar.03_hargasatuanperalatan.partials.table', compact('data'))->render()
            ]);
        }

        return view('frontend.07_ahsp.02_hargasatuandasar.03_hargasatuanperalatan.index', [
            'title' => 'Satuan Harga Dasar Peralatan',
            'data' => $data,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

    public function hspdivisi1(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket', function ($q) use ($search) {
                      $q->where('hsppaket', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.01_divisi1.partials.table', compact('data'))->render()
            ]);
        }

        if (!$data) {
            // Tangani jika kegiatan tidak ditemukan
            return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        }

        // Menggunakan paginate() untuk pagination
        $subdata = subhargadiv1::where('hspkonstruksiumum_id', $data->id)->paginate(50);



        return view('frontend.07_ahsp.03_hspkonstruksiumum.01_divisi1.divisi1', [
            'title' => 'HSP Divisi I Persiapan Pekerjaan',
            'data' => $data,
            'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


}
