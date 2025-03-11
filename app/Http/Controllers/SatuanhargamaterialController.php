<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\bujkkontraktorsub;
use App\Models\satuanhargamaterial;
use App\Models\satuanhargaperalatan;
use App\Models\satuanhargaupahtenagakerja;
use App\Models\hspkonstruksiumum;
use App\Models\hspkonstruksiumum2;
use App\Models\hspkonstruksiumum3;
use App\Models\hspkonstruksiumum4;
use App\Models\hspkonstruksiumum5;
use App\Models\hspkonstruksiumum6;
use App\Models\hspkonstruksiumum7;
use App\Models\hspkonstruksiumum8;
use App\Models\hspkonstruksiumum9;
// use App\Models\hspkonstruksiumum2;
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

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.01_divisi1.divisi1', [
            'title' => 'Harga Satuan Pekerjaan Divisi I Persiapan Pekerjaan',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }



// DIVISI 2


    public function hspdivisi2(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum2::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket2', function ($q) use ($search) {
                      $q->where('hsppaket2', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan2', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.02_divisi2.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.02_divisi2.divisi2', [
            'title' => 'Harga Satuan Pekerjaan Divisi 2 Pekerjaan Struktur',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


// DIVISI 3


    public function hspdivisi3(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum3::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket3', function ($q) use ($search) {
                      $q->where('hsppaket3', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan3', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.03_divisi3.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.03_divisi3.03_divisi3', [
            'title' => 'Harga Satuan Pekerjaan Divisi 3 Pekerjaan Arsitektur',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }

// DIVISI 4


    public function hspdivisi4(Request $request)
    {
        $perPage = $request->input('perPage', 25);
        $search = $request->input('search');

        $query = hspkonstruksiumum4::query();

        if ($search) {
            $query->where('kode', 'LIKE', "%{$search}%")
                  ->orWhere('jenispekerjaan', 'LIKE', "%{$search}%")
                  ->orWhere('hargasatuan', 'LIKE', "%{$search}%")

                  ->orWhereHas('hspdivisi', function ($q) use ($search) {
                      $q->where('hspdivisi', 'LIKE', "%{$search}%"); // 'jabatankerja' = nama kolom di tabel jabatankerja
                  })

                  ->orWhereHas('hsppaket4', function ($q) use ($search) {
                      $q->where('hsppaket4', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  })

                  ->orWhereHas('hspkodepekerjaan4', function ($q) use ($search) {
                      $q->where('namapekerjaan', 'LIKE', "%{$search}%"); // 'jenjang' = nama kolom di tabel jenjang
                  });
        }

        $data = $query->paginate($perPage);

        if ($request->ajax()) {
            return response()->json([
                'html' => view('frontend.07_ahsp.03_hspkonstruksiumum.04_divisi4.partials.table', compact('data'))->render()
            ]);
        }

        // $subdata = HspKonstruksiUmum::with('subhargadiv1')
        // ->whereHas('jenispekerjaan', function ($query) use ($jenispekerjaan) {
        //     $query->where('jenispekerjaan', $jenispekerjaan);
        // })
        // ->get();

        // if ($request->ajax()) {
        //     return response()->json($subdata);
        // }
        return view('frontend.07_ahsp.03_hspkonstruksiumum.04_divisi4.04_divisi4', [
            'title' => 'Harga Satuan Pekerjaan Divisi 4 Pekerjaan Lansekap',
            'data' => $data,
            // 'subdata' => $subdata,
            'perPage' => $perPage,
            'search' => $search
        ]);
    }


}
