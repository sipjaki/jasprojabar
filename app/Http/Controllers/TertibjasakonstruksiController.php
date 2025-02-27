<?php

namespace App\Http\Controllers;

use App\Models\penyediastatustertibjakon;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjasakonstruksi;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class TertibjasakonstruksiController extends Controller
{
    //

    public function index()
    {
        $data = tertibjasakonstruksi::paginate(10);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.index', [
            'title' => 'Tertib Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tertibjasakonstruksilist()
    {
        $data = tertibjasakonstruksi::paginate(10);
        $datasub = penyediastatustertibjakon::paginate(15);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.list', [
            'title' => 'Tertib Usaha Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tertibjasakonstruksiusahapu()
    {
        // $data = tertibjasakonstruksi::paginate(10);
        $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
            // Mengambil data dengan penyedia_id pertama
            $query->where('penyediastatustertibjakon_id', 1); // 1 bisa diganti dengan ID pertama yang diinginkan
        })->paginate(10);

        $datasub = penyediastatustertibjakon::paginate(15);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahapu', [
            'title' => 'PU Tertib Usaha Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tertibjasakonstruksiusahanonpu()
    {
        // $data = tertibjasakonstruksi::paginate(10);
        $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
            // Mengambil data dengan penyedia_id pertama
            $query->where('penyediastatustertibjakon_id', 2); // 1 bisa diganti dengan ID pertama yang diinginkan
        })->paginate(10);

        $datasub = penyediastatustertibjakon::paginate(15);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahanonpu', [
            'title' => 'Non-PU Tertib Usaha Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tertibjasakonstruksiusahaswasta()
    {
        // $data = tertibjasakonstruksi::paginate(10);
        $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
            // Mengambil data dengan penyedia_id pertama
            $query->where('penyediastatustertibjakon_id', 3); // 1 bisa diganti dengan ID pertama yang diinginkan
        })->paginate(10);

        $datasub = penyediastatustertibjakon::paginate(15);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahaswasta', [
            'title' => 'Swasta Tertib Usaha Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    public function tertibjasakonstruksishow($namabadanusaha)
    {
        $datatertibusaha = tertibjasakonstruksi::where('namabadanusaha', $namabadanusaha)->first();

        // if (!$datatertibusaha) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = penyediastatustertibjakon::where('penyedia_id', $datatertibusaha->id)->paginate(20);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.show', [
        'title' => 'Tertib Usaha Jasa Konstruksi',
        'data' => $datatertibusaha,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }

// TERTIB JAKON PEMANFAATAN MAS JAKI BLORA

    public function tertibjasakonstruksipemanfaatan()
    {
        $data = tertibjakonpemanfaatan::paginate(10);
        $datasub = penyediastatustertibjakon::paginate(15);
        $user = Auth::user();

        return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.list', [
            'title' => 'Tertib Pemanfaatan Jasa Konstruksi',
            'user' => $user, // Mengirimkan data paginasi ke view
            'data' => $data, // Mengirimkan data paginasi ke view
            'datasub' => $datasub, // Mengirimkan data paginasi ke view
        ]);
    }

    // public function tertibjasakonstruksiusahapu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 1); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahapu', [
    //         'title' => 'PU Tertib Usaha Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksiusahanonpu()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 2); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahanonpu', [
    //         'title' => 'Non-PU Tertib Usaha Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    // public function tertibjasakonstruksiusahaswasta()
    // {
    //     // $data = tertibjasakonstruksi::paginate(10);
    //     $data = tertibjasakonstruksi::whereHas('penyediastatustertibjakon', function ($query) {
    //         // Mengambil data dengan penyedia_id pertama
    //         $query->where('penyediastatustertibjakon_id', 3); // 1 bisa diganti dengan ID pertama yang diinginkan
    //     })->paginate(10);

    //     $datasub = penyediastatustertibjakon::paginate(15);
    //     $user = Auth::user();

    //     return view('frontend.05_pengawasan.03_tertibjakon.01_tertibusaha.00_filter.tertibusahaswasta', [
    //         'title' => 'Swasta Tertib Usaha Jasa Konstruksi',
    //         'user' => $user, // Mengirimkan data paginasi ke view
    //         'data' => $data, // Mengirimkan data paginasi ke view
    //         'datasub' => $datasub, // Mengirimkan data paginasi ke view
    //     ]);
    // }

    public function tertibjasakonstruksipemanfaatanshow($namabangunan)
    {
        $datatertibpemanfaatan = tertibjakonpemanfaatan::where('namabangunan', $namabangunan)->first();

        // if (!$datatertibusaha) {
        //     // Tangani jika kegiatan tidak ditemukan
        //     return redirect()->back()->with('error', 'Kegiatan tidak ditemukan.');
        // }

        // // Menggunakan paginate() untuk pagination
        // $subdata = penyediastatustertibjakon::where('penyedia_id', $datatertibusaha->id)->paginate(20);

        //   // Menghitung nomor urut mulai
        //     $start = ($subdata->currentPage() - 1) * $subdata->perPage() + 1;


    // Ambil data user saat ini
    $user = Auth::user();

    return view('frontend.05_pengawasan.03_tertibjakon.02_tertibpemanfaatan.show', [
        'title' => 'Tertib Pemanfaatan Jasa Konstruksi',
        'data' => $datatertibpemanfaatan,
        // 'subData' => $subdata,  // Jika Anda ingin mengirimkan data sub kontraktor juga
        'user' => $user,
        // 'start' => $start,
    ]);
    }



}
