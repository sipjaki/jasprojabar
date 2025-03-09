<?php

namespace App\Http\Controllers;

use App\Models\agendastatus;
use App\Models\asosiasipengusaha;
use App\Models\berita;
use App\Models\beritaagenda;
use App\Models\himbauandinas;
use App\Models\kegiatanjaskon;
use App\Models\keputusanmenteri;
use App\Models\keterampilanpekerja;
use App\Models\ketertiban;
use App\Models\laporankegiatan;
use App\Models\metodepengadaan;
use App\Models\paketpekerjaan;
use App\Models\pelatihan;
use App\Models\penanggungjawabteknis;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use App\Models\peraturan;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\pergubernur;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\qa;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\referensi;
use App\Models\statusadmin;
use App\Models\suratedaran;
use App\Models\suratkeputusan;
use App\Models\tahunpilihan;
use App\Models\timpembina;
use App\Models\Tukangterampil;
use App\Models\uijk;
use App\Models\undangundang;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;


class AdminDashboardController extends Controller
{
    //
    public function index()
    {

        $user = Auth::user();

        return view('backend.00_dashboard.index', [
            'title' => 'Admin Dashboard Mas Jaki DPUPR Blora',
            'user' => $user,
            // 'jumlahQa' => $jumlahQa,  // Menambahkan jumlah data ke view
            // 'jumlahBerita' => $jumlahBerita,  // Menambahkan jumlah data ke view
            // 'jumlahAgendasertifikasi' => $jumlahAgendasertifikasi,  // Menambahkan jumlah data ke view

        ]);
    }

}
