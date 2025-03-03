<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// namespace App\Models;

use App\Models\agendasertifikasi;
use App\Models\agendastatus;
use App\Models\Agendastatus as ModelsAgendastatus;
use App\Models\asosiasipengusaha;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tukangterampil;
use App\Models\peraturan;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\keputusanmenteri;
use App\Models\laporankegiatan;
use App\Models\layanankami;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\pergubernur;
use App\Models\suratkeputusan;
use App\Models\berita;
use App\Models\beritaagenda;
use App\Models\giskbb;
use App\Models\himbauandinas;
use App\Models\isadmin;
use App\Models\kegiatanjaskon;
use App\Models\keterampilanpekerja;
use App\Models\ketertiban;
use App\Models\metodepengadaan;
use App\Models\paketpekerjaan;
use App\Models\Paketpekerjaan as ModelsPaketpekerjaan;
use App\Models\pelatihan;
use App\Models\penanggungjawabteknis;
use App\Models\pengawasanbangunangedung;
use App\Models\pengawasanketertiban;
use App\Models\pengawasanlokasi;
use App\Models\pengawasanstatus;
use App\Models\pengawasantindakan;
use App\Models\qa;
use App\Models\qapertanyaan;
use App\Models\qasebagai;
use App\Models\renstra;
use App\Models\sbulampiran1;
use App\Models\sbulampiran2;
use App\Models\sbulampiran3;
// use App\Models\sertifikasiagenda;
use App\Models\standarbiayaumum;
use App\Models\statusadmin;
use App\Models\statustertibjakon;
use App\Models\strukturdinas;
use App\Models\tahunpilihan;
use App\Models\tertibjakon;
use App\Models\timpembina;
use App\Models\tupoksi;
use App\Models\uijk;
use App\Models\bujkkontraktor;
use App\Models\bujkkontraktorsub;
use App\Models\bujkkonsultan;
use App\Models\bujkkonsultansub;
use App\Models\namasekolah;
use App\Models\jenjangpendidikan;
use App\Models\jurusan;
use App\Models\jabatankerja;
use App\Models\jenjang;
use App\Models\lpspenerbit;
use App\Models\skktenagakerjablora;
use App\Models\skktenagakerjabloralist;
use App\Models\asosiasiblora;
use App\Models\asosiasimasjaki;
use App\Models\profilpaketpekerjaanblora;
use App\Models\profilpaketpekerjaannontender;
use App\Models\profilpaketkonsultasi;
use App\Models\profilpaketkonsultasinontender;
use App\Models\prosespaket;
use App\Models\prosespaketnontender;
use App\Models\prosespaketkonsultasi;
use App\Models\prosespaketkonsultasinontender;
use App\Models\pengawasanbujk;
use App\Models\kecelakaankerjamasjaki;
use App\Models\penyediastatustertibjakon;
use App\Models\tertibjasakonstruksi;
use App\Models\tertibjakonpemanfaatan;
use App\Models\tertibjakonpenyelenggaraan;
use App\Models\kecamatanblora;
use App\Models\rantaipasokblora;
use App\Models\peralatankonstruksi;
use App\Models\alatberat;
use App\Models\tokobangunanblora;
use App\Models\shstblora;
use App\Models\profiljenispekerjaan;
use App\Models\sumberdana;
use App\Models\satuanhargamaterial;


// modelbaru
// use App\Models\paketpekerjaan;
use Database\Factories\SkktenagakerjaFactory;
// use Carbon\Carbon;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // Asosiasipengusaha::factory(15)->create();
        // Paketpekerjaan::factory(15)->create();
        // Penanggungjawabteknis::factory(15)->create();
        // Ketertiban::factory(15)->create();
        // Beritaagenda::factory(15)->create();
        // User::factory(15)->create();
        // // \App\Models\sertifikasiagenda::factory(15)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        // asosiasipengusaha::factory(15)->create();
        // paketpekerjaan::factory(15)->create();
        // penanggungjawabteknis::factory(15)->create();
        // ketertiban::factory(15)->create();
        // beritaagenda::factory(15)->create();
        // Qa::factory(15)->create();
        // BAHAN TUKANG TERAMPIL BLORA
        // Tukangterampil::factory(994)->create();


// =============== CREATE QA PERTANYAAN


// =========================================================

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);


        User::create([
            'name'  => 'Admin Sipjaki',
            'username' => 'sipjakikbb',
            'statusadmin_id' => '1',
            'avatar' => 'user/avatar/foto2.png',
            'email' => 'sipjakikbb@gmail.com',
            'password' => bcrypt('adminadmin$$123')
        ]);

        User::create([
            'name'  => 'User 1 Sipjaki',
            'username' => 'sipjakikbbuser$1',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/foto3.png',
            'email' => 'sipjakikbbuser1@gmail.com',
            'password' => bcrypt('sipjakiuser$$111')
        ]);

        User::create([
            'name'  => 'User 2 Sipjaki',
            'username' => 'sipjakikbbuser$2',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/foto4.png',
            'email' => 'sipjakikbbuser2@gmail.com',
            'password' => bcrypt('sipjakiuser$$222')
        ]);

        User::create([
            'name'  => 'User 3 Sipjaki',
            'username' => 'sipjakikbbuser$3',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/foto5.png',
            'email' => 'sipjakikbbuser3@gmail.com',
            'password' => bcrypt('sipjakiuser$$333')
        ]);

        User::create([
            'name'  => 'User 4 Sipjaki',
            'username' => 'sipjakikbbuser$4',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/foto6.png',
            'email' => 'sipjakikbbuser4@gmail.com',
            'password' => bcrypt('sipjakiuser$$444')
        ]);


        // =================================================================
        statusadmin::create([
            'id'  => '1',
            'status'  => 'super_admin',
        ]);

        statusadmin::create([
            'id'  => '2',
            'status'  => 'admin',
        ]);

        statusadmin::create([
            'id'  => '3',
            'status'  => 'user',
        ]);




//======================== ===================================================================================
//======================== ===================================================================================
strukturdinas::create([
    'judul' => 'Struktur Dinas Pekerjaan Umum Dan Penataan Ruang Pemerintah Kabupaten Blora',
    'peraturan' => 'struktur/01_dinas/STRUKTUR_KEDINASAN.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

strukturdinas::create([
    'judul' => 'Struktur Dinas Pekerjaan Umum Dan Penataan Ruang Pemerintah Kabupaten Blora',
    'peraturan' => 'struktur/01_dinas/STRUKTUR_DPUPR_KABUPATEN_BLORA.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
renstra::create([
    'judul' => 'Rencana Strategis Pemerintah Kabupaten Bandung Barat',
    'peraturan' => 'struktur/02_renstra/RENSTRA_DPUPR_KAB_BLORA.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
tupoksi::create([
    'judul' => 'Tupoksi Program Dan Jasa Konstruksi DPUPR Kab Blora',
    'peraturan' => 'struktur/03_tupoksi/TUPOKSI_DPUPR_BLORA.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// MAS JAKI DATA JASA KONSTRUKSI
//======================== ===================================================================================
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 1, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'Mandra Kanta Unggul',
    'alamat' => 'Desa Tawangrejo 003/005 Kunduran Kab. Blora Jawa Tengah',
    'no_telepon' => '082324908547',
    'email' => 'mandrakantaunggul@gmail.com',
    'nib' => '0208220001109',
    'pju' => 'WINARSIH',
    'no_akte' => '25',
    'tanggal' => '2024-07-21',
    'nama_notaris' => 'DIAH TRIMURTI SALEH S.E., S.H., M.KN',
    'no_pengesahan' => 'AHU-0049177-AH.01.14'
]);

// -----------------------

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'BG-009',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'Nizar Sandy Saputra',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Lainnya'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG-006',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-05-27',
    'masa_berlaku' => '2026-05-26',
    'nama_psjk' => 'Nizar Sandy Saputra',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS-001',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'Agus Rizqi Arfianto',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG-002',
    'kualifikasi' => 'Kecil',
    'penerbit' => ' LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-06-28',
    'masa_berlaku' => '2026-06-27',
    'nama_psjk' => 'Nizar Sandy Saputra',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'Muhammad Abdul Rozak',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'BS-004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2024-05-13',
    'masa_berlaku' => '2026-05-12',
    'nama_psjk' => 'Agus Rizqi Arfianto',
    'sub_kualifikasi_bu' => 'Konstruksi Jaringan Irigasi dan Drainase'
]);

bujkkontraktorsub::create([
    'bujkkontraktor_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => null,
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

// ---------------

bujkkontraktor::create([
    'bujkkontraktorsub_id' => 2, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'Ramai Jaya Bumi',
    'alamat' => 'Jl. Gajah Mada No. 24A 000/000 Cepu Kab. Blora Jawa Tengah',
    'no_telepon' => '02965104662',
    'email' => 'ramaijayaabadi18@gmail.com',
    'nib' => '9120004380419',
    'pju' => 'LINDA CRISTIYAWATI',
    'no_akte' => null,
    'tanggal' => null,
    'nama_notaris' => null,
    'no_pengesahan' => null
]);

// -----------------------

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'OKTAVIA COKRODIHARJO',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Menengah',
    'penerbit' => 'LSBU KONSTRUKSI INDONESIA (ASPEKINDO)',
    'tanggal_terbit' => '2024-04-22',
    'masa_berlaku' => '2027-04-21',
    'nama_psjk' => 'MUHAMMAD KHAFID SAHRONI',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'OKTAVIA COKRODIHARJO',
    'sub_klasifikasi_layanan' => 'Instalasi Minyak Dan Gas',
    'kode' => 'IN004',
    'kualifikasi' => 'Spesialis',
    'penerbit' => 'LSBU KONSTRUKSI INDONESIA (ASPEKINDO)',
    'tanggal_terbit' => '2023-07-14',
    'masa_berlaku' => '2026-07-13',
    'nama_psjk' => 'Dedi Setyawan',
    'sub_kualifikasi_bu' => 'Instalasi Minyak Dan Gas'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'OKTAVIA COKRODIHARJO',
    'sub_klasifikasi_layanan' => 'Instalasi Mekanikal',
    'kode' => 'IN001',
    'kualifikasi' => 'Spesialis',
    'penerbit' => 'LSBU KONSTRUKSI INDONESIA (ASPEKINDO)',
    'tanggal_terbit' => '2023-07-24',
    'masa_berlaku' => '2026-07-23',
    'nama_psjk' => 'Dedi Setyawan',
    'sub_kualifikasi_bu' => 'Instalasi Mekanikal'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pengerukan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Industri',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Instalasi Elektronika',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Minyak dan Gas Bumi',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Penyewaan Alat Konstruksi Dengan Operator',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Penyiapan Lahan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pertambangan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Panas Bumi',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pembongkaran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pemasangan Pondasi Dan Tiang Pancang',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Khusus Lainnya Ytdl',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Instalasi Saluran Air (Plambing)',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pengerjaan Lantai, Dinding, Peralatan Saniter Dan Plafon',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pengecatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Penyelesaian Konstruksi Bangunan Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Dekorasi Eksterior',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Khusus Lainnya Ytdl',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Aktivitas Arsitektur',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jalan Rel',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ----------------------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 3, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'TRIBAKTI BINTANG SEJAHTERA',
    'alamat' => 'BERAN 001/003 Blora Kab. Blora Jawa Tengah',
    'no_telepon' => null,
    'email' => 'cvtribaktibintangsejahtera@gmail.com',
    'nib' => '2601230022904',
    'pju' => 'IRHAM MUHDLORIN',
    'no_akte' => '21',
    'tanggal' => '2024-02-05',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0006809-AH.01.16'
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'ASKIA AZAMZAMI',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-04-16',
    'masa_berlaku' => '2026-04-15',
    'nama_psjk' => 'WAWAN SUWANDI',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'ASKIA AZAMZAMI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2024-08-07',
    'masa_berlaku' => '2027-08-06',
    'nama_psjk' => 'AHMAD FAIZAL ABADI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'ASKIA AZAMZAMI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2024-08-07',
    'masa_berlaku' => '2027-08-07',
    'nama_psjk' => 'AHMAD FAIZAL ABADI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ----------------------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 4, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'DIZA PERMATA HATI',
    'alamat' => 'DESA BANDUNGROJO RT. 001 RW. 001, Ngawen,Kab. Blora',
    'no_telepon' => '082138576435',
    'email' => 'diza_permatahati@yahoo.com',
    'nib' => '9120004152754',
    'pju' => 'MOHAMAD RIDWAN',
    'no_akte' => '7',
    'tanggal' => null,
    'nama_notaris' => 'ERLY MAIDA, SH., M.KN',
    'no_pengesahan' => 'AHU-0005350-AH.01.17'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'BS004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-10-20',
    'masa_berlaku' => '2026-10-19',
    'nama_psjk' => 'RAHMAT MAULANA',
    'sub_kualifikasi_bu' => 'Konstruksi Jaringan Irigasi dan Drainase'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Prasarana Sumber Daya Air',
    'kode' => 'BS010',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-04-30',
    'masa_berlaku' => '2026-10-19',
    'nama_psjk' => 'SUPARMAN',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Prasarana Sumber Daya Air'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-04-30',
    'masa_berlaku' => '2025-04-29',
    'nama_psjk' => 'RAHMAT MAULANA',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2022-04-30',
    'masa_berlaku' => '2025-04-29',
    'nama_psjk' => 'IMAM MARUF',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD KHOLIL',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'BS002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2024-02-28',
    'masa_berlaku' => '2027-02-27',
    'nama_psjk' => 'RAHMAT MAULANA',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Prasarana dan Sarana Sistem Pengolahan Limbah Padat, Cair, dan Gas',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jalan Rel',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Terowongan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 5 -----------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 5, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'TUNGGAL GUNA KARYA',
    'alamat' => 'DESA GENENG 003/001 Jepon Kab. Blora Jawa Tengah',
    'no_telepon' => '082314931935',
    'email' => 'cvtunggalgunakarya@gmail.com',
    'nib' => '2507220064975',
    'pju' => 'CUNCUN BRIONO',
    'no_akte' => '360',
    'tanggal' => '2022-06-20',
    'nama_notaris' => 'NIKEN SUKMAWATI S.H., M.KN.',
    'no_pengesahan' => 'AHU-0042025-AH.01.14'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'CUNCUN BRIONO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2022-08-20',
    'masa_berlaku' => '2025-08-19',
    'nama_psjk' => 'SRI LESTARI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'CUNCUN BRIONO',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2022-08-20',
    'masa_berlaku' => '2025-08-19',
    'nama_psjk' => 'DWI FINGKI SAPUTRO',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);


bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Industri',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Tempat Hiburan dan Olahraga',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Prasarana dan Sarana Sistem Pengolahan Limbah Padat, Cair, dan Gas',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 6 -----------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 6, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'TRI GRAHA MEGAH JAYA',
    'alamat' => 'DESA PATALAN 003/005 Kab. Blora Jawa Tengah',
    'no_telepon' => '081325225577',
    'email' => 'cvtrigrahamegahjayapatalan@yahoo.com',
    'nib' => '220102311534',
    'pju' => 'SUTRISNO',
    'no_akte' => '413',
    'tanggal' => '2022-02-21',
    'nama_notaris' => 'NIKEN SUKMAWATI S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0011469-AH.01.16'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SUTRISNO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-03-07',
    'masa_berlaku' => '2026-03-06',
    'nama_psjk' => 'BANGKIT DWI CAHYO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SUTRISNO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-03-07',
    'masa_berlaku' => '2026-03-06',
    'nama_psjk' => 'BANGKIT DWI CAHYO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SUTRISNO',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Gamana Krida Bhakti (GAPENSI)',
    'tanggal_terbit' => '2023-02-23',
    'masa_berlaku' => '2026-06-22',
    'nama_psjk' => 'BANGKIT DWI CAHYO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Tempat Hiburan dan Olahraga',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Pembuatan/Pengeboran Sumur Air Tanah',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Prasarana Sumber Daya Air',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 7 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 7, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'BERKAH HPL MANDIRI',
    'alamat' => 'DESA PENGKOLREJO 001/004 Japah Kab. Blora Jawa Tengah',
    'no_telepon' => '08122607371',
    'email' => 'cvberkahhplmandiri@gmail.com',
    'nib' => '1305230017493',
    'pju' => 'RUSMADI',
    'no_akte' => '16',
    'tanggal' => '2023-01-16',
    'nama_notaris' => 'DIAH TRIMURTI SALEH S.E., S.H., M.KN.',
    'no_pengesahan' => 'AHU-0004908-AH.01.14'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'BG002',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perkantoran'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'BG009',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Lainnya'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-06-12',
    'masa_berlaku' => '2026-06-11',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 7, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'RUSMADI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perbelanjaan',
    'kode' => 'BG004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2024-02-27',
    'masa_berlaku' => '2026-02-26',
    'nama_psjk' => 'MUKHSIN BUDI IRWANTO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Perbelanjaan'
]);

// ---- DATA 8 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 8, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'KARYA DWI PUTRI',
    'alamat' => 'DESA TODANAN, Desa/Kelurahan Todanan, Kec. Todanan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '085212848598',
    'email' => 'cvkaryadwiputri2023@gmail.com',
    'nib' => '9120007580891',
    'pju' => 'SRI WAHYUNI',
    'no_akte' => '17',
    'tanggal' => null,
    'nama_notaris' => 'DIAH TRIMURTI SALEH S.E., S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0022831-AH.01.16'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Lainnya',
    'kode' => 'BG009',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Lainnya'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'SRI WAHYUNI',
    'sub_klasifikasi_layanan' => 'Konstruksi Jaringan Irigasi dan Drainase',
    'kode' => 'BS004',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-07-21',
    'masa_berlaku' => '2026-07-20',
    'nama_psjk' => 'RISQI PUTRA AGUS NUR ALIF',
    'sub_kualifikasi_bu' => 'Konstruksi Jaringan Irigasi dan Drainase'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Prasarana Sumber Daya Air',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Landasan Pacu Pesawat Terbang',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 8, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Jembatan Dan Jalan Layang',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// ---- DATA 9 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 9, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'CV. DHA YASA MULIA',
    'alamat' => 'DUKUH KALISANGKU, Desa/Kelurahan Gempolrejo, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '81326704319',
    'email' => 'dhayasamulia@yahoo.co.id',
    'nib' => '9120008500283',
    'pju' => 'MOHAMAD YASIM EFENDI',
    'no_akte' => '93',
    'tanggal' => '2023-03-09',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.Kn.',
    'no_pengesahan' => 'AHU-0012312-AH.01.16'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 9, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD YASIM EFENDI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'BG005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2024-05-03',
    'masa_berlaku' => '2026-05-02',
    'nama_psjk' => 'ISHLAH YUDHA AHMAD NUYA EFENDI',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Kesehatan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 9, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD YASIM EFENDI',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-03-02',
    'masa_berlaku' => '2026-03-01',
    'nama_psjk' => 'DJUMAIN',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 9, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOHAMAD YASIM EFENDI',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jalan',
    'kode' => 'BS001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'ASPEKNAS KONSTRUKSI MANDIRI (ASPEKNAS)',
    'tanggal_terbit' => '2023-05-31',
    'masa_berlaku' => '2026-05-30',
    'nama_psjk' => 'AHMAD JUARI',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Jalan'
]);

// ---- DATA 10 BUJK KONTRAKTOR -----------------
bujkkontraktor::create([
    'bujkkontraktorsub_id' => 10, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1, // Ganti dengan ID yang sesuai
    'namalengkap' => 'RASI SINAR RAYA',
    'alamat' => 'DK. KALISANGKU, Desa/Kelurahan Gempolrejo, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '085218340935',
    'email' => 'rasinaraya@yahoo.com',
    'nib' => '9120202322819',
    'pju' => 'WIJI LESTIYOWATI',
    'no_akte' => null,
    'tanggal' => '2018-06-06',
    'nama_notaris' => 'ELIZABETH ESTININGSIH, S.H.',
    'no_pengesahan' => '72/CV/2018/PN.BLA'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'WIJI LESTIYOWATI ',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Pendidikan',
    'kode' => 'BG006',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'EKO SETYO NUGROHO',
    'sub_kualifikasi_bu' => 'Konstruksi Gedung Pendidikan'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'WIJI LESTIYOWATI ',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih',
    'kode' => 'BS005',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'LSBU GAPEKNAS INFRASTRUKTUR (GAPEKNAS)',
    'tanggal_terbit' => '2023-05-08',
    'masa_berlaku' => '2026-05-07',
    'nama_psjk' => 'EDI AGUS SETIAWAN, ST',
    'sub_kualifikasi_bu' => 'Konstruksi Bangunan Sipil Pengolahan Air Bersih'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Perkantoran',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Gedung Kesehatan',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

bujkkontraktorsub ::create([
    'bujkkontraktor_id' => 10, // Ganti dengan ID yang sesuai
    'nama_pengurus' => '-',
    'sub_klasifikasi_layanan' => 'Konstruksi Bangunan Sipil Jembatan, Jalan Layang, Fly Over, dan Underpass',
    'kode' => 'Persyaratan Belum Lengkap (OSS)',
    'kualifikasi' => '-',
    'penerbit' => '-',
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => '-',
    'sub_kualifikasi_bu' => '-'
]);

// bujkkontraktorsub ::create([
//     'bujkkontraktor_id' => 6, // Ganti dengan ID yang sesuai
//     'nama_pengurus' => '-',
//     'sub_klasifikasi_layanan' => 'Konstruksi Gedung Hunian',
//     'kode' => 'Persyaratan Belum Lengkap (OSS)',
//     'kualifikasi' => '-',
//     'penerbit' => '-',
//     'tanggal_terbit' => null,
//     'masa_berlaku' => null,
//     'nama_psjk' => '-',
//     'sub_kualifikasi_bu' => '-'
// ]);


// DATA BUJK KONSULTAN MAS JAKI APLIKASI
//======================== ===================================================================================
bujkkonsultan::create([
    'bujkkonsultansub_id' => 1, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 1,
    'namalengkap' => 'Tiara Energi',
    'alamat' => 'Desa Gersi, Desa/Kelurahan Gersi, Kec. Jepon, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '081325657254',
    'email' => 'tiarasinergi@gmail.com ',
    'nib' => '9120312062216',
    'pju' => 'MOCHAMAD ARIANTO',
    'no_akte' => '03',
    'tanggal' => '2024-06-10',
    'nama_notaris' => 'Selamet Mulyono M.Kn.',
    'no_pengesahan' => 'AHU-0030674-AH.01.16 Tahun 2022'
]);
//

bujkkonsultansub ::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'MOCHAMAD ARIANTO',
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' => ' RK001',
    'kualifikasi' => 'Kecil',
    'penerbit' => 'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2024-12-23',
    'masa_berlaku' => '2026-12-22',
    'nama_psjk' => 'SITI JUMROK ATUN MUALIMAH, ST',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Aktivitas Arsitektur',
    'kode' => null,
    'kualifikasi' => 'Belum Memenuhi Syarat',
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Aktivitas Keinsinyuran dan Konsultasi Teknis YBDI',
    'kode' => null,
    'kualifikasi' => 'Belum Memenuhi Syarat',
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 1, // Ganti dengan ID yang sesuai
    'nama_pengurus' => null, // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Aktivitas Desain Interior',
    'kode' => null,
    'kualifikasi' => 'Belum Memenuhi Syarat',
    'penerbit' => null,
    'tanggal_terbit' => null,
    'masa_berlaku' => null,
    'nama_psjk' => null,
    'sub_kualifikasi_bu' => null
]);

//======================== ===================================================================================
// DATA 2 BUJK KONSULTAN
bujkkonsultan::create([
    'bujkkonsultansub_id' => 2, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 5,
    'namalengkap' => 'KARYA INTI KONSULTAN',
    'alamat' => 'DUKUH SENDANG KLAMPOK, Desa/Kelurahan Tempurejo, Kec. Blora, Kab. Blora, Provinsi Jawa Tengah ',
    'no_telepon' => '082133220199',
    'email' => 'karyaintikonsultan@gmail.com',
    'nib' => '2101230013886',
    'pju' => 'AHMAD FAHRUDIN',
    'no_akte' => '55',
    'tanggal' => '2021-01-11',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.KN.',
    'no_pengesahan' => 'AHU-0004201-AH.01.14'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'AHMAD FAHRUDIN', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  'RK001',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-05-16',
    'masa_berlaku' => '2026-05-15',
    'nama_psjk' => 'BAGUS SETIYO BUDI, S.T',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 2, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'AHMAD FAHRUDIN', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
    'kode' =>  'RK003',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-04-05',
    'masa_berlaku' => '2026-04-04',
    'nama_psjk' => 'BAGUS SETIYO BUDI, S.T',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi'
]);


//======================== ===================================================================================
// DATA 3 BUJK KONSULTAN
bujkkonsultan::create([
    'bujkkonsultansub_id' => 3, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 4,
    'namalengkap' => 'BEGAWAN ABIYOSO',
    'alamat' => ' DUKUH WUNI, Desa/Kelurahan Balong, Kec. Jepon, Kab. Blora, Provinsi Jawa Tengah ',
    'no_telepon' => '085292559491',
    'email' => 'begawanabiyoso2023@gmail.com ',
    'nib' => '220001632033',
    'pju' => 'TEJO',
    'no_akte' => '72',
    'tanggal' => '2020-06-15',
    'nama_notaris' => 'YANI DWI RAHAYU S.H., M.KN.',
    'no_pengesahan' => 'AHU-0019129-AH.01.16'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 3, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEJO, S.T., M.M. ', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
    'kode' =>  'RK003',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-05-22',
    'masa_berlaku' => '2026-05-21',
    'nama_psjk' => 'FERONIKA MIVONIA, ST',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi'
]);



//======================== ===================================================================================
// DATA 4 BUJK KONSULTAN
bujkkonsultan::create([
    'bujkkonsultansub_id' => 4, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 2,
    'namalengkap' => 'GRAHACIPTA PERKASA',
    'alamat' => ' Ds. Tambahrejo, Desa/Kelurahan Tambahrejo, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah',
    'no_telepon' => '081327421757',
    'email' => 'grahaciptaperkasa@yahoo.co.id',
    'nib' => '9120404852668',
    'pju' => 'TEGUH PRIYANTO',
    'no_akte' => '152',
    'tanggal' => '2010-10-23',
    'nama_notaris' => 'ELIZABETH ESTININGSIH, S.H.',
    'no_pengesahan' => '14 / CV / 2011 / PN.Bla'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEGUH PRIYANTO, ST.,MT', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  'RK001',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-10-07',
    'masa_berlaku' => '2025-10-06',
    'nama_psjk' => 'SULTON ERBOWO, ST ',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEGUH PRIYANTO, ST.,MT', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
    'kode' =>  'RK002',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-06-14',
    'masa_berlaku' => '2026-06-13',
    'nama_psjk' => 'EDDY SAPTONO, ST ',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 4, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'TEGUH PRIYANTO, ST.,MT', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi',
    'kode' =>  'RK003',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-07-10',
    'masa_berlaku' => NULL,
    'nama_psjk' => 'YOGA ALDI DWI LAKSONO',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Transportasi'
]);


//======================== ===================================================================================
// DATA 5 BUJK KONSULTAN
bujkkonsultan::create([
    'bujkkonsultansub_id' => 5, // Ganti dengan ID yang sesuai
    'asosiasimasjaki_id' => 3,
    'namalengkap' => 'BEKONS',
    'alamat' => 'Dukuh Bengir, Desa/Kelurahan Keser, Kec. Tunjungan, Kab. Blora, Provinsi Jawa Tengah ',
    'no_telepon' => '085326420963',
    'email' => 'gapuro_ireng@yahoo.com ',
    'nib' => '220004621089',
    'pju' => 'UTOMO, SARJANA',
    'no_akte' => '34',
    'tanggal' => '2016-03-16',
    'nama_notaris' => 'BAMBANG HARIJANTO, SH., M.KN',
    'no_pengesahan' => 'AHU-0028069-AH.01.15 Tahun 2020'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'UTOMO, ST', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  'AR001',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2023-08-09',
    'masa_berlaku' => '2026-08-08',
    'nama_psjk' => 'AGNIE SWASTIKA NINGRUM, S.Ars',
    'sub_kualifikasi_bu' => 'Jasa Arsitektural Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'UTOMO, ST', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian',
    'kode' =>  ' RK001 ',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-11-16',
    'masa_berlaku' => '2025-11-17',
    'nama_psjk' => 'SETYO NIHANTORO, S.T. ',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Konstruksi Bangunan Gedung Hunian dan Non Hunian'
]);

bujkkonsultansub::create([
    'bujkkonsultan_id' => 5, // Ganti dengan ID yang sesuai
    'nama_pengurus' => 'UTOMO, ST', // Kosong tapi tetap ada
    'sub_klasifikasi_layanan' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air',
    'kode' =>  'RK002',
    'kualifikasi' => 'Kecil',
    'penerbit' =>  'Lembaga Sertiﬁkasi INKINDO',
    'tanggal_terbit' => '2022-11-18',
    'masa_berlaku' => '2025-11-17',
    'nama_psjk' => 'LARTO KUNDARTO, ST',
    'sub_kualifikasi_bu' => 'Jasa Rekayasa Pekerjaan Teknik Sipil Sumber Daya Air'
]);




//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA
profiljenispekerjaan::create([
    'id' => '1',
    'jenispekerjaan' => 'Checkdam',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '2',
    'jenispekerjaan' => 'Belanja Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '3',
    'jenispekerjaan' => 'Drainase',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '4',
    'jenispekerjaan' => 'Embung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '5',
    'jenispekerjaan' => 'Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '6',
    'jenispekerjaan' => 'Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '7',
    'jenispekerjaan' => 'Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '8',
    'jenispekerjaan' => 'Jembatan   ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '9',
    'jenispekerjaan' => 'Pasar',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '10',
    'jenispekerjaan' => 'Ruang Terbuka Hijau',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '11',
    'jenispekerjaan' => 'SPAM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '12',
    'jenispekerjaan' => 'Bangunan Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '13',
    'jenispekerjaan' => 'Belanja Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '14',
    'jenispekerjaan' => 'Fasilitas Umum',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '15',
    'jenispekerjaan' => 'Pipanisasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '16',
    'jenispekerjaan' => 'Sumur',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

profiljenispekerjaan::create([
    'id' => '17',
    'jenispekerjaan' => 'Talud',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA
sumberdana::create([
    'id' => '1',
    'sumberdana' => 'APBN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sumberdana::create([
    'id' => '2',
    'sumberdana' => 'APBD',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

// fort


//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA
namasekolah::create([
    'id' => '1',
    'namasekolah' => 'Akademi Teknologi Ronggolawe',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '2',
    'namasekolah' => 'Institut Teknologi Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '3',
    'namasekolah' => 'Khozinatul Ulum Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '4',
    'namasekolah' => 'MA Al-Falah Tanakan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '5',
    'namasekolah' => 'MA Khozinatul Ulum',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '6',
    'namasekolah' => 'MA Padangan Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '7',
    'namasekolah' => 'MAN Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '8',
    'namasekolah' => 'PKBM Ngudi Luhur Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '9',
    'namasekolah' => 'Politeknik Negeri Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '10',
    'namasekolah' => 'SMK Ma`arif Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '11',
    'namasekolah' => 'Sekolah Teknologi Ronggolawe Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '12',
    'namasekolah' => 'SKB Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '13',
    'namasekolah' => 'SMA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '14',
    'namasekolah' => 'SMA 1 Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '15',
    'namasekolah' => 'SMA Muhammadiyah 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '16',
    'namasekolah' => 'SMA Muhammadiyah Prambanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '17',
    'namasekolah' => 'SMA Negeri 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '18',
    'namasekolah' => 'SMA Negeri 1 Jepon',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '19',
    'namasekolah' => 'SMA Negeri 2 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '20',
    'namasekolah' => 'SMA Negeri 1 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '21',
    'namasekolah' => 'SMA Negeri 1 Randublatung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '22',
    'namasekolah' => 'SMA Negeri 2 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '23',
    'namasekolah' => 'SMA Negeri 1 Kasiman Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '24',
    'namasekolah' => 'SMA PGRI 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '25',
    'namasekolah' => 'SMA PGRI Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '26',
    'namasekolah' => 'SMEA Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '27',
    'namasekolah' => 'SMK Katolik Santo Plus Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '28',
    'namasekolah' => 'SMK Khozinatul Ulum Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '29',
    'namasekolah' => 'SMK Kristen Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '30',
    'namasekolah' => 'SMK Migas Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '31',
    'namasekolah' => 'SMK Muhammadiyah 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '32',
    'namasekolah' => 'SMK Muhammadiyah Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '33',
    'namasekolah' => 'SMK Muhammadiyah Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '34',
    'namasekolah' => 'SMK Negeri 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '35',
    'namasekolah' => 'SMK Negeri 1 Kunduran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '36',
    'namasekolah' => 'SMK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '37',
    'namasekolah' => 'SMK Negeri 1 Pekalongan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '38',
    'namasekolah' => 'SMK Negeri Ngraho',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '39',
    'namasekolah' => 'STM Migas Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '40',
    'namasekolah' => 'STM Negeri 1 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '41',
    'namasekolah' => 'STM Negeri 1 Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '42',
    'namasekolah' => 'STM Pemda Tingkat II Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '43',
    'namasekolah' => 'STMIK El-Rahma',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '44',
    'namasekolah' => 'STTR Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '45',
    'namasekolah' => 'Universitas An Nuur Purwodadi ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '46',
    'namasekolah' => 'Universitas Dipenogoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '47',
    'namasekolah' => 'Universitas Islam Sultan Agung Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


namasekolah::create([
    'id' => '48',
    'namasekolah' => 'Universitas Muhammadiyah Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '49',
    'namasekolah' => 'Universitas Negeri Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '50',
    'namasekolah' => 'Universitas Negeri Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '51',
    'namasekolah' => 'Universitas Pembangunan Nasional',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '52',
    'namasekolah' => 'Universitas Sam Ratulangi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '53',
    'namasekolah' => 'Universitas Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '54',
    'namasekolah' => 'Universitas Terbuka',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '55',
    'namasekolah' => 'Yayasan Yohanes Gabrel',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '56',
    'namasekolah' => 'Sekolah Tinggi Teknologi Nasional Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '57',
    'namasekolah' => 'Institut Adhi Thama Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '58',
    'namasekolah' => 'Institut Keguruan Dan Ilmu Pendidikan Veteran Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '59',
    'namasekolah' => 'Institut Sains Dan Teknologi Akprind Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '60',
    'namasekolah' => 'Institut Teknologi Nasional Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '61',
    'namasekolah' => 'Institut Teknologi PLN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '62',
    'namasekolah' => 'Institut Teknologi Sepuluh Nopember Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '63',
    'namasekolah' => 'Institut Teknologi Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '64',
    'namasekolah' => 'Institut Teknologi Pembangunan Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '65',
    'namasekolah' => 'Katholik Santo Yosef Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '66',
    'namasekolah' => 'MA Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '67',
    'namasekolah' => 'MA Al-Hidayah',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '68',
    'namasekolah' => 'MA As Syakur Banjarejo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '69',
    'namasekolah' => 'Universitas Gadjah Mada',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '70',
    'namasekolah' => 'Non Pendidikan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '71',
    'namasekolah' => 'Paket C',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '72',
    'namasekolah' => 'PGRI 5 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '73',
    'namasekolah' => 'Politeknik Negeri Bandung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '75',
    'namasekolah' => 'SD Negeri Karangboyo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '76',
    'namasekolah' => 'SMK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '77',
    'namasekolah' => 'Sekolah Teknologi Menengah Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '78',
    'namasekolah' => 'Sekolah Teknologi Negeri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '79',
    'namasekolah' => 'STAI Al-Muhammad Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '80',
    'namasekolah' => 'STAI Muhammadiyah Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '81',
    'namasekolah' => 'Sekolah Tinggi Arsitektur YKPN Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '82',
    'namasekolah' => 'Sekolah Tinggi Teknik Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '83',
    'namasekolah' => 'Sekolah Tinggi Teknik Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '84',
    'namasekolah' => 'Sekolah Vokasi ITS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '85',
    'namasekolah' => 'SMA Negeri 9 Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '86',
    'namasekolah' => 'SMA Darul Ulum 6 Baureno',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '87',
    'namasekolah' => 'SMA Islam Sultan Agung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '88',
    'namasekolah' => 'SMA MAD Negeri Lasem',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '89',
    'namasekolah' => 'SMA Miftahul Ulum Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '90',
    'namasekolah' => 'SMA Muhamadiyah Kabupaten Sleman',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '91',
    'namasekolah' => 'SMA Muhamadiyah 5 Todanan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '92',
    'namasekolah' => 'SMA Negeri 2 Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '93',
    'namasekolah' => 'SMA Negeri 1 Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '94',
    'namasekolah' => 'SMA Negeri 1 Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '95',
    'namasekolah' => 'SMA Negeri 1 Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '96',
    'namasekolah' => 'SMA Negeri 1 Toroh',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '97',
    'namasekolah' => 'SMA Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '98',
    'namasekolah' => 'SMA Negeri Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '99',
    'namasekolah' => 'SMA Negeri Padangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '100',
    'namasekolah' => 'SMA PEMDA Wirosari Grobogan ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '101',
    'namasekolah' => 'SMEA Negeri Cepu ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '102',
    'namasekolah' => 'SMEA Negeri Blora ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '103',
    'namasekolah' => 'SMK Al Alif Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '104',
    'namasekolah' => 'SMK Al-Ghazali Jiken',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '105',
    'namasekolah' => 'SMK Al-Hikmah Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '106',
    'namasekolah' => 'SMK Bhakti Husada PGRI Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '107',
    'namasekolah' => 'SMK Katholik Santo Pius Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '108',
    'namasekolah' => 'SMK Muhammadiyah 2 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '109',
    'namasekolah' => 'SMK Negeri 1 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '110',
    'namasekolah' => 'SMA Negeri 1 Kunduran ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '111',
    'namasekolah' => 'SMA Negeri 1 Surabaya ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '112',
    'namasekolah' => 'SMK Negeri 2 Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '113',
    'namasekolah' => 'SMK Negeri 2 Bojonegoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '114',
    'namasekolah' => 'SMK Negeri 2 Purwodadi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '115',
    'namasekolah' => 'SMK Negeri Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '117',
    'namasekolah' => 'SMK NU Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '118',
    'namasekolah' => 'SMK Pesantren Sabili Muttaqien Randublatung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '119',
    'namasekolah' => 'SMK Sultan Agung Ngawen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '120',
    'namasekolah' => 'SMK Muhammadiyah 1 Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '121',
    'namasekolah' => 'SMK Pancasila',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '122',
    'namasekolah' => 'SMP Negeri 1 Menden',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '123',
    'namasekolah' => 'SMP Negeri 2 Kedungtuban',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '124',
    'namasekolah' => 'SMA Negeri 1 Ngraho',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '125',
    'namasekolah' => 'SMA Negeri 1 Tunjungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '126',
    'namasekolah' => 'SMA Negeri 16 Bandung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '127',
    'namasekolah' => 'SMU NU 3 Mallimin Weleri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '128',
    'namasekolah' => 'SMU ST. Louis Randublatung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '130',
    'namasekolah' => 'SMU Katholik Wijayakusuma Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '131',
    'namasekolah' => 'STIE Dharma Putra',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '132',
    'namasekolah' => 'STM Berbau Tuan ST Yosep Cepu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '133',
    'namasekolah' => 'STM Kudus',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '134',
    'namasekolah' => 'STM Negeri Tunjungan Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '135',
    'namasekolah' => 'STM Negeri Blora',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '136',
    'namasekolah' => 'STM Negeri Rembang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '137',
    'namasekolah' => 'STM Magetan 1 YKP',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '138',
    'namasekolah' => 'Universitas Dian Nuswantoro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '139',
    'namasekolah' => 'Universitas 17 Agustus 1945 Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '140',
    'namasekolah' => 'Universitas Atmajaya Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '141',
    'namasekolah' => 'Universitas Brawijaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '142',
    'namasekolah' => 'Universitas Cokroaminoto Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '143',
    'namasekolah' => 'Universitas Darul Ulum Islamic Center Sudirman Guppi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '144',
    'namasekolah' => 'Universitas DR. Soetomo Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '145',
    'namasekolah' => 'Universitas Gresik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '146',
    'namasekolah' => 'Universitas Islam Indonesia Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '147',
    'namasekolah' => 'Universitas Khatolik Soegijapranata',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '148',
    'namasekolah' => 'Universitas Krisnadwipayana',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '149',
    'namasekolah' => 'Universitas Muhammadiyah Malang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '150',
    'namasekolah' => 'Universitas Muhammadiyah Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '151',
    'namasekolah' => 'Universitas Muhammadiyah Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '152',
    'namasekolah' => 'Universitas Meria Kudus',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '153',
    'namasekolah' => 'Universitas Negeri Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '154',
    'namasekolah' => 'Universitas Nusa Cendana',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '155',
    'namasekolah' => 'Universitas Padjadjaran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '156',
    'namasekolah' => 'Universitas Persatuan Guru Republik Indonesia Semarang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '157',
    'namasekolah' => 'Universitas Sebelas Maret Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '158',
    'namasekolah' => 'Universitas Sunan Giri Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '159',
    'namasekolah' => 'Universitas Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '160',
    'namasekolah' => 'Universitas Teknologi Yogyakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '161',
    'namasekolah' => 'Universitas Trisakti',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '162',
    'namasekolah' => 'Universitas Tunas Pembangunan Surakarta',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '163',
    'namasekolah' => 'Universitas Veteran Bangun Nusantara Sukoharjo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '164',
    'namasekolah' => 'Universitas Widya Gama',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

namasekolah::create([
    'id' => '165',
    'namasekolah' => 'Universitas Wijaya Kusuma Surabaya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
// JENJANG PENDIDIKAN MASA JAKI BLORA
jenjangpendidikan::create([
    'id' => '1',
    'jenjangpendidikan' => 'Diploma 3',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '2',
    'jenjangpendidikan' => 'Strata 1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '3',
    'jenjangpendidikan' => 'SMA/MA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '4',
    'jenjangpendidikan' => 'SMK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '5',
    'jenjangpendidikan' => 'Diploma 1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '6',
    'jenjangpendidikan' => 'Diploma 2',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '7',
    'jenjangpendidikan' => 'Diploma 4',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '8',
    'jenjangpendidikan' => 'Profesi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '9',
    'jenjangpendidikan' => 'Strata 2 ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '10',
    'jenjangpendidikan' => 'SD/MI/Sederajat',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '11',
    'jenjangpendidikan' => 'STM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '12',
    'jenjangpendidikan' => 'Non Pendidikan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjangpendidikan::create([
    'id' => '13',
    'jenjangpendidikan' => 'SMP/Mts/Sederajat',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
// JURUSAN MASA JAKI BLORA
jurusan::create([
    'id' => '1',
    'jurusan' => 'Akuntansi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '2',
    'jurusan' => 'Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '3',
    'jurusan' => 'Bangunan Air/Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '4',
    'jurusan' => 'Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '5',
    'jurusan' => 'IPA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '6',
    'jurusan' => 'IPS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '7',
    'jurusan' => 'Ekonomi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '8',
    'jurusan' => 'Keperawatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '9',
    'jurusan' => '(PGSD) Pendidikan Guru Sekolah Dasar',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '10',
    'jurusan' => 'Sistem Informasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '11',
    'jurusan' => 'Tata Niaga',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '12',
    'jurusan' => 'Teknik Audio & Video',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '13',
    'jurusan' => 'Teknik Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '14',
    'jurusan' => 'Teknik Elektro',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '15',
    'jurusan' => 'Teknik Geografi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '16',
    'jurusan' => 'Teknik Industri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '17',
    'jurusan' => 'Teknik Lingkungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '18',
    'jurusan' => 'Teknik Mesin',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '19',
    'jurusan' => 'Teknik Otomotif',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '20',
    'jurusan' => 'Teknik Perminyakan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '21',
    'jurusan' => 'Teknik Sipil',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '22',
    'jurusan' => 'Teknik Survey dan Pemetaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '23',
    'jurusan' => 'Administrasi Perkantoran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '24',
    'jurusan' => 'Agrobisnis',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '25',
    'jurusan' => 'Teknik Arsitektur',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '26',
    'jurusan' => 'Bahasa',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '27',
    'jurusan' => 'Bisnis dan Manajemen',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '28',
    'jurusan' => 'Desain dan Arsitektur',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '29',
    'jurusan' => 'Geomatika',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '30',
    'jurusan' => 'Hukum',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '31',
    'jurusan' => 'Biologi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '32',
    'jurusan' => 'Kesehatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '33',
    'jurusan' => 'Keuangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '34',
    'jurusan' => 'Konstruksi Batu dan Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '35',
    'jurusan' => 'Konstruksi Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '36',
    'jurusan' => 'Konstruksi Sipil',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '37',
    'jurusan' => 'Listrik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '38',
    'jurusan' => 'Magister Ilmu Lingkungan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '39',
    'jurusan' => 'Magister Teknik Sipil',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '40',
    'jurusan' => 'Teknik Mekanik Otomotif',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '41',
    'jurusan' => 'Multimedia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '42',
    'jurusan' => 'Pendidikan Agama Islam',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '43',
    'jurusan' => 'Pendidikan Guru Taman Kanak-kanak',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '44',
    'jurusan' => 'Pendidikan Teknik Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '45',
    'jurusan' => 'Pendidikan Teknik Sipil dan Perencanaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '46',
    'jurusan' => 'Perkantoran',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '47',
    'jurusan' => 'Magister Teknik Mesin',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '48',
    'jurusan' => 'Profesi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '49',
    'jurusan' => 'Teknik Geologi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '50',
    'jurusan' => 'Surket Tukang',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '51',
    'jurusan' => 'Teknik Gambar Bangunan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '52',
    'jurusan' => 'Teknik Geodesi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '53',
    'jurusan' => 'Teknik Kendaraan Ringan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '54',
    'jurusan' => 'Teknik Listrik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '55',
    'jurusan' => 'Teknik Kimi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '56',
    'jurusan' => 'Teknik Komputer dan Jaringan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '57',
    'jurusan' => 'Teknik Konstruksi Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '58',
    'jurusan' => 'Teknik Konstruksi Kayu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '59',
    'jurusan' => 'Teknik Perawatan dan Perbaikan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '60',
    'jurusan' => 'Teknik Perencanaan Wilayah dan Kota',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jurusan::create([
    'id' => '61',
    'jurusan' => 'Teknik Perawatan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);



//======================== ===================================================================================
// JABATAN KERJA JAKI BLORA
jabatankerja::create([
    'id' => '1',
    'jabatankerja' => 'Pelaksana Konstruksi Bangunan Unit Distribusi SPAM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '2',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Bangunan Air Limbah Permukiman (setempat dan terpusat)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '3',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Drainase Perkotaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '4',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '5',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '6',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Pipa Leachate (Lindi) dan Pipa Gas/Ventilasi Di TPA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '7',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Saluran Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '8',
    'jabatankerja' => 'Pelaksana Lapangan Perkerasan Jalan Beton Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '9',
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '10',
    'jabatankerja' => 'Ahli Geodesi Dan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '11',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '12',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Teknik Mekanikal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '13',
    'jabatankerja' => 'Ahli Madya Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '14',
    'jabatankerja' => 'Ahli Madya Geoteknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '15',
    'jabatankerja' => 'Ahli Madya K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '16',
    'jabatankerja' => 'Ahli Madya Perencana Struktur Jalan Rel',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '17',
    'jabatankerja' => 'Ahli Madya Survei Terestris',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '18',
    'jabatankerja' => 'Ahli Madya Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '19',
    'jabatankerja' => 'Ahli Madya Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '20',
    'jabatankerja' => 'Ahli Madya Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '21',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '22',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '23',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '24',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Mekanikal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '25',
    'jabatankerja' => 'Ahli Muda Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '26',
    'jabatankerja' => 'Ahli Muda Elektrikal Konstruksi Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '27',
    'jabatankerja' => 'Ahli Muda Geoteknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '28',
    'jabatankerja' => 'Ahli Muda K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '29',
    'jabatankerja' => 'Ahli Muda Pemeliharaan Jalan Dan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '30',
    'jabatankerja' => 'Ahli Muda Pengukuran Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '31',
    'jabatankerja' => 'Ahli Muda Perawatan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '32',
    'jabatankerja' => 'Ahli Muda Perencana Beton Pracetak Untuk Struktur Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '33',
    'jabatankerja' => 'Ahli Muda Perencana Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '34',
    'jabatankerja' => 'Ahli Muda Quantity Surveyor',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '35',
    'jabatankerja' => 'Ahli Muda Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '36',
    'jabatankerja' => 'Ahli Muda Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '37',
    'jabatankerja' => 'Ahli Muda Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '38',
    'jabatankerja' => 'Ahli Pelaksana Teknik Plambing',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '39',
    'jabatankerja' => 'Ahli Teknik Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '40',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Manajemen Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '41',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '42',
    'jabatankerja' => 'Ahli Utama Bidang Keahlian Teknik Sumber Daya Air',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '43',
    'jabatankerja' => 'Ahli Utama K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '44',
    'jabatankerja' => 'Ahli Utama Teknik Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '45',
    'jabatankerja' => 'Ahli Utama Teknik Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '46',
    'jabatankerja' => 'Juru Gambar Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '47',
    'jabatankerja' => 'Juru Gambar Pekerjaan Jalan dan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '48',
    'jabatankerja' => 'Juru Ukur (Surveyor)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '49',
    'jabatankerja' => 'Kepala Pengelola Lingkungan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '50',
    'jabatankerja' => 'Manajer Lapangan Pelaksanaan Pekerjaan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '51',
    'jabatankerja' => 'Manajer Pelaksana Konstruksi Sistem Produksi Air Minum (SPAM)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '52',
    'jabatankerja' => 'Manajer Pelaksanaan Pekerjaan Jalan/ Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '53',
    'jabatankerja' => 'Manajer pengelolaan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '54',
    'jabatankerja' => 'Manajer Produksi Campuran Aspal Panas (Asphalt Mixing Plant Manager)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '55',
    'jabatankerja' => 'Operator Scaffolding',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '56',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Gedung Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '57',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Jalan Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '58',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Jembatan Rangka Baja Standar Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '59',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Pemasangan Jembatan Rangka Baja Standar Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '60',
    'jabatankerja' => 'Pelaksana Lapangan Pekerjaan Saluran Irigasi Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '61',
    'jabatankerja' => 'Pelaksana Pekerjaan Pemeliharaan Jaringan Irigasi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '62',
    'jabatankerja' => 'Pelaksana Pekerjaan Pemeliharaan Sungai Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '63',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jalan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '64',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '65',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '66',
    'jabatankerja' => 'Pelaksana Pemeliharaan Jembatan Muda',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '67',
    'jabatankerja' => 'Pemasang Perancah Dan Acuan/Cetakan Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '68',
    'jabatankerja' => 'Pengawas Lapangan Pekerjaan Drainase Perkotaan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '69',
    'jabatankerja' => 'Pengawas Pekerjaan Struktur Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '70',
    'jabatankerja' => 'Pengawas Pekerjaan Struktur Bangunan Gedung Madya',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '71',
    'jabatankerja' => 'Petugas Keselamatan dan Kesehatan Kerja (K3) Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '72',
    'jabatankerja' => 'Petugas Keselamatan Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '73',
    'jabatankerja' => 'Supervisor K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '74',
    'jabatankerja' => 'Teknisi Laboratorium Beton Aspal',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '75',
    'jabatankerja' => 'Teknisi Scaffolding',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '76',
    'jabatankerja' => 'Tukang Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '77',
    'jabatankerja' => 'Tukang Besi Beton',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '78',
    'jabatankerja' => 'Tukang Kayu',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '79',
    'jabatankerja' => 'Tukang Pasang Rangka Atap Baja Ringan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jabatankerja::create([
    'id' => '80',
    'jabatankerja' => 'Tukang Plester Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
// DATA ASOSIAS KABUPATEN BLORA JAWA TENGAH
asosiasimasjaki::create([
    'id' => '1',
    'namaasosiasi' => 'AK3L',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '2',
    'namaasosiasi' => 'ASDAMKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '3',
    'namaasosiasi' => 'ASTEKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '4',
    'namaasosiasi' => 'ASTTATINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '5',
    'namaasosiasi' => 'ATAKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '6',
    'namaasosiasi' => 'ATAKNAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '7',
    'namaasosiasi' => 'ATAKSI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '8',
    'namaasosiasi' => 'GATAKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '9',
    'namaasosiasi' => 'GATENSI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '10',
    'namaasosiasi' => 'HATSINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '11',
    'namaasosiasi' => 'HPJI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '12',
    'namaasosiasi' => 'IAKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '13',
    'namaasosiasi' => 'LPJK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '14',
    'namaasosiasi' => 'PAKKI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '15',
    'namaasosiasi' => 'PARABI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '16',
    'namaasosiasi' => 'PASTALI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '17',
    'namaasosiasi' => 'PASTI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '18',
    'namaasosiasi' => 'PERPAKOM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '19',
    'namaasosiasi' => 'PERTAHKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '20',
    'namaasosiasi' => 'PERTAMA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '21',
    'namaasosiasi' => 'PERTAPIN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '22',
    'namaasosiasi' => 'PETAKINDO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

asosiasimasjaki::create([
    'id' => '23',
    'namaasosiasi' => 'PETAKOM',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
// JENJANG PEKERJAAN MAS JAKI BLORA
jenjang::create([
    'id' => '1',
    'jenjang' => '1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '2',
    'jenjang' => '2',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '3',
    'jenjang' => '3',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '4',
    'jenjang' => '4',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '5',
    'jenjang' => '5',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '6',
    'jenjang' => '6',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '7',
    'jenjang' => '7',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '8',
    'jenjang' => '8',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

jenjang::create([
    'id' => '9',
    'jenjang' => '9',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
// LPS PENERBIT MAS JAKI BLORA

lpspenerbit::create([
    'id' => '1',
    'lpspenerbit' => 'Lembaga Sertifikasi Profesi Ataknas Profesional Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '2',
    'lpspenerbit' => 'Bina Konstruksi Nusantara',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '3',
    'lpspenerbit' => 'Infrastruktur Jalan dan Jembatan Indonesia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '4',
    'lpspenerbit' => 'LSP ASTEKINDO Konstruksi Mandiri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '5',
    'lpspenerbit' => 'LSP Gataki Konstruksi Mandiri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '6',
    'lpspenerbit' => 'LSP GATENSI Karya Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '7',
    'lpspenerbit' => 'LSP HATSINDO Indoensia Teknik',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '8',
    'lpspenerbit' => 'LSP K3 Konstruksi',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '9',
    'lpspenerbit' => 'LSP Keselamatan Kesehatan Kerja',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '10',
    'lpspenerbit' => 'LSP Petakindo Konstruksi Mandiri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '11',
    'lpspenerbit' => 'LSP Sertifikasi Konstruksi Teknik IAKI (LSP SAKTI)',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '12',
    'lpspenerbit' => 'LSP Sumber Daya Manusia Konstruksi Indonesia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '13',
    'lpspenerbit' => 'PT LSP PERTAHKINDO Konstruksi Nasional',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '14',
    'lpspenerbit' => 'PT. ATAKI Konstruksi Indonesia',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

lpspenerbit::create([
    'id' => '15',
    'lpspenerbit' => 'PT.Sertifikasi Profesi Konstruksi Asttatindo',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//

//======================== ===================================================================================
// DAFTAR TENAGA KERJA MAS JAKI BLORA

skktenagakerjabloralist::create([
    'nama' => 'SUGIYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 66,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 77,
    'jenjang_id' => 1,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-07',
    'statusterbit' => 'TERBIT',
]);
skktenagakerjabloralist::create([
    'nama' => 'KSDFGFDSG', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 66,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 77,
    'jenjang_id' => 1,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-07',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'HDSFHG', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 66,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 77,
    'jenjang_id' => 1,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-07',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'HDSFHG', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 66,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 3,
    'jenjang_id' => 1,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-07',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'ANAS FARIDZ ZAMZAMY', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 5,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 76,
    'jenjang_id' => 2,
    'asosiasimasjaki_id' => 13,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-28',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'MOH. MUHTAR', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 86,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => null,
    'jabatankerja_id' => 67,
    'jenjang_id' => 3,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-12-07',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'BAHARUDDIN YUSUF HABIBI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 50,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 1,
    'tahunlulus' => 2010,
    'jabatankerja_id' => 1,
    'jenjang_id' => 4,
    'asosiasimasjaki_id' => 1,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => null,
    'tanggalhabis' => null,
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'PATONI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 11,
    'jurusan_id' => 2,
    'tahunlulus' => null,
    'jabatankerja_id' => 57,
    'jenjang_id' => 5,
    'asosiasimasjaki_id' => 6,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2023-10-08',
    'tanggalhabis' => '2028-07-24',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'AGUS FAUZAN', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 47,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => null,
    'jabatankerja_id' => 50,
    'jenjang_id' => 6,
    'asosiasimasjaki_id' => 6,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2028-04-18',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'LAILA NURAINI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 11,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => null,
    'jabatankerja_id' => 35,
    'jenjang_id' => 7,
    'asosiasimasjaki_id' => 3,
    'lpspenerbit_id' => 2,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2028-01-12',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'MUHAMMAD KHAFID SAHRONI', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 159,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => null,
    'jabatankerja_id' => 19,
    'jenjang_id' => 8,
    'asosiasimasjaki_id' => 2,
    'lpspenerbit_id' => 4,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2028-07-05',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjabloralist::create([
    'nama' => 'HARYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'Kab. Blora',
    'namasekolah_id' => 62,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 52,
    'tahunlulus' => null,
    'jabatankerja_id' => 10,
    'jenjang_id' => 9,
    'asosiasimasjaki_id' => 3,
    'lpspenerbit_id' => 4,
    'tanggalterbit' => '2023-08-10',
    'tanggalhabis' => '2027-05-19',
    'statusterbit' => 'TERBIT',
]);


//======================== ===================================================================================
// PROFIL PAKET PEKERJAAN MAS JAKI

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 1,
    'profiljenispekerjaan_id' => 1,
    'namapekerjaan' => 'Rehabilitasi Checkdam Talokwohmojo Kec Ngawen Lanjutan',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV Restu Bumi Mustika',
    'nib' => '1105240037134',
    'nilaikontrak' =>  691260716.59,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'Desember',
    'dinas' => 'Dinas Pekerjaan Umum dan Penataan Ruang',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 2,
    'profiljenispekerjaan_id' => 2,
    'namapekerjaan' => 'BELANJA MODAL BANGUNAN KESEHATAN-BELANJA MODAL PAGAR',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. REZEKY MUJI KONSTRUKSI',
    'nib' => '3011220047491',
    'nilaikontrak' =>   857589920.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Oktober',
    'bulanselesai' => 'Desember',
    'dinas' => 'Dinas Kesehatan',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 3,
    'profiljenispekerjaan_id' => 3,
    'namapekerjaan' => 'Pembangunan Saluran Pengendali Banjir Kecamatan Cepu Lanjutan',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. KINAN KARYA GEMILANG',
    'nib' => '0260010050988',
    'nilaikontrak' =>    763241000.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Juli',
    'bulanselesai' => 'Desember',
    'dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 4,
    'profiljenispekerjaan_id' => 3,
    'namapekerjaan' => 'Pembangunan Saluran Pengendali Banjir Ruas Jalan Sonokidul Kecamatan Kunduran',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV Restu Bumi Mustika',
    'nib' => '1105240037134',
    'nilaikontrak' =>     451076000.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'Desember',
    'dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 5,
    'profiljenispekerjaan_id' => 3,
    'namapekerjaan' => 'PEMBANGUNAN SARANA DAN PRASARANA DRAINASE LINGKUNGAN PERMUKIMAN KUMUH DRAINASE LINGKUNGAN RT 2 RW 9 KELURAHAN CEPU KECAMATAN CEPU KAB. BLORA',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV.KEMBAR DUA',
    'nib' => '0246000912019',
    'nilaikontrak' => 161453878.91,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'November',
    'dinas' => 'DINAS PERUMAHAN PEMUKIMAN DAN PERHUBUNGAN',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 6,
    'profiljenispekerjaan_id' => 3,
    'namapekerjaan' => 'Pembangunan Saluran Pengendali Banjir Kel. Kunduran Kec. Kunduran Lanjutan',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. WIRATAMA GEMILANG',
    'nib' => 'N/A',
    'nilaikontrak' =>  421000000.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'Desember',
    'dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 7,
    'profiljenispekerjaan_id' => 4,
    'namapekerjaan' => 'Rehabilitasi Embung Kelurahan Kunduran Kec Kunduran Lanjutan',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. RAFI JAYA BERKARYA',
    'nib' => '9120311032313',
    'nilaikontrak' =>   675691000.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Juli',
    'bulanselesai' => 'Desember',
    'dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 8,
    'profiljenispekerjaan_id' => 4,
    'namapekerjaan' => 'Pembangunan Embung Pangkat Purwosari Kecamatan Blora KAB. BLORA',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. VARIA USAHA MANDIRI',
    'nib' => '9120303900127',
    'nilaikontrak' => 598000000.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'Desember',
    'dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',
]);


profilpaketpekerjaanblora::create([
    'prosespaket_id' => 9,
    'profiljenispekerjaan_id' => 4,
    'namapekerjaan' => 'Pembangunan Embung Nglebok Kecamatan Cepu Lanjutan',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. Putro Sembodo',
    'nib' => '0210010040157',
    'nilaikontrak' =>  1372970000.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Juli',
    'bulanselesai' => 'Desember',
    'dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',
]);

profilpaketpekerjaanblora::create([
    'prosespaket_id' => 10,
    'profiljenispekerjaan_id' => 4,
    'namapekerjaan' => 'Pembangunan Embung Desa Gedangdowo Kecamatan Jepon KAB. BLORA',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. CITROSUMO',
    'nib' => '0220006292358',
    'nilaikontrak' => 598300000.00,
    'sumberdana_id' => 1,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'Desember',
    'dinas' => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG',
]);


//======================== ===================================================================================
// PAKET PEKERJAAN NON TENDER MAS JAKI BLORA

profilpaketpekerjaannontender::create([
    'prosespaketnontender_id' => 1,
    'profiljenispekerjaan_id' => 5,
    'namapekerjaan' => 'Fisik Pemeliharaan Gedung Kantor Kelurahan Bangkle',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV MANDRA KANTA UNGGUL',
    'nib' => '0208220001109',
    'nilaikontrak' =>  45338671.95,
    'sumberdana_id' => 2,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'Oktober',
    'dinas' => 'KECAMATAN BLORA',
]);

profilpaketpekerjaannontender::create([
    'prosespaketnontender_id' => 2,
    'profiljenispekerjaan_id' => 12,
    'namapekerjaan' => 'Pengadaan Instalasi Air Bersih Puskesmas Doplang',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'TRUBUS UTOMO',
    'nib' => '9120209960021',
    'nilaikontrak' =>   99822122.43,
    'sumberdana_id' => 2,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'April',
    'bulanselesai' => 'Agustus',
    'dinas' => 'DINAS KESEHATAN',
]);

profilpaketpekerjaannontender::create([
    'prosespaketnontender_id' => 3,
    'profiljenispekerjaan_id' => 12,
    'namapekerjaan' => 'Pembangunan IPAL RPH-Unggas',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. GRIYA LARAS',
    'nib' => '0220001392418',
    'nilaikontrak' =>  151874000.00,
    'sumberdana_id' => 2,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Maret',
    'bulanselesai' => 'Mei',
    'dinas' => 'DINAS PANGAN, PERTANIAN, PETERNAKAN, DAN PERIKANAN',
]);

profilpaketpekerjaannontender::create([
    'prosespaketnontender_id' => 4,
    'profiljenispekerjaan_id' => 12,
    'namapekerjaan' => 'NORMALISASI AREA TAMPUNGAN BENDUNG',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV.BASKORO BERKAH JAYA',
    'nib' => '0220001392418',
    'nilaikontrak' =>  99424000.00,
    'sumberdana_id' => 2,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Agustus',
    'bulanselesai' => 'Oktober',
    'dinas' => 'DINAS PANGAN, PERTANIAN, PETERNAKAN, DAN PERIKANAN',
]);

profilpaketpekerjaannontender::create([
    'prosespaketnontender_id' => 5,
    'profiljenispekerjaan_id' => 13,
    'namapekerjaan' => 'Belanja Modal Jalan Lingkungan (Fisik Pavingisasi RT 05 RW 03 Kelurahan Jepon)',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV WARU BENGKONG',
    'nib' => '2805230004372',
    'nilaikontrak' =>  190310299.19,
    'sumberdana_id' => 2,
    'jeniskontrak' => 'Harga Satuan',
    'karakteristikkontrak' => 'Tahun Tunggal',
    'bulanmulai' => 'Juni',
    'bulanselesai' => 'Desember',
    'dinas' => 'KECAMATAN JEPON',
]);


//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA

satuanhargamaterial::create([
    'uraian' => 'Agregat Pokok',
    'satuan' => 'M3',
    'besaran' => '322200',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Agregat Pengunci',
    'satuan' => 'M3',
    'besaran' => '322200',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Agregat Penutup',
    'satuan' => 'Kg',
    'besaran' => '239',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Angkur M16 panjang 50 cm',
    'satuan' => 'Buah',
    'besaran' => '28600',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Asbes gelombang',
    'satuan' => 'Lembar',
    'besaran' => '112200',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Baja L 40.40.4',
    'satuan' => 'Kg',
    'besaran' => '18000',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Banner plastik 0,6 x 0,8 m2',
    'satuan' => 'M2',
    'besaran' => '133900',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Batu kerikil uk. 2-3 cm, 4-5 cm dan 5-7 cm',
    'satuan' => 'M3',
    'besaran' => '329200',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Bentonite',
    'satuan' => 'Kg',
    'besaran' => '3960',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Besi strip',
    'satuan' => 'Kg',
    'besaran' => '17600',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Cuka Bibit',
    'satuan' => 'Liter',
    'besaran' => '26800',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Dinding triplek 4mm',
    'satuan' => 'Lembar',
    'besaran' => '70.700,00',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Dolken kayu φ 8- 10/400 cm',
    'satuan' => 'M1',
    'besaran' => '14600',
    'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

// garis

//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA

// profilpaketkonsultasi::create([
//     'prosespaketkonsultasi_id' => 1,
//     'jenispekerjaan' => 'Pekerjaan Pembangunan Pasar Tradisional',
//     'namapekerjaan' => 'Pembangunan Pasar Tradisional Blora',
//     'tahunpelaksanaan' => 2025,
//     'cvptpenyedia' => 'PT. Pasar Makmur',
//     'nib' => '8899001122',
//     'nilaikontrak' => 800000000.00,
//     'sumberdana' => 'APBD',
//     'jeniskontrak' => 'Kontrak Pembangunan',
//     'karakteristikkontrak' => 'Pembangunan Pasar Tradisional Modern',
//     'bulanmulai' => '2025-03-01',
//     'bulanselesai' => '2025-09-30',
//     'dinas' => 'Dinas Perdagangan Blora',
// ]);

//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA


// profilpaketkonsultasinontender::create([
//     'prosespaketkonsultasinontender_id' => 1,
//     'jenispekerjaan' => 'Pekerjaan Studi Medis',
//     'namapekerjaan' => 'Kajian Pengadaan Alat Medis Puskesmas',
//     'tahunpelaksanaan' => 2026,
//     'cvptpenyedia' => 'PT. Medika Konsultan',
//     'nib' => '5566778899',
//     'nilaikontrak' => 120000000.00,
//     'sumberdana' => 'DAK',
//     'jeniskontrak' => 'Kontrak Konsultasi',
//     'karakteristikkontrak' => 'Analisis Kebutuhan dan Spesifikasi Alat Medis',
//     'bulanmulai' => '2026-01-01',
//     'bulanselesai' => '2026-06-30',
//     'dinas' => 'Dinas Kesehatan Blora',
// ]);


// =========================================================
// PROSES PAKET PEKERJAAN TENDER
prosespaket::create([
    'profilpaketpekerjaanblora_id' => 1, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 2, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 3, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 4, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 5, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 6, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 7, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 8, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 9, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

prosespaket::create([
    'profilpaketpekerjaanblora_id' => 10, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

// ================================================

prosespaketnontender::create([
    'profilpaketpekerjaannontender_id' => 1, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);
prosespaketnontender::create([
    'profilpaketpekerjaannontender_id' => 2, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);
prosespaketnontender::create([
    'profilpaketpekerjaannontender_id' => 3, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);
prosespaketnontender::create([
    'profilpaketpekerjaannontender_id' => 4, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);
prosespaketnontender::create([
    'profilpaketpekerjaannontender_id' => 5, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'SELESAI',
    'pemeliharaan' => 'SELESAI',
    'paketselesai' => 'SELESAI',
]);

//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA
// kecelakaankerjamasjaki::create([
//     'namapaketpekerjaan' => 'PAKET PEKERJAAN KONSTRUKSI PEMBANGUNAN BENDUNGAN RANDUGUNTING',
//     'tahun' => '2022',
//     'namaperusahaan' => 'WIJAYA KARYA 2022',
//     'namatenagakerja' => 'MISLANI',
//     'lokasikecelakaan' => 'AREA PEKERJAAN BENDUNGAN RANDUGUNTING',
//     'waktukecelakaan' => '2024-08-12',
//     'keterangan' => 'PEKERJA',
//     'nilaikerugian' => ' Rp825.031 ',
// ]);

kecelakaankerjamasjaki::create([
    'namapaketpekerjaan' => 'PAKET PEKERJAAN KONSTRUKSI PEMBANGUNAN BENDUNGAN RANDUGUNTING',
    'tahun' => 2022,  // Menggunakan angka tahun, bukan string
    'namaperusahaan' => 'WIJAYA KARYA 2022',
    'namatenagakerja' => 'MISLANI',
    'lokasikecelakaan' => 'AREA PEKERJAAN BENDUNGAN RANDUGUNTING',
    'waktukecelakaan' => '2024-08-12',  // Format datetime lengkap
    'keterangan' => 'PEKERJA',
    'nilaikerugian' => 825031.00,  // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecelakaankerjamasjaki::create([
    'namapaketpekerjaan' => 'PAKET PEKERJAAN KONSTRUKSI PEMBANGUNAN BENDUNGAN RANDUGUNTING',
    'tahun' => 2022,  // Menggunakan angka tahun, bukan string
    'namaperusahaan' => 'WIJAYA KARYA 2022',
    'namatenagakerja' => 'EKO WILO ANDRIANTO',
    'lokasikecelakaan' => 'AREA PEKERJAAN BENDUNGAN RANDUGUNTING',
    'waktukecelakaan' => '2024-08-12',  // Format datetime lengkap
    'keterangan' => 'PEKERJA',
    'nilaikerugian' => 825031.00,  // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);


//======================== ===================================================================================
// PENYEDIA STATUS TERTIB JAKON MAS JAKI BLORA
penyediastatustertibjakon::create([
    'id' => '1',
    'penyedia' => 'PU',
]);

penyediastatustertibjakon::create([
    'id' => '2',
    'penyedia' => 'NON-PU',
]);

penyediastatustertibjakon::create([
    'id' => '3',
    'penyedia' => 'SWASTA',
]);

//======================== ===================================================================================
// TERTIB JAKON BIDAN USAHA MAS JAKI BLORA
tertibjasakonstruksi::create([
    'penyediastatustertibjakon_id' => '1',
    'nib' => '0208220001109',
    'namabadanusaha' => 'CV MANDRA KANTA UNGGUL',
    'pjbu' => 'Muhammad Abdul Rozak',
    'sesuai_jenis' => 'TERTIB',
    'sesuai_sifat' => 'TERTIB',
    'sesuai_klasifikasi' => 'TERTIB',
    'sesuai_layanan' => 'TERTIB',
    'segmentasipasar_bentuk' => 'TERTIB',
    'segmentasipasar_kualifikasi' => 'TERTIB',
    'syarat_SBU' => 'TERTIB',
    'syarat_NIB' => 'TERTIB',
    'pelaksanaanpengembangan' => 'TERTIB',      // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjasakonstruksi::create([
    'penyediastatustertibjakon_id' => '2',
    'nib' => '0911220321514',
    'namabadanusaha' => 'CV. ADITIYA JAYA PERKASA',
    'pjbu' => 'Agus Supriadi',
    'sesuai_jenis' => 'TERTIB',
    'sesuai_sifat' => 'TERTIB',
    'sesuai_klasifikasi' => 'TERTIB',
    'sesuai_layanan' => 'TERTIB',
    'segmentasipasar_bentuk' => 'TERTIB',
    'segmentasipasar_kualifikasi' => 'TERTIB',
    'syarat_SBU' => 'TERTIB',
    'syarat_NIB' => 'TERTIB',
    'pelaksanaanpengembangan' => 'TERTIB',      // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjasakonstruksi::create([
    'penyediastatustertibjakon_id' => '3',
    'nib' => '1261000381957',
    'namabadanusaha' => 'CV. ADHI KARYA MANDIRI',
    'pjbu' => 'Santoso',
    'sesuai_jenis' => 'TERTIB',
    'sesuai_sifat' => 'TERTIB',
    'sesuai_klasifikasi' => 'TERTIB',
    'sesuai_layanan' => 'TERTIB',
    'segmentasipasar_bentuk' => 'TERTIB',
    'segmentasipasar_kualifikasi' => 'TERTIB',
    'syarat_SBU' => 'TERTIB',
    'syarat_NIB' => 'TERTIB',
    'pelaksanaanpengembangan' => 'TERTIB',      // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// TERTIB JAKON PEMANFAATAN MAS JAKI

tertibjakonpemanfaatan::create([
    'penyediastatustertibjakon_id' => '1',
    'namabangunan' => 'Kawasan Taman Budaya Cepu',
    'nomorkontrak' => '640/BG.080/2023',
    'lokasi' => 'Kec. Cepu Kab. Blora',
    'tanggalpembangunan' => '2023-07-06',
    'tanggalpemanfaatan' => '2023-11-02',
    'umurkonstruksi' => '5',
    'peruntukan_fungsi' => 'TERTIB',
    'peruntukan_lokasi' => 'TERTIB',
    'rencanaumur' => 'TERTIB',
    'kapasitasdanbeban' => 'BELUM TERTIB',
    'pemeliharaan_konstruksi' => 'BELUM TERTIB',
    'pemeliharaan_struktur' => 'BELUM TERTIB',
          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpemanfaatan::create([
    'penyediastatustertibjakon_id' => '2',
    'namabangunan' => 'RSUD Randublatung Type D Blora',
    'nomorkontrak' => '050/03.1/RS.RAN/2020',
    'lokasi' => 'Gang Kabayan RT 06 RW 01',
    'tanggalpembangunan' => '2020-06-06',
    'tanggalpemanfaatan' => '2020-12-20',
    'umurkonstruksi' => '5',
    'peruntukan_fungsi' => 'TERTIB',
    'peruntukan_lokasi' => 'TERTIB',
    'rencanaumur' => 'TERTIB',
    'kapasitasdanbeban' => 'BELUM TERTIB',
    'pemeliharaan_konstruksi' => 'BELUM TERTIB',
    'pemeliharaan_struktur' => 'BELUM TERTIB',
          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpemanfaatan::create([
    'penyediastatustertibjakon_id' => '3',
    'namabangunan' => 'KANTOR PT POS PROPERTI INDONESIA',
    'nomorkontrak' => '-',
    'lokasi' => 'Jl. Ronggolawe No. 37',
    'tanggalpembangunan' => '2024-01-25',
    'tanggalpemanfaatan' => '2024-06-25',
    'umurkonstruksi' => '5',
    'peruntukan_fungsi' => 'TERTIB',
    'peruntukan_lokasi' => 'TERTIB',
    'rencanaumur' => 'TERTIB',
    'kapasitasdanbeban' => 'BELUM TERTIB',
    'pemeliharaan_konstruksi' => 'BELUM TERTIB',
    'pemeliharaan_struktur' => 'BELUM TERTIB',
          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

// DATA TERTIB JASA KONSTRUKSI PENYELENGGARAAN MAS JAKI BLORA
// ================================================================================================
tertibjakonpenyelenggaraan::create([
    'penyediastatustertibjakon_id' => '1',
    'kegiatankonstruksi' => 'Peningkatan Jalan Adirejo - Sembungin - Karangtalun',
    'nomorkontrak' => '620/BM.827/2024',
    'bujk' => 'CV. TRIBHAKTI',
    'prosespemilihan' => 'TERTIB',
    'pengawasan_standarkontrak' => 'TERTIB',
    'pengawasan_tenagakerja' => 'TERTIB',
    'pengawasan_penunjang' => 'TERTIB',
    'pengawasan_dokumenk4' => 'TERTIB',
    'pengawasan_smkk' => 'TERTIB',
    'pengawasan_kecelakaankerja' => 'TERTIB',

          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpenyelenggaraan::create([
    'penyediastatustertibjakon_id' => '2',
    'kegiatankonstruksi' => 'Rehabilitasi Ruang Kelas SMPN 2 BLORA',
    'nomorkontrak' => '12894257/SPK/02.0014/DAU/2024',
    'bujk' => 'CV. ANUGERAH ABADI',
    'prosespemilihan' => 'TERTIB',
    'pengawasan_standarkontrak' => 'TERTIB',
    'pengawasan_tenagakerja' => 'TERTIB',
    'pengawasan_penunjang' => 'TERTIB',
    'pengawasan_dokumenk4' => 'TERTIB',
    'pengawasan_smkk' => 'TERTIB',
    'pengawasan_kecelakaankerja' => 'TERTIB',

          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

tertibjakonpenyelenggaraan::create([
    'penyediastatustertibjakon_id' => '3',
    'kegiatankonstruksi' => 'KANTOR PT POS PROPERTI INDONESIA',
    'nomorkontrak' => '-',
    'bujk' => 'CV.CRYSTAL DESIGN',
    'prosespemilihan' => 'BELUM TERTIB',
    'pengawasan_standarkontrak' => 'BELUM TERTIB',
    'pengawasan_tenagakerja' => 'BELUM TERTIB',
    'pengawasan_penunjang' => 'BELUM TERTIB',
    'pengawasan_dokumenk4' => 'TERTIB',
    'pengawasan_smkk' => 'BELUM',
    'pengawasan_kecelakaankerja' => 'BELUM TERTIB',

          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);


// DATA RANTAI PASOK MATERIL BANGUNAN MAS JAKI
rantaipasokblora::create([
    'distributor' => 'PT. VARIA USAHA UNIT BLORA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'SEMEN',
    'submaterialproduk' => 'PCC',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Semen Indonesia',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. VARIA USAHA UNIT BLORA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'SEMEN',
    'submaterialproduk' => 'PCC',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Semen Indonesia',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. SEMEN HOLCIM',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'SEMEN',
    'submaterialproduk' => 'OPC',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Holcim',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. TIGA PUTRA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'PASIR',
    'submaterialproduk' => 'PASIR SUNGAI',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. ANUGERAH MAKMUR',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BATU SPLIT',
    'submaterialproduk' => '5-10 MM',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. BAJA MAJU SEJAHTERA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BAJA',
    'submaterialproduk' => 'WF',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Gunung Garuda',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. SUKSES ABADI',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BATU BATA',
    'submaterialproduk' => 'MERAH',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. JAYA BETON',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BETON READY MIX',
    'submaterialproduk' => 'K-225',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'SCG',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. KERAMIK MEGAH JAYA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'KERAMIK',
    'submaterialproduk' => '60x60 cm',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Roman',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. CAT WARNA INDAH',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'CAT',
    'submaterialproduk' => 'EKSTERIOR',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Dulux',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. RANGKAI BESI',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BESI BETON',
    'submaterialproduk' => 'D 10',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Krakatau Steel',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. RANGKAI BESI',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'BESI BETON',
    'submaterialproduk' => 'D 10',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'Krakatau Steel',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'PT. TEKNIK ATAP SEJAHTERA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'ATAP',
    'submaterialproduk' => 'SPANDREL',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'merkproduk' => 'BjLS',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'CV. PINTU KARYA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'PINTU',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'submaterialproduk' => 'KAYU JATI',
    'merkproduk' => 'Lokal',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

rantaipasokblora::create([
    'distributor' => 'UD. KACA MULIA',
    'nib' => '-',
    'alamat' => '-',
    'notelepon' => '-',
    'materialproduk' => 'KACA',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'submaterialproduk' => 'TEMPERED',
    'merkproduk' => 'Asahimas',       // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// PERALATAN KONSTRUKSI MAS JAKI BLORA
peralatankonstruksi::create([
    'kecamatanblora_id' => '14',
    'alatberat_id' => '1',
    'namabadanusaha' => 'CV. Anugrah Jaya Makmur',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'nib' => '4765753435',
    'notelepon' => '081321455855',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '2',
    'alatberat_id' => '2',
    'namabadanusaha' => 'PT. Djawa Murni Kontraktor',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

peralatankonstruksi::create([
    'kecamatanblora_id' => '3',
    'alatberat_id' => '3',
    'namabadanusaha' => 'PT. Lintas Konstruksi Abadi',
    'nib' => '4353466346',
    'foto' => 'tokobangunan/tokobangunanblora.jpg',
    'notelepon' => '089345435435',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA
    alatberat::create([
    'peralatankonstruksi_id' => '1',
    'alatberat' => '',
    'jumlahalatberat' => '7',           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal           // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Excavator',
        'jumlahalatberat' => 7,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Bulldozer',
        'jumlahalatberat' => 4,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Crane',
        'jumlahalatberat' => 3,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '1',
        'alatberat' => 'Dump Truck',
        'jumlahalatberat' => 10,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '2',
        'alatberat' => 'Motor Grader',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '2',
        'alatberat' => 'Vibro Roller',
        'jumlahalatberat' => 5,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '2',
        'alatberat' => 'Concrete Pump',
        'jumlahalatberat' => 3,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Tower Crane',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '4',
        'alatberat' => 'Hydraulic Breaker',
        'jumlahalatberat' => 1,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Asphalt Paver',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Skid Steer Loader',
        'jumlahalatberat' => 3,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Wheel Loader',
        'jumlahalatberat' => 2,
    ]);

    alatberat::create([
        'peralatankonstruksi_id' => '3',
        'alatberat' => 'Backhoe Loader',
        'jumlahalatberat' => 4,
    ]);

    //======================== ===================================================================================
    // PENGAWASAN BUJK MAS JAKI BLORA
    tokobangunanblora::create([
        'kecamatanblora_id' => '1',
        'namatokobangunan' => 'Toko Bangunan Sumber Jaya',
        'pemilik' => 'Budi Santoso',
        'alamat' => 'Jl. Pemuda No. 10, Blora',
        'notelepon' => '081234567890',
        'email' => 'sumberjaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menyediakan bahan bangunan lengkap dengan layanan antar',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '1',
        'namatokobangunan' => 'Toko Bangunan Makmur',
        'pemilik' => 'Siti Rohmah',
        'alamat' => 'Jl. Raya Randublatung No. 25, Blora',
        'notelepon' => '082112345678',
        'email' => 'tokomakmur@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Melayani pembelian dalam jumlah besar dan kecil',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '2',
        'namatokobangunan' => 'Toko Bangunan Sejahtera',
        'pemilik' => 'Agus Wijaya',
        'alamat' => 'Jl. Blora Cepu KM 7, Blora',
        'notelepon' => '085678901234',
        'email' => 'sejahtera_bangunan@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Tersedia berbagai jenis kayu dan material finishing',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '2',
        'namatokobangunan' => 'Toko Bangunan Maju Jaya',
        'pemilik' => 'Hendro Prasetyo',
        'alamat' => 'Jl. Ronggolawe No. 45, Blora',
        'notelepon' => '087876543210',
        'email' => 'tokomajujaya@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menyediakan bahan material konstruksi berat',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '3',
        'namatokobangunan' => 'Toko Bangunan Sentosa',
        'pemilik' => 'Rina Kartika',
        'alamat' => 'Jl. Veteran No. 15, Blora',
        'notelepon' => '081356789012',
        'email' => 'tokosentosa@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Diskon spesial untuk pembelian partai besar',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '3',
        'namatokobangunan' => 'Toko Bangunan Jaya Abadi',
        'pemilik' => 'Slamet Riyadi',
        'alamat' => 'Jl. Sukarno Hatta No. 11, Blora',
        'notelepon' => '081245678901',
        'email' => 'jayaabadi@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Melayani pembelian eceran dan grosir',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '4',
        'namatokobangunan' => 'Toko Bangunan Cipta Karya',
        'pemilik' => 'Teguh Prasetyo',
        'alamat' => 'Jl. Gajah Mada No. 22, Blora',
        'notelepon' => '081356789013',
        'email' => 'ciptakarya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/contohtokobangunan.jpg',
        'keterangan' => 'Spesialis dalam material finishing rumah',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '4',
        'namatokobangunan' => 'Toko Bangunan Mitra Sejati',
        'pemilik' => 'Rudi Hartanto',
        'alamat' => 'Jl. Pemuda No. 77, Blora',
        'notelepon' => '082312345678',
        'email' => 'mitrasejati@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/contohtokobangunan.jpg',
        'keterangan' => 'Menyediakan layanan konsultasi bahan bangunan',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '5',
        'namatokobangunan' => 'Toko Bangunan Bina Karya',
        'pemilik' => 'Hadi Susanto',
        'alamat' => 'Jl. Kartini No. 5, Blora',
        'notelepon' => '083112345678',
        'email' => 'binakarya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Diskon untuk kontraktor dan proyek besar',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '5',
        'namatokobangunan' => 'Toko Bangunan Sukses Mandiri',
        'pemilik' => 'Dian Setiawan',
        'alamat' => 'Jl. Raden Patah No. 33, Blora',
        'notelepon' => '085267890123',
        'email' => 'suksesmandiri@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menyediakan bahan interior dan eksterior',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '6',
        'namatokobangunan' => 'Toko Bangunan Mulia Jaya',
        'pemilik' => 'Eka Putra',
        'alamat' => 'Jl. Sultan Agung No. 19, Blora',
        'notelepon' => '081278901234',
        'email' => 'muliajaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Pusat bahan konstruksi interior dan eksterior',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '6',
        'namatokobangunan' => 'Toko Bangunan Sejahtera Baru',
        'pemilik' => 'Sri Hartini',
        'alamat' => 'Jl. Diponegoro No. 55, Blora',
        'notelepon' => '081345678912',
        'email' => 'sejahterabaru@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menjual berbagai jenis paving berkualitas',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '7',
        'namatokobangunan' => 'Toko Bangunan Lancar Jaya',
        'pemilik' => 'Sutrisno',
        'alamat' => 'Jl. Jendral Sudirman No. 88, Blora',
        'notelepon' => '085678912345',
        'email' => 'lancarjaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Bahan material dasar bangunan tersedia lengkap',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '7',
        'namatokobangunan' => 'Toko Bangunan Berkah Mulia',
        'pemilik' => 'Siti Aminah',
        'alamat' => 'Jl. KH. Ahmad Dahlan No. 17, Blora',
        'notelepon' => '082345678901',
        'email' => 'berkahmulia@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menjual produk berkualitas dengan harga terjangkau',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '8',
        'namatokobangunan' => 'Toko Bangunan Mandiri Jaya',
        'pemilik' => 'Teguh Santoso',
        'alamat' => 'Jl. Kyai Mojo No. 42, Blora',
        'notelepon' => '083456789012',
        'email' => 'mandirijaya@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Banyak pilihan motif keramik dan granit tersedia',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '8',
        'namatokobangunan' => 'Toko Bangunan Citra Abadi',
        'pemilik' => 'Rina Sari',
        'alamat' => 'Jl. Pattimura No. 60, Blora',
        'notelepon' => '081289012345',
        'email' => 'citraabadi@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Spesialis bahan bangunan interior rumah',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '9',
        'namatokobangunan' => 'Toko Bangunan Putra Bangsa',
        'pemilik' => 'Andi Wijaya',
        'alamat' => 'Jl. Wahid Hasyim No. 14, Blora',
        'notelepon' => '081567890123',
        'email' => 'putrabangsa@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Menjual berbagai perlengkapan finishing rumah',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '9',
        'namatokobangunan' => 'Toko Bangunan Karya Sejati',
        'pemilik' => 'Bambang Setiawan',
        'alamat' => 'Jl. Ahmad Yani No. 32, Blora',
        'notelepon' => '081678901234',
        'email' => 'karyasejati@email.com',
        'jenisprodukbangunan' => 'KHUSUS',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Harga grosir dan eceran tersedia',
    ]);

    tokobangunanblora::create([
        'kecamatanblora_id' => '10',
        'namatokobangunan' => 'Toko Bangunan Gemilang',
        'pemilik' => 'Yuni Rahmawati',
        'alamat' => 'Jl. Letjen Suprapto No. 99, Blora',
        'notelepon' => '081789012345',
        'email' => 'tokogemilang@email.com',
        'jenisprodukbangunan' => 'UMUM',
        'fototokobangunan' => 'tokobangunan/tokobangunanblora.jpg',
        'keterangan' => 'Melayani pengiriman ke seluruh wilayah Blora',
    ]);




    //======================== ===================================================================================
    // PENGAWASAN BUJK MAS JAKI BLORA
    shstblora::create([
        'kabupaten' => 'Blora',
        'bangunankantortidaksederhana' => '6080000',
        'bangunankantorsederhana' => '5050000',
        'rumahnegaratipea' => '5940000',
        'rumahnegaratipeb' => '5370000',
        'rumahnegaratipecde' => '4630000',
        'pagarrumahdepan' => '2730000',
        'pagarrumahbelakang' => '2090000',
        'pagarrumahsamping' => '1440000',
        'pagarrumahnegaradepan' => '2310000',
        'pagarrumahnegarabelakang' => '2030000',
        'pagarrumahnegarasamping' => '1380000',
    ]);


//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA
kecamatanblora::create([
    'id' => '1',
    'kecamatanblora' => 'BANJAREJO 58253',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '2',
    'kecamatanblora' => 'BLORA (BLORA KOTA) 58211 - 58219',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '3',
    'kecamatanblora' => 'BOGOREJO 58262',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '4',
    'kecamatanblora' => 'CEPU 58311',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '5',
    'kecamatanblora' => 'JAPAH 58257',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '6',
    'kecamatanblora' => 'JATI 58384',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '7',
    'kecamatanblora' => 'JEPON 58261',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '8',
    'kecamatanblora' => 'JIKEN 58372',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '9',
    'kecamatanblora' => 'KEDUNGTUBAN 58381',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '10',
    'kecamatanblora' => 'KRADENAN 58383',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '11',
    'kecamatanblora' => 'KUNDURAN 58255',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '12',
    'kecamatanblora' => 'NGAWEN 58254',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '13',
    'kecamatanblora' => 'RANDUBLATUNG 58382',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '14',
    'kecamatanblora' => 'SAMBONG 58371',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '15',
    'kecamatanblora' => 'TODANAN 58256',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

kecamatanblora::create([
    'id' => '16',
    'kecamatanblora' => 'TUNJUNGAN 58252',          // Menghilangkan 'Rp' dan menyimpan sebagai angka decimal
]);

//======================== ===================================================================================
// PENGAWASAN BUJK MAS JAKI BLORA

pengawasanbujk::create([
      'kodeproyek' => '202011-0312-2806-8464-555',
            'namaperusahaan' => 'AGUSTINUS SETYAWAN',
            'alamatperusahaan' => 'JL MR ISKANDAR 70',
            'statusmodal' => 'Penanaman Modal Dalam Negeri (PMDN)',
            'jenisperusahaan' => 'Perorangan',
            'nib' => '9120001950836',
            'kbli' => '23953(KBLI 2017)',
            'uraiankbli' => 'INDUSTRI BARANG DARI SEMEN DAN KAPUR UNTUK KONSTRUKSI',
            'sektor' => ' Perindustrian',
            'alamatproyek' => 'Jl. Kamolan ',
            'wilayah' => 'Kab. Blora',
            'luastanah' => 1300.25,  // Menggunakan tipe data decimal
            'tki_lakilaki' => 2,    // Jumlah TKI laki-laki
            'tki_perempuan' => 33,   // Jumlah TKI perempuan
            'tka_lakilaki' => 0,    // Jumlah TKA laki-laki
            'tka_perempuan' => 0,    // Jumlah TKA perempuan
            'resiko' => 'Tinggi',
            'sumberdata' => 'OSS Migrasi1.1',
            'investasi' => 50000000.00,  // Nilai investasi
            'skalausahaperusahaan' => 'Kecil',
            'skalausahaproyek' => 'Menengah',
            'kewenangankoordinator' => 'DPMPTSP Kab. Blora',
            'kewenanganpengawas' => 'OPD Pengawas Kab. Blora (Sektor Perindustrian)',
            'PSN' => 'Tidak',

]);

//======================== ===================================================================================
// SKK TENAGA KERJA MAS JAKI BLORA
skktenagakerjablora::create([
    'nama' => 'AFILIA NANDA DWI NOVIANTI', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk.sendang klampok rt.01 rw.09 tempurejo blora',
    'namasekolah_id' => 53,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => '2023',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2029-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'AHMAD FAHRUDIN', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk.sendang klampok rt.01 rw.09 tempurejo blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 13,
    'tahunlulus' => '2010',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'ALFINO WILIAM PUTRA', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 10 RW 2 DUKUH SORONINI DESA SONOKULON KECAMATAN TODANAN KABUPATEN BLORA',
    'namasekolah_id' => 33,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 19,
    'tahunlulus' => '2019',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2029-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'ANDI SUSANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'JL. CAMAR II NO. 2 RT 009 RW 005 KEL. KARANGJATI KEC. BLORA KAB. BLORA',
    'namasekolah_id' => 44,
    'jenjangpendidikan_id' => 2,
    'jurusan_id' => 21,
    'tahunlulus' => '2015',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'BAGUS SUTRISNO', // Ganti dengan ID yang sesuai
    'alamat' => 'RT01/06 Dk.Krabyakan Ds.Temurejo Kec.Blora Kab.Blora Provinsi Jawa Tengah',
    'namasekolah_id' => 24,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 5,
    'tahunlulus' => '1994',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'BANU SULISTIYONO', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk. Ketangar RT 002 RW 001 Karangjati Blora',
    'namasekolah_id' => 17,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 5,
    'tahunlulus' => '1990',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2029-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'EKO ZAINUL ARIFIN', // Ganti dengan ID yang sesuai
    'alamat' => 'Gang Swadaya Rt 01/Rw 11 Balun cepu',
    'namasekolah_id' => 30,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 14,
    'tahunlulus' => '2004',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'HERU PUJIYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'JL. BERINGIN TIMUR RT 008 RW 003 KEL. MLANGSEN KEC. BLORA KAB. BLORA',
    'namasekolah_id' => 31,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 18,
    'tahunlulus' => '2002',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'ILHAM KRISTUAJI', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 002/RW 001 Dk. Ketangar Kel. Karangjati Kec. Blora Kab. Blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 18,
    'tahunlulus' => '2019',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'IRIYANTO', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 003 RW 004 Jl. Jenderal Sudirman No. 177 Kel. Bangkle Kec. Blora Kab. Blora',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 3,
    'tahunlulus' => '1982',
    'jabatankerja_id' => 4,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'AGUS KURNIAWAN', // Ganti dengan ID yang sesuai
    'alamat' => 'Dk. Pesantren Rt.01/04 Ds. Sembongin Banjarejo Blora',
    'namasekolah_id' => 5,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 5,
    'tahunlulus' => '2009',
    'jabatankerja_id' => 5,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-11',
    'tanggalhabis' => '2029-03-10',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'PUJI SUBIANTORO', // Ganti dengan ID yang sesuai
    'alamat' => 'DS. TAMBAKSARI RT 001 RW 001 DESA TAMBAKSARI BLORA',
    'namasekolah_id' => 22,
    'jenjangpendidikan_id' => 3,
    'jurusan_id' => 6,
    'tahunlulus' => '2008',
    'jabatankerja_id' => 7,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-30',
    'tanggalhabis' => '2029-03-29',
    'statusterbit' => 'TERBIT',
]);

skktenagakerjablora::create([
    'nama' => 'REYHAN WIDYA PERMANA', // Ganti dengan ID yang sesuai
    'alamat' => 'RT 5 RW 3 Dukuh karangnongkp Desa Buluroto Kec. banjarejo Kabupaten Blora Provinsi Jawa Tengah',
    'namasekolah_id' => 34,
    'jenjangpendidikan_id' => 4,
    'jurusan_id' => 22,
    'tahunlulus' => '2015',
    'jabatankerja_id' => 3,
    'jenjang_id' => 4,
    'lpspenerbit_id' => 1,
    'tanggalterbit' => '2024-03-16',
    'tanggalhabis' => '2029-03-15',
    'statusterbit' => 'TERBIT',
]);

//======================== ===================================================================================
//======================== ===================================================================================
//======================== ===================================================================================
standarbiayaumum::create([
    'judul' => 'Permen PUPR Nomor 08 Tahun 2023',
    'peraturan' => 'standarbiayaumum/Permen_PUPR_Nomor_8_Tahun_2023.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

standarbiayaumum::create([
    'judul' => 'Permen PUPR Nomor 14 Tahun 2020',
    'peraturan' => 'standarbiayaumum/Permen_PUPR_Nomor_14_Tahun_2020.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);
//======================== ===================================================================================

//======================== ===================================================================================
sbulampiran1::create([
    'judul' => '0_COVER_LAMPIRAN_I_PL',
    'peraturan' => 'standarbiayaumum/lampiran1/0_COVER_LAMPIRAN_I_PL.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'A_SDP_Pengadaan_Langsung_JKK_Perorangan',
    'peraturan' => 'standarbiayaumum/lampiran1/A_SDP_Pengadaan_Langsung_JKK_Perorangan.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'B_SDP_Pengadaan_Langsung_JKK_BUJK',
    'peraturan' => 'standarbiayaumum/lampiran1/B_SDP_Pengadaan_Langsung_JKK_BUJK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'C_SDP_Pengadaan_Langsung_PK_Perorangan',
    'peraturan' => 'standarbiayaumum/lampiran1/C_SDP_Pengadaan_Langsung_PK_Perorangan.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran1::create([
    'judul' => 'D_SDP_Pengadaan_Langsung_PK_BUJK',
    'peraturan' => 'standarbiayaumum/lampiran1/D_SDP_Pengadaan_Langsung_PK_BUJK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
sbulampiran2::create([
    'judul' => '0_COVER_LAMPIRAN_II_JK',
    'peraturan' => 'standarbiayaumum/lampiran2/0_COVER_LAMPIRAN_II_JK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'A_Dok_Kualifikasi',
    'peraturan' => 'standarbiayaumum/lampiran2/A_Dok_Kualifikasi.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'B_Seleksi_Kualitas_Biaya_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/B_Seleksi_Kualitas_Biaya_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'C_Seleksi_BU_Kualitas_Biaya_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/C_Seleksi_BU_Kualitas_Biaya_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'D_Seleksi_BU_Kualitas_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/D_Seleksi_BU_Kualitas_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'E_Seleksi_BU_Kualitas_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/E_Seleksi_BU_Kualitas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'F_Seleksi_BU_Pagu_Anggaran_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/F_Seleksi_BU_Pagu_Anggaran_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'G_Seleksi_BU_Pagu_Anggaran_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/G_Seleksi_BU_Pagu_Anggaran_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'H_Seleksi_BU_Biaya_Terendah_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/H_Seleksi_BU_Biaya_Terendah_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'I_Seleksi_BU_Biaya_Terendah_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/I_Seleksi_BU_Biaya_Terendah_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'J_Seleksi_TA_Kualitas_WP',
    'peraturan' => 'standarbiayaumum/lampiran2/J_Seleksi_TA_Kualitas_WP.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran2::create([
    'judul' => 'K_Seleksi_TA_Kualitas_LS',
    'peraturan' => 'standarbiayaumum/lampiran2/K_Seleksi_TA_Kualitas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
sbulampiran3::create([
    'judul' => '0_COVER_LAMPIRAN_III_PK',
    'peraturan' => 'standarbiayaumum/lampiran3/0_COVER_LAMPIRAN_III_PK.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'A_SDP_PK_Pasca_Harga_Terendah_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/A_SDP_PK_Pasca_Harga_Terendah_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'B_SDP_PK_Pasca_Harga_Terendah_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/B_SDP_PK_Pasca_Harga_Terendah_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'C_SDP_PK_Pasca_Harga_Terendah_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/C_SDP_PK_Pasca_Harga_Terendah_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'D_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/D_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'E_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/E_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'F_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/F_SDP_PK_Pasca_Harga_Terendah_Ambang_Batas_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'G_SDP_PK_Pasca_Sistem_Nilai_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/G_SDP_PK_Pasca_Sistem_Nilai_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'H_SDP_PK_Pasca_Sistem_Nilai_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/H_SDP_PK_Pasca_Sistem_Nilai_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'I_SDP_PK_Pasca_Sistem_Nilai_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/I_SDP_PK_Pasca_Sistem_Nilai_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'J_SDP_PK_Prakualifikasi',
    'peraturan' => 'standarbiayaumum/lampiran3/J_SDP_PK_Prakualifikasi.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'K_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/K_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'L_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/L_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'M_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/M_SDP_PK_Pra_Sistem_Harga_Terendah_Ambang_Batas_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'N_SDP_PK_Pra_Sistem_Nilai_Gab',
    'peraturan' => 'standarbiayaumum/lampiran3/N_SDP_PK_Pra_Sistem_Nilai_Gab.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'O_SDP_PK_Pra_Sistem_Nilai_LS',
    'peraturan' => 'standarbiayaumum/lampiran3/O_SDP_PK_Pra_Sistem_Nilai_LS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

sbulampiran3::create([
    'judul' => 'P_SDP_PK_Pra_Sistem_Nilai_HS',
    'peraturan' => 'standarbiayaumum/lampiran3/P_SDP_PK_Pra_Sistem_Nilai_HS.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);



//  ================================================================


        peraturan::create([
            'judul' => 'UNDANG- UNDANG JASA KONSTRUKSI',
            'peraturan' => 'peraturan/01_uud/UU_NO_02_TAHUN_2017.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ======================================================
        perpemerintah::create([
            'judul' => 'PERATURAN PEMERINTAH NOMOR 29 TAHUN 2000',
            'peraturan' => 'peraturan/02_pemerintah/PERATURAN_PEMERINTAH_NO_29_TAHUN_2000.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);
        // ======================================================
        perpresiden::create([
            'judul' => 'PERATURAN PRESIDEN NOMOR 12 TAHUN 2021',
            'peraturan' => 'peraturan/03_presiden/PERATURAN_PRESIDEN_NOMOR_12_TAHUN_2021.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ==========================================================================================
// ==========================================================================================

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_A_COVER_LAMPIRAN_I_PL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_A_SDP_PENGADAAN_LANGSUNG_JKK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_B_SDP_PENGADAAN_LANGSUNG_JKK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_C_SDP_PENGADAAN_LANGSUNG_PK_PERORANGAN.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_1_D_SDP_PENGADAAN_LANGSUNG_PK_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_A_COVER_LAMPIRAN_II_JK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_B_DOK_KUALIFIKASI',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_B_DOK_KUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_C_SELEKSI_KUALITAS_BIAYA_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_D_SELEKSI_BU_KUALITAS_BIAYA_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_E_SELEKSI_BU_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_F_SELEKSI_BU_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_G_SELEKSI_BU_PAGU_ANGGARAN_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_H_SELEKSI_BU_PAGU_ANGGARAN_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_I_SELEKSI_BU_BIAYA_TERENDAH_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_J_SELEKSI_BU_BIAYA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_K_SELEKSI_TA_KUALITAS_WP.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_2_L_SELEKSI_TA_KUALITAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_A_COVER_LAMPIRAN_III_PK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_B_SDP_PK_PASCA_HARGA_TERENDAH_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_C_SDP_PK_PASCA_HARGA_TERENDAH_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_D_SDP_PK_PASCA_HARGA_TERENDAH_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_E_SDP_PK_PASCA_HARGA_TERENDA_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_F_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_G_SDP_PK_PASCA_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_H_SDP_PK_PASCA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_I_SDP_PK_PASCA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_J_SDP_PK_PASCA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_K_SDP_PK_PRAKUALIFIKASI.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_L_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_M_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_N_SDP_PK_PRA_SISTEM_HARGA_TERENDAH_AMBANG_BATAS_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_O_SDP_PK_PRA_SISTEM_NILAI_GAB.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_P_SDP_PK_PRA_SISTEM_NILAI_LS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        permenteri::create([
            'judul' => 'LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS',
            'peraturan' => 'peraturan/04_menteri/LAMPIRAN_3_Q_SDP_PK_PRA_SISTEM_NILAI_HS.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

// ============================================================================================================
        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_BINAKOS_NO_89_PENETAPAN_STANDAR_SKEMA_SERTIFIKAT_BUJK.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_DIRJEN_PENETAPAN_SKEMA_BUJK_NOMOR_144_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_713_TAHUN_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        keputusanmenteri::create([
            'judul' => 'KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020',
            'peraturan' => 'peraturan/05_keputusanmenteri/KEPUTUSAN_MENTERI_PUPR_NO_1410_KPTS_M_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ====================================================================================================================================================================================
        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_54_TAHUN_2024.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BK_NOMOR_33_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_KEMENTERIAN_2022_SE_DJB_TATA_CARA_PELAKSANAAN_SERTIFIKASI_KOMPETENSI_FINAL.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_PENCABUTAN_DIRJEN_BK_NO_59_2022.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        suratedaran::create([
            'judul' => 'SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023',
            'peraturan' => 'peraturan/06_suratedaran/SURAT_EDARAN_DIRJEN_BINKON_NO_73_TAHUN_2023.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        referensi::create([
            'judul' => 'PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020',
            'peraturan' => 'peraturan/07_suratreferensi/PERATURAN_PEMERINTAH_NOMOR_22_TAHUN_2020.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ===========================================================================================================================================================

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NO_11-TAHUN_2019',
            'peraturan' => 'peraturan/08_daerah/PERATURAN_DAERAH_NO_11-TAHUN_2019.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        perdaerah::create([
            'judul' => 'PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR',
            'peraturan' => 'peraturan/08_daerah/PERATURAN_DAERAH_NOMOR_01_TAHUN_2021_OCR.pdf',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


// ===========================================================================================================================================================

pergubernur::create([
    'judul' => 'PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009',
    'peraturan' => 'peraturan/09_gubernur/PERATURAN_GUBERNUR_NOMOR_99_TAHUN_2009.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_71_TAHUN_2023',
    'peraturan' => 'peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_71_TAHUN_2023.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

perbupatiwalikota::create([
    'judul' => 'PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN',
    'peraturan' => 'peraturan/10_bupatiwalikota/PERATURAN_BUPATI_NOMOR_72_TAHUN_2023_LANJUTAN.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


// ===========================================================================================================================================================

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/01.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERATURAN MENTERI PEKERJAAN UMUM DAN PERUMAHAN RAKYAT REPUBLIK INDONESIA NOMOR 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI - RELAKSASI',
    'peraturan' => 'peraturan/11_keputusan/02.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'PERMEN PUPR NO. 8 TAHUN 2022 TENTANG TATA CARA PELAKSANAAN PEMENUHAN SERTIFIKAT STANDAR JASA KONSTRUKSI DALAM RANGKA MENDUKUNG KEMUDAHAN PERIZINAN BERUSAHA BAGI PELAKU USAHA JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/03.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


suratkeputusan::create([
    'judul' => 'SURAT EDARAN LPJK NOMOR : 07/SE/LPJK/2022 TENTANG PEDOMAN PEMBERIAN REKOMENDASI LISENSI LSP, PENCATATAN LSP TERLISENSI, SERTA DAFTAR PENYESUAIAN STANDAR KOMPETENSI DAN JABKER KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/04.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIRJEN BIKON NO. 12.1/KPTS/Dk/2022 - TENTANG PENETAPAN JABATAN KERJA DAN KONVERSI JABATAN KERJA EKSISTING SERTA JENJANG KUALIFIKASI BIDANG JASA KONSTRUKSI - TAHUN 2022',
    'peraturan' => 'peraturan/11_keputusan/05.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN DIREKTUR JENDERAL BINA KONSTRUKSI, KEMENTERIAN PEKERJAAN UMUM DAN PERUMAHAN RAKYAT NOMOR 144/KPTS/DK/2022 TENTANG PENETAPAN STANDAR SKEMA SERTIFIKASI BADAN USAHA JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/06.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 05 TAHUN 2022 PERUBAHAN ATAS SE NO. 03/SE/M/2022 TENTANG PEDOMAN PERPANJANGAN MASA BERLAKU SKK JASA KONSTRUKSI',
    'peraturan' => 'peraturan/11_keputusan/07.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'SE MENTERI PUPR NO. 02 TAHUN 2021 TENTANG PERUBAHAN SE MENTERI PUPR NO. 30 TAHUN 2020',
    'peraturan' => 'peraturan/11_keputusan/08.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

suratkeputusan::create([
    'judul' => 'KEPUTUSAN NO. 89 DIREKTUR JENDERAL DJBK PUPR TAHUN 2021',
    'peraturan' => 'peraturan/11_keputusan/09.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

// ============================== ============================== ============================== ==============================
//  HALAMAN BERITA WEB SIPJAKI KABUPATEN BLORA
// ============================== ============================== ============================== ==============================


berita::create([
    'judul' => 'Tansformasi Digital Mas Jaki DPUPR Blora, Sistem Informasi Pembina Jasa Konstruksi Pemerintah Kabupaten Blora Provinsi Jawa Tengah',
    'user_id' => rand(1,5),
    'gambar' => 'berita/databerita/blora1.jpg',
    'keteranganberita' => '
    <p>Pemerintah Kabupaten Blora, melalui Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR), tengah melakukan transformasi digital dalam pengelolaan sistem informasi pembinaan jasa konstruksi di wilayah tersebut. Inisiatif ini bertujuan untuk meningkatkan efisiensi, transparansi, dan akuntabilitas dalam proses sertifikasi serta pengawasan pekerja konstruksi di Kabupaten Blora. Dengan penerapan teknologi digital, diharapkan dapat mempermudah akses informasi bagi para pelaku industri konstruksi serta mendukung pembangunan yang lebih terstruktur dan terencana dengan baik, sejalan dengan visi Pemerintah Provinsi Jawa Tengah dalam mendorong kemajuan sektor konstruksi yang profesional dan berstandar.</p>',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Pemerintah Kabupaten Blora Melaksanakan Sertifikasi Pekerja Tenaga Konstruksi',
    'user_id' => rand(1,5),
    'gambar' => 'berita/databerita/blora2.jpg',
    'keteranganberita' => '
    <p>Pemerintah Kabupaten Blora melalui Dinas Pekerjaan Umum dan Penataan Ruang (DPUPR) telah melaksanakan sertifikasi bagi pekerja tenaga konstruksi sebagai upaya untuk meningkatkan kualitas dan kompetensi sumber daya manusia di sektor konstruksi. Program sertifikasi ini bertujuan untuk memastikan bahwa para pekerja konstruksi memiliki keterampilan dan pengetahuan yang sesuai dengan standar yang berlaku, sehingga dapat menghasilkan pekerjaan konstruksi yang lebih aman, efisien, dan berkualitas. Dengan adanya sertifikasi ini, diharapkan akan mendukung pembangunan infrastruktur yang lebih baik di Kabupaten Blora serta meningkatkan daya saing tenaga kerja konstruksi di tingkat regional maupun nasional.</p>
',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Peningkatan Kompetensi Tenaga Konstruksi Melalui Pelatihan Sertifikasi di Kabupaten Blora',
    'user_id' => rand(1,5),
    'gambar' => 'berita/databerita/blora3.jpg',
    'keteranganberita' => '
    <p>Pemerintah Kabupaten Blora Provinsi Jawa Tengah telah meluncurkan inisiatif transformasi digital dalam sistem informasi pembina jasa konstruksi sebagai langkah penting untuk meningkatkan efisiensi dan transparansi dalam sektor konstruksi. Program ini bertujuan untuk memodernisasi cara pemerintah mengelola dan mengawasi proyek-proyek konstruksi di daerahnya, dengan memanfaatkan teknologi informasi terkini untuk mempermudah akses, pelaporan, dan monitoring. Transformasi ini diharapkan dapat membawa perubahan positif dalam cara proyek konstruksi dikelola dan dievaluasi, serta meningkatkan kualitas layanan kepada masyarakat.
    </p>
    ',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Pemerintah Kabupaten Blora Gelar Pelatihan Sertifikasi untuk Pekerja Tenaga Konstruksi',
    'user_id' => rand(1,5),
    'gambar' => 'berita/databerita/blora4.jpg',
    'keteranganberita' => '
    <p>Pemerintah Kabupaten Blora Provinsi Jawa Tengah telah meluncurkan inisiatif transformasi digital dalam sistem informasi pembina jasa konstruksi sebagai langkah penting untuk meningkatkan efisiensi dan transparansi dalam sektor konstruksi. Program ini bertujuan untuk memodernisasi cara pemerintah mengelola dan mengawasi proyek-proyek konstruksi di daerahnya, dengan memanfaatkan teknologi informasi terkini untuk mempermudah akses, pelaporan, dan monitoring. Transformasi ini diharapkan dapat membawa perubahan positif dalam cara proyek konstruksi dikelola dan dievaluasi, serta meningkatkan kualitas layanan kepada masyarakat.</p>

<p>Sistem informasi baru ini dirancang untuk menyediakan platform terintegrasi yang memungkinkan pemantauan real-time atas proyek konstruksi, pengelolaan data secara efisien, dan komunikasi yang lebih baik antara pihak terkait. Melalui sistem ini, setiap tahap proyek konstruksi, mulai dari perencanaan hingga pelaksanaan, dapat dipantau secara langsung oleh pihak berwenang. Hal ini bertujuan untuk memastikan bahwa semua proyek memenuhi standar kualitas dan regulasi yang ditetapkan, serta meminimalkan potensi penyelewengan atau kesalahan yang mungkin terjadi.</p>

<p>Transformasi digital ini juga mencakup peningkatan aksesibilitas bagi para kontraktor dan penyedia jasa konstruksi. Dengan sistem informasi yang terintegrasi, para pemangku kepentingan dapat mengakses informasi penting, seperti persyaratan perizinan dan prosedur pengajuan, secara online. Ini akan mempercepat proses administrasi dan mengurangi birokrasi, sehingga memberikan kemudahan bagi para pelaku industri untuk berpartisipasi dalam proyek-proyek pemerintah. Selain itu, transparansi yang lebih tinggi diharapkan dapat meningkatkan kepercayaan masyarakat terhadap proses pengadaan dan pelaksanaan proyek konstruksi.</p>

<p>Peluncuran sistem informasi pembina jasa konstruksi ini merupakan bagian dari komitmen Pemerintah Kabupaten Bandung Barat untuk mendorong inovasi dan efisiensi dalam pelayanan publik. Dengan adanya transformasi digital ini, diharapkan sektor konstruksi di daerah ini dapat berkembang lebih pesat dan berkelanjutan. Ke depan, pemerintah akan terus memantau dan mengevaluasi efektivitas sistem ini, serta melakukan perbaikan yang diperlukan untuk memastikan bahwa manfaat dari transformasi digital dapat dirasakan secara optimal oleh semua pihak terkait.</p>
',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

berita::create([
    'judul' => 'Meningkatkan Profesionalisme Tenaga Konstruksi di Kabupaten Blora Melalui Pelatihan Sertifikasi',
    'user_id' => rand(1,5),
    'gambar' => 'berita/databerita/blora5.jpg',
    'keteranganberita' => '
    <p>Pemerintah Kabupaten Blora Provinsi Jawa Tengah telah meluncurkan inisiatif transformasi digital dalam sistem informasi pembina jasa konstruksi sebagai langkah penting untuk meningkatkan efisiensi dan transparansi dalam sektor konstruksi. Program ini bertujuan untuk memodernisasi cara pemerintah mengelola dan mengawasi proyek-proyek konstruksi di daerahnya, dengan memanfaatkan teknologi informasi terkini untuk mempermudah akses, pelaporan, dan monitoring. Transformasi ini diharapkan dapat membawa perubahan positif dalam cara proyek konstruksi dikelola dan dievaluasi, serta meningkatkan kualitas layanan kepada masyarakat.</p>

<p>Sistem informasi baru ini dirancang untuk menyediakan platform terintegrasi yang memungkinkan pemantauan real-time atas proyek konstruksi, pengelolaan data secara efisien, dan komunikasi yang lebih baik antara pihak terkait. Melalui sistem ini, setiap tahap proyek konstruksi, mulai dari perencanaan hingga pelaksanaan, dapat dipantau secara langsung oleh pihak berwenang. Hal ini bertujuan untuk memastikan bahwa semua proyek memenuhi standar kualitas dan regulasi yang ditetapkan, serta meminimalkan potensi penyelewengan atau kesalahan yang mungkin terjadi.</p>

<p>Transformasi digital ini juga mencakup peningkatan aksesibilitas bagi para kontraktor dan penyedia jasa konstruksi. Dengan sistem informasi yang terintegrasi, para pemangku kepentingan dapat mengakses informasi penting, seperti persyaratan perizinan dan prosedur pengajuan, secara online. Ini akan mempercepat proses administrasi dan mengurangi birokrasi, sehingga memberikan kemudahan bagi para pelaku industri untuk berpartisipasi dalam proyek-proyek pemerintah. Selain itu, transparansi yang lebih tinggi diharapkan dapat meningkatkan kepercayaan masyarakat terhadap proses pengadaan dan pelaksanaan proyek konstruksi.</p>

<p>Peluncuran sistem informasi pembina jasa konstruksi ini merupakan bagian dari komitmen Pemerintah Kabupaten Bandung Barat untuk mendorong inovasi dan efisiensi dalam pelayanan publik. Dengan adanya transformasi digital ini, diharapkan sektor konstruksi di daerah ini dapat berkembang lebih pesat dan berkelanjutan. Ke depan, pemerintah akan terus memantau dan mengevaluasi efektivitas sistem ini, serta melakukan perbaikan yang diperlukan untuk memastikan bahwa manfaat dari transformasi digital dapat dirasakan secara optimal oleh semua pihak terkait.</p>
',
    'tanggal' => Carbon::now()->toDateString(), // Atau gunakan tanggal yang spesifik
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


// =================================== ===================================== ===========================
layanankami::create([
    'gambar' => '/assets/library/layanankami/1.png',
    'program' => 'Sertifikat Laik Fungsi',
    'keterangan' => 'Sertifikat Laik Fungsi Untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/2.png',
    'program' => 'Persetujuan Bangunan Gedung',
    'keterangan' => 'Persetujuan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/3.png',
    'program' => 'Inspeksi Lapangan',
    'keterangan' => 'Inspeksi Lapangan Untuk Konstruksi Di Lapangan',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


layanankami::create([
    'gambar' => '/assets/library/layanankami/4.png',
    'program' => 'Pemeliharaan Perbaikan',
    'keterangan' => 'Pemeliharaan Perbaikan Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/5.png',
    'program' => 'Penyediaan Material',
    'keterangan' => 'Penyediaan Material untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/6.png',
    'program' => 'Insfrastruktur Perkotaan',
    'keterangan' => 'Insfrastruktur Perkotaan untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/7.png',
    'program' => 'Insfrastruktur Jalan',
    'keterangan' => 'Insfrastruktur Jalan untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/8.png',
    'program' => 'Insfrastruktur Industri',
    'keterangan' => 'Insfrastruktur Industri',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/9.png',
    'program' => 'Teknik Konstruksi ',
    'keterangan' => 'Teknik Konstruksi untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/10.png',
    'program' => 'Teknik Struktur ',
    'keterangan' => 'Teknik Struktur untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

layanankami::create([
    'gambar' => '/assets/library/layanankami/11.png',
    'program' => 'Teknik Rekayasa & Air Limbah ',
    'keterangan' => 'Teknik Rekayasa & Air Limbah untuk Bangunan Gedung',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// =============================== =============================== =============================== ===============================
uijk::create([
    'nama_perusahaan' => 'PT. Mega Sukma',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG003(M1),   BG009(M1),   SI001(M1),   SI003(M2),   SI004(M2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bina Kreasi Nusantara',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Arsitektur, Perencanaan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => 'AR102(K1), AR104(K1), RE102(K1), RE103(K1), RE104(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rifana Jaya Perdana',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG009(M1), SI001(M1), SI002(M1), SI003(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Multicipta Rancana Selaras',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Rekayasa,Perencanaan Penataan Ruang, Konsultasi Spesialis',
    'sub_klasifikasi_bidang_usaha' => 'RE103 (B), RE104 (B), PR101 (B), PR102 (B), SP303 (B), SP304 (B)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Mutiara Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1), BG007(K1), SI001(K3), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Berkah Karunia Abadi',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI008(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Yasuba Dwi Perkasa',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung, Bangunan Sipil, Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'BG004(M1),BG007(M1),BG008(M2),BG009(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Setia Mandiri CO',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Beton Elemen Persada',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), BG003(M1), BG006(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Putri Kembar Sejahtera',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rapi Indah',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M2),BG002(M2),BG003(M2),BG004(M1),BG006(M1),BG007(M1),BG008(M1),BG009(M2),',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bandung Rainer Syailendra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1),BG002(K1), BG004(K1), BG006(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Rumah Mulia Indonesia',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), BG007(M1), SI012(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Wijaya Kusumah',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1),BG008(K1),BG009(K1), SI001(K1),SI002(K2),SI003(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Aditya Putra Karya Utama',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(M1),BG008(M1),BG009(M1),SI001(M1),SI003(M2),SI004(M1),SI012(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Graha Teknik',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1),BG007(K2),BG008(K1),BG009(K3),SI001(K1),SI003(K3)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Trisula',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1),BG007(K1),SI001(K1),SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Bina Arya Sejahtera',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Hanjuang',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Gumas Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1),BG009(K1),SI001(K1),SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RH Niaga Buana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), EL010(K1), EL011(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Bina Sarana Putra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Jasa Konstruksi Terintegrasi, Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'TI503(B1),TI504(B1), EL001(M1),EL009(M1),EL010(M1),MK007(M1),MK009(B1),MK010(B1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Mobar Sarana Energi',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'MK007(M1), MK010(M1), EL001(M1), EL009(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Abbas Kusuma',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI003(K1), SI008(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Tri Hazna Pertiwi',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007 (K1) ; BG009 (K2) ; SI001 (K1) ; SI002 (K1) ; SI003 (K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => '',
    'kategori_perusahaan' => '',
    'klasifikasi_bidang_usaha' => '',
    'sub_klasifikasi_bidang_usaha' => '',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);


uijk::create([
    'nama_perusahaan' => 'PT. Martadinar Gemilang Sejahtera',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), EL008(K1), EL010(K1), EL011(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Mega Braja Waskita',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG009(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Hiber',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG008(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Subur Abadi Putra',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(M1), BG002(M1), SI002(M1), SI003(M1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Dwi Puteri',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG007(K1), BG008(K2), SI001(K2), SI003(K2), SI008(K2)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Permata',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Kayu Manis',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG001(K1), BG007(K1), SI001(K3), SI002(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Citra Indah',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Pelaksana Spesialis',
    'sub_klasifikasi_bidang_usaha' => 'SP004(K1),SP008(K1),SP011(K1)SP015(K3),SP016(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Cendrawasih Milik Kita',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Merdeka Sakti',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(K1), BG007(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. YDP Usaha Perdana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => ' Perencanaan Arsitektur, Pengawasan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => '(AR101) (M1), (AR102) (M1), (RE201) (K1), (RE202) (K1), (RE203) (K1)',
    'keterangan' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Sinergi Karsa Utama',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG004(M1), SI001(M1), SI003(M1),SI004(M1).',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Tiga Arga Kencana',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'SI003(M1), SI004(M1), BG002(M1), BG003(M1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Gatra Kencana',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'SI001(K1), SI003(K1), BG007(K1), BG009(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Agung Bandung',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Sipil dan Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), BG008(K1), BG009(K3), SI001(K1), SI003(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Wahana Wahid Perkasa',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG007(K1), SI001(K1), SI003(K1), SI004(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. Aria Putra Perkasa',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => 'BG008(K1), BG009(K1), SI001(K1), SI003(K1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. Ruang Hijau',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Penataan Ruang',
    'sub_klasifikasi_bidang_usaha' => 'PR103(M1)',
    'keterangan' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT.BINA SARANA PUTRA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(MK007)(M1),(MK009)(B1),MK010)(B1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RAHAJENG',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL006)(K1),(EL007)(K1),(EL010)(K1),(EL011)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GENERAL MULTI UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan gedung dan Instalasi Mekanikal dan elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(BG002)(M1),(BG006)(M1),(EL010)(M1),(MK002)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. SYAM KARYA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003)(K1),',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. DHERA GITA INDONESIA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL006)(M1),(EL007)(M1),(EL010)(M1), (EL010)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. PUTRA BUNGSU',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil ',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003)(K1),(SI008)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. DAYA UNGGUL PERKASA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL002)(K1),(EL006)(K1),(EL007)(K1),(EL010)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GUNA BANGUN UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(M1),(BG007)(M1),(BG007)(M1),(BG009)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. NAGA MAS JAYA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(K1),(BG007)(K1),(BG009)(K2),(SI001)(K1),(SI002)(K1),(SI003)(K2)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. REKA BAHANATAMA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG008)(K1),(BG009)(K1),(SI001)(K1),(SI003)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. MITRA JAYATAMA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(BG008)(K1),(BG009)(K1),(SI001)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. ECOPLAN REKABUMI INTERCONSULT',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Rekayasa,Perencanaan Penataan Ruang,Konsultasi Lainnya, Pengawasan Penataan Ruang',
    'sub_klasifikasi_bidang_usaha' => '(RE103)(B),(RE104)(B),(PR101)(B),(PR102)(B),(PR103)(B),(PR104)(B),(KL401)(B),(PR201)(B)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. BOJONG SARI',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => ' Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG007)(K1),(SI001)(K1),(SI003) (K2),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV.Kartika Jaya',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(K1),(SI001)(K1),(SI003) (K1),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. RIKATNA',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG006)(K1),(BG009)(K1),(SI003) (K1),(SI004) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. FATIH BERKAH ELECTRIK',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Instalasi Mekanikal dan Elektrikal',
    'sub_klasifikasi_bidang_usaha' => '(EL003)(K1),(EL006)(K1),(EL007)(K1),(EL010)(K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'CV. SEKAR WANGI',
    'kategori_perusahaan' => 'CV',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan Sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG001) (K1),(BG004) (K1),(BG007) (K1),(SI001) (K1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. GUNA BANGUN UTAMA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung',
    'sub_klasifikasi_bidang_usaha' => '(BG004)(M1),(BG007)(M1),(BG007)(M1),(BG009)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. REKA JAYA KARYA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Bangunan Gedung dan Bangunan sipil',
    'sub_klasifikasi_bidang_usaha' => '(BG008) (M1),(BG009) (M1),(SI001) (M1),(SI003) (M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

uijk::create([
    'nama_perusahaan' => 'PT. PELITA PERSADA REKAYASA',
    'kategori_perusahaan' => 'PT',
    'klasifikasi_bidang_usaha' => 'Perencanaan Arsitektur,Perencaan Rekayasa, Pengawasan Rekayasa',
    'sub_klasifikasi_bidang_usaha' => '(AR101)(M1), (AR102)(M1),(RE102)(M1),(RE105)(M1),(RE201)(M1), (RE204)(M1)',
    'keterangan' => '2018',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
]);

// uijk::create([
//     'nama_perusahaan' => '',
//     'kategori_perusahaan' => '',
//     'klasifikasi_bidang_usaha' => '',
//     'sub_klasifikasi_bidang_usaha' => '',
//     'keterangan' => '2018',
//     'created_at' => Carbon::now(),
//     'updated_at' => Carbon::now(),
// ]);

// ============================== ============================================================

// DATA YANG DIRUBAH DARI PEMERINTAH KABUPATEN BANDUNG BARAT
// kegiatanjaskon::create([
//                 // 'laporankegiatan_id' => 2, // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'user_id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'judul_kegiatan' => '11 - 12 AGUSTUS 2024, KECAMATAN CILILIN BIMBINGAN TEKNIS KESELAMATAN DAN KESEHATAN KERJA PARA PEKERJA KONSTRUKSI',
//                 'alamat_kegiatan' => 'DESA BATULAYANG 40562 JAWA BARAT INDONESIA',
//                 'pengawasanlokasi_id' => '11',
//                 'tanggal' => '',
//                 'berita1' => 'dokumentasipelatihan/new/BERITA1.jpg',
//                 'berita2' => 'dokumentasipelatihan/new/BERITA2.jpg',
//                 'berita3' => 'dokumentasipelatihan/new/BERITA3.jpg',
//                 'berita4' => 'dokumentasipelatihan/new/BERITA4.jpg',
//                 'berita5' => 'dokumentasipelatihan/new/BERITA5.jpg',
//                 'berita6' => 'dokumentasipelatihan/new/BERITA6.jpg',
//                 'berita7' => 'dokumentasipelatihan/new/BERITA7.jpg',
//                 'berita8' => 'dokumentasipelatihan/new/BERITA8.jpg',
//                 'berita9' => 'dokumentasipelatihan/new/BERITA9.jpg',
//                 'berita10' => 'dokumentasipelatihan/new/BERITA10.jpg',
//                 'berita11' => 'dokumentasipelatihan/new/BERITA11.jpg',
//                 'berita12' => 'dokumentasipelatihan/new/BERITA12.jpg',
//                 'berita13' => 'dokumentasipelatihan/new/BERITA13.jpg',
//                 'berita14' => 'dokumentasipelatihan/new/BERITA14.jpg',
//                 'berita15' => 'dokumentasipelatihan/new/BERITA15.jpg',
//                 'berita16' => 'dokumentasipelatihan/new/BERITA16.jpg',
//                 'berita17' => 'dokumentasipelatihan/new/BERITA17.jpg',
//                 'berita18' => 'dokumentasipelatihan/new/BERITA18.jpg',
//                 'berita19' => 'dokumentasipelatihan/new/BERITA19.jpg',
//                 'berita20' => 'dokumentasipelatihan/new/BERITA20.jpg',

//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// kegiatanjaskon::create([
//                 // 'laporankegiatan_id' => 2, // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'id' => 2,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'user_id' => 1,           // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'judul_kegiatan' => '2 - 3 DESEMBER 2024, KECAMATAN CIKALONG WETAN BIMBINGAN TEKNIS KESELAMATAN DAN KESEHATAN KERJA PARA PEKERJA KONSTRUKSI',
//                 'alamat_kegiatan' => 'DESA CISOMANG BARAT 40556 JAWA BARAT INDONESIA',
//                 'pengawasanlokasi_id' => '11',
//                 'tanggal' => '',
//                 'berita1' => 'dokumentasipelatihan/new/01_CB.jpg',
//                 'berita2' => 'dokumentasipelatihan/new/02_CB.jpg',
//                 'berita3' => 'dokumentasipelatihan/new/03_CB.jpg',
//                 'berita4' => 'dokumentasipelatihan/new/04_CB.jpg',
//                 'berita5' => 'dokumentasipelatihan/new/05_CB.jpg',
//                 'berita6' => 'dokumentasipelatihan/new/06_CB.jpg',
//                 'berita7' => 'dokumentasipelatihan/new/07_CB.jpg',
//                 'berita8' => 'dokumentasipelatihan/new/08_CB.jpg',
//                 'berita9' => 'dokumentasipelatihan/new/09_CB.jpg',
//                 'berita10' => 'dokumentasipelatihan/new/10_CB.jpg',
//                 'berita11' => 'dokumentasipelatihan/new/11_CB.jpg',
//                 'berita12' => 'dokumentasipelatihan/new/12_CB.jpg',
//                 'berita13' => 'dokumentasipelatihan/new/13_CB.jpg',
//                 'berita14' => 'dokumentasipelatihan/new/14_CB.jpg',
//                 'berita15' => 'dokumentasipelatihan/new/15_CB.jpg',
//                 'berita16' => 'dokumentasipelatihan/new/16_CB.jpg',
//                 'berita17' => 'dokumentasipelatihan/new/17_CB.jpg',
//                 'berita18' => 'dokumentasipelatihan/new/18_CB.jpg',
//                 'berita19' => 'dokumentasipelatihan/new/19_CB.jpg',
//                 'berita20' => 'dokumentasipelatihan/new/20_CB.jpg',

//                 'tanggal' => '2024-12-02', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);


// ==========================================================================================================
// DATA YANG DIRUBAH DARI PEMERINTAH KABUPATEN BANDUNG BARAT
// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                 'kegiatanjaskon_id' => '1',
//                 'user_id' => '1',
//                 'judul_kegiatan' => 'sambutan oleh bapak sekdis pupr kabupaten bandung barat  ',
//                 'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh camat cililin kabupaten bandung barat  ',
//                 'jabatan' => 'camat kecamatan cililin kabupaten bandung barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_CAMAT.jpeg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Camat Cililin, dalam sambutannya, mengapresiasi penyelenggaraan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diadakan di Desa Batulayang. Acara ini merupakan inisiatif penting dari Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) untuk mendukung peningkatan kualitas dan keselamatan dalam proyek-proyek konstruksi di wilayah kami. Dengan adanya bimbingan teknis ini, diharapkan semua pihak dapat memahami dan menerapkan standar keselamatan yang tinggi serta mengikuti semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Camat Cililin menegaskan betapa pentingnya implementasi standar K3 dalam sektor konstruksi untuk mencegah risiko dan kecelakaan kerja. Pelatihan ini dirancang untuk memberi peserta pengetahuan mendalam tentang praktik terbaik dalam keselamatan kerja dan bagaimana cara mengelola risiko secara efektif. Peserta diharapkan tidak hanya mendapatkan informasi teoritis, tetapi juga keterampilan praktis yang berguna dalam menghadapi tantangan di lapangan.</p>

// <p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan konstruksi dibahas secara mendetail. Narasumber yang berpengalaman diundang untuk memberikan wawasan dan solusi terhadap berbagai masalah yang sering muncul dalam proyek konstruksi. Tujuan dari kegiatan ini adalah untuk meningkatkan kesadaran dan kemampuan semua peserta sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif di wilayah Kecamatan Cililin.</p>

// <p>Di akhir acara, Camat Cililin menyampaikan terima kasih kepada semua pihak yang telah berkontribusi dalam pelaksanaan bimbingan teknis ini. Diharapkan bahwa pelatihan ini memberikan manfaat besar dan dapat diterapkan dalam setiap proyek konstruksi yang dilakukan. Komitmen bersama untuk mencapai standar keselamatan yang tinggi akan mendukung kesuksesan proyek dan meningkatkan keselamatan kerja di Kabupaten Bandung Barat.</p>



// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh bpk yuyu yuhana, ST., MM pembina jasa konstruksi ahli muda pemerintah kabupaten bandung barat',
//                 'jabatan' => 'kepala putr kabupaten bandung barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_YUYU.jpeg',
//                 'keterangan_berita' => '
// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Kepala Dinas Pekerjaan Umum dan Tata Ruang (PUTR) Kabupaten Bandung Barat, dalam sambutannya, mengapresiasi pelaksanaan acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang. Acara ini merupakan bagian dari upaya berkelanjutan Dinas PUTR untuk meningkatkan kualitas dan keselamatan di sektor konstruksi. Kegiatan ini bertujuan memastikan bahwa semua aspek pekerjaan konstruksi dilakukan sesuai dengan standar yang tinggi dan mematuhi regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Kepala Dinas PUTR menekankan betapa pentingnya penerapan standar K3 dalam industri konstruksi untuk mencegah risiko dan kecelakaan di tempat kerja. Bimbingan teknis ini dirancang untuk memberikan peserta pengetahuan mendalam mengenai praktik terbaik dalam keselamatan kerja serta cara-cara efektif untuk mengelola risiko. Harapannya, peserta dapat memperoleh keterampilan praktis yang diperlukan untuk menghadapi berbagai tantangan di lapangan dan mencegah terjadinya kecelakaan.</p>

// <p>Selama sesi bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi akan dibahas secara komprehensif. Narasumber berpengalaman akan berbagi wawasan dan solusi terkait tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang lebih aman dan produktif.</p>

// <p>Penutupan acara ditandai dengan ucapan terima kasih dari Kepala Dinas PUTR kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, hasil dari pelatihan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi. Komitmen bersama untuk mencapai standar keselamatan yang tinggi merupakan langkah penting menuju kesuksesan dan keamanan dalam industri konstruksi di Kabupaten Bandung Barat.</p>


// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'Sambutan oleh bpk Laswono, ST PEMBEKALAN PEKERJA/TUKANG KONSTRUKSI REGULASI SERTIFIKASI KOMPETENSI KERJA (SKK) ',
//                 'jabatan' => 'Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat',
//                 'gambar' => 'acarasertifikasi/beritaacara/PA_LASWONO.jpeg',
//                 'keterangan_berita' => '
// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Pembina Jasa Konstruksi Ahli Muda Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat, Bapak Laswono, ST, memberikan sambutan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya Dinas Bina Marga dan Tata Ruang Provinsi Jawa Barat untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar yang tinggi dan regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Bapak Laswono menekankan pentingnya penerapan regulasi dan sertifikasi kompetensi kerja (SKK) dalam industri konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama bimbingan, berbagai topik teknis yang berkaitan dengan keselamatan dalam konstruksi dan regulasi SKK akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih dari Bapak Laswono kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat yang signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kualitas yang tinggi di Kabupaten Bandung Barat.</p>

// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh ibu Dra. Fauzia Mulyawati, ST., MT tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Keselamatan Kerja dan Kesehatan (K3)',
//                 'jabatan' => 'Dosen Universitas Langlangbuana Bandung',
//                 'gambar' => 'acarasertifikasi/beritaacara/BU_FAUZIA.jpeg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dra. Fauzia Mulyawati, ST., MT, Dosen Universitas Langlangbuana Bandung, memberikan bimbingan dan pengarahan pada acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari upaya untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini bertujuan memastikan bahwa semua pekerjaan konstruksi dilakukan dengan mematuhi standar tinggi dan regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Dra. Fauzia Mulyawati menekankan pentingnya pemahaman mengenai Keselamatan Kerja dan Kesehatan (K3) di sektor konstruksi. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai penerapan praktik K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko serta menerapkan standar keselamatan dan kesehatan di lokasi kerja.</p>

// <p>Selama bimbingan, berbagai topik teknis terkait K3 akan dibahas secara mendalam. Narasumber berpengalaman akan memberikan wawasan dan solusi mengenai tantangan dalam penerapan K3 serta praktik keselamatan yang efektif di industri konstruksi. Kegiatan ini bertujuan untuk meningkatkan kesadaran dan kompetensi semua pihak terkait, sehingga dapat menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih dari Dra. Fauzia Mulyawati kepada semua pihak yang telah berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan dan dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan dan kesehatan kerja yang tinggi di Kabupaten Bandung Barat.</p>

// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
// ]);

// laporankegiatan::create([
//                     // Ganti dengan ID yang sesuai jika menggunakan foreign key
//                     'kegiatanjaskon_id' => '1',
//                     'user_id' => '1',
//                     'judul_kegiatan' => 'sambutan oleh ibu Rosita, SE., MM tentang Pembekalan Pekerja/Tukang Konstruksi Terkait Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan',
//                 'jabatan' => 'Badan Penyelenggara Jaminan Sosial',
//                 'gambar' => 'acarasertifikasi/beritaacara/BU_ROSITA.jpg',
//                 'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Ibu Rosita, SE., MM, dari BPJS Ketenagakerjaan, memberikan bimbingan dan pengarahan dalam acara bimbingan teknis mengenai Regulasi Badan Penjaminan Jaminan Sosial (BPJS) Ketenagakerjaan yang diselenggarakan di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini merupakan bagian dari komitmen untuk meningkatkan pemahaman tentang regulasi dan jaminan sosial di sektor konstruksi, serta memastikan bahwa setiap pekerja konstruksi memahami hak dan kewajiban mereka di bawah BPJS Ketenagakerjaan.</p>

// <p>Dalam sambutannya, Ibu Rosita menekankan pentingnya pemahaman mengenai regulasi BPJS Ketenagakerjaan untuk pekerja dan tukang konstruksi. Bimbingan ini dirancang untuk memberikan informasi mendalam mengenai cara BPJS Ketenagakerjaan berfungsi dan bagaimana pekerja dapat memanfaatkan jaminan sosial untuk perlindungan mereka. Peserta diharapkan memperoleh pengetahuan dan keterampilan yang diperlukan untuk mengelola dan memanfaatkan manfaat BPJS secara efektif.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait regulasi BPJS Ketenagakerjaan akan dibahas secara rinci. Ibu Rosita akan membagikan wawasan mengenai hak-hak pekerja, prosedur klaim, serta mekanisme perlindungan yang disediakan oleh BPJS. Tujuan utama dari kegiatan ini adalah untuk meningkatkan pemahaman dan kesadaran semua pihak terkait, sehingga mereka dapat memanfaatkan perlindungan sosial dengan maksimal.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih dari Ibu Rosita kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan ini. Diharapkan, pelatihan dan bimbingan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung kepatuhan terhadap regulasi BPJS Ketenagakerjaan di Kabupaten Bandung Barat.</p>

// ',
//                 'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//                 'created_at' => now(),
//                 'updated_at' => now(),
//             ]);

// ============== ============== ============== ============== ============== ============== ==============
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);



//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);
//             laporankegiatan::create([
//                 // Ganti dengan ID yang sesuai jika menggunakan foreign key
//             'kegiatanjaskon_id' => '2',
//             'user_id' => '1',
//             'judul_kegiatan' => 'Sigit  ',
//             'jabatan' => 'sekertaris dinas PUPR pemerintah kabupaten bandung barat',
//             'gambar' => 'acarasertifikasi/beritaacara/PA_SEKDIS.jpeg',
//             'keterangan_berita' => '

// <p>**Rabu, 14 Agustus 2024 - Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat**</p>

// <p>Dinas Pekerjaan Umum dan Perumahan Rakyat (PUPR) menggelar acara bimbingan teknis dan Keselamatan dan Kesehatan Kerja (K3) di Desa Batulayang, Kecamatan Cililin, Kabupaten Bandung Barat. Acara ini dilaksanakan sebagai bagian dari komitmen PUPR untuk meningkatkan kualitas serta keselamatan dalam industri konstruksi. Kegiatan ini diharapkan dapat memastikan bahwa setiap pekerjaan konstruksi dilaksanakan dengan standar yang tinggi dan mematuhi semua regulasi yang berlaku.</p>

// <p>Dalam sambutannya, Sekretaris Dinas PUPR menekankan pentingnya keselamatan kerja di sektor konstruksi, yang tidak dapat ditawar. Bimbingan teknis ini dirancang untuk memberikan pemahaman mendalam mengenai praktik terbaik dalam keselamatan kerja serta penerapan standar K3 yang efektif. Peserta diharapkan memperoleh pengetahuan dan keterampilan praktis yang diperlukan untuk mengelola risiko dan mencegah kecelakaan di lokasi kerja.</p>

// <p>Selama sesi bimbingan, berbagai aspek teknis terkait konstruksi yang berhubungan dengan keselamatan akan dibahas. Narasumber berpengalaman diundang untuk berbagi wawasan dan solusi mengenai tantangan dalam pelaksanaan proyek konstruksi. Tujuan utama dari kegiatan ini adalah meningkatkan kesadaran dan kompetensi semua pihak terkait, guna menciptakan lingkungan kerja yang aman dan produktif.</p>

// <p>Penutupan acara diwarnai dengan ucapan terima kasih kepada semua pihak yang berkontribusi dalam penyelenggaraan bimbingan teknis ini. Diharapkan, bimbingan dan pelatihan ini akan memberikan manfaat signifikan yang dapat diterapkan dalam setiap proyek konstruksi, serta mendukung komitmen bersama untuk mencapai standar keselamatan yang tinggi. Acara ini merupakan langkah penting menuju keselamatan dan kesuksesan dalam industri konstruksi di wilayah Kabupaten Bandung Barat.</p>',
//             'tanggal' => '2024-08-14', // Format tanggal YYYY-MM-DD
//             'created_at' => now(),
//             'updated_at' => now(),
// ]);

            // ================= =====================================================================================
giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'LEMBANG',
                'gambar' => '/assets/library/giskbb/LEMBANG.jpeg',
                'laki_laki' => '38671',
                'perempuan' => '36666',
                'total_penduduk' => '194937',
                'keterangan_gis' => '

                <p>Kecamatan Lembang terletak di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Terkenal dengan pemandangan alam yang indah dan udara yang sejuk, Lembang menjadi salah satu destinasi populer bagi wisatawan yang mencari suasana pegunungan. Dengan lokasi strategisnya di wilayah Kabupaten Bandung Barat, kecamatan ini menawarkan berbagai fasilitas dan layanan yang mendukung kehidupan sehari-hari masyarakatnya, serta akses yang mudah ke pusat-pusat ekonomi dan pendidikan.</p>

<p>Fasilitas di Kecamatan Lembang cukup lengkap untuk memenuhi kebutuhan warganya. Terdapat berbagai sekolah, pusat kesehatan, dan pasar yang memudahkan penduduk dalam menjalani aktivitas sehari-hari. Infrastruktur yang memadai juga mendukung mobilitas masyarakat, sementara akses transportasi yang baik memperkuat konektivitas antara Lembang dan wilayah sekitarnya.</p>

<p>Berdasarkan data terbaru, jumlah penduduk di Kecamatan Lembang mencapai total 75.337 jiwa. Dari jumlah tersebut, terdapat 38.671 laki-laki dan 36.666 perempuan. Angka ini menunjukkan bahwa kecamatan ini memiliki struktur demografis yang seimbang, dengan proporsi laki-laki dan perempuan yang hampir merata.</p>

<p>Keseimbangan jumlah laki-laki dan perempuan di Kecamatan Lembang mencerminkan dinamika sosial yang stabil. Dengan total penduduk yang cukup besar dan komposisi gender yang seimbang, ada peluang besar untuk pengembangan berbagai inisiatif komunitas. Program-program yang fokus pada pendidikan, kesehatan, dan ekonomi dapat memperkuat kualitas hidup masyarakat di Lembang, serta mendukung pertumbuhan dan kemajuan wilayah ini secara keseluruhan.</p>',

                'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'PARONGPONG',
                'gambar' => '/assets/library/giskbb/PARONGPONG.jpeg',
                'laki_laki' => '56101',
                'perempuan' => '54436',
                'total_penduduk' => '110537',
                'keterangan_gis' => '
              <p>Kecamatan Parongpong adalah sebuah kecamatan di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Wilayah ini terkenal dengan kekayaan wisata bunga yang menjadi daya tarik utama bagi pengunjung. Parongpong dikenal sebagai pusat budidaya bunga dan tanaman hias, dengan mayoritas petani di wilayah ini berfokus pada produksi bunga dan tanaman hias lainnya. Keindahan alam dan potensi wisata yang dimilikinya menjadikan Parongpong salah satu destinasi favorit bagi wisatawan yang ingin menikmati keindahan alam dan keunikan tanaman hias.</p>

<p>Di Kecamatan Parongpong, petani bunga tersebar terutama di daerah Cihideung. Daerah ini dikenal dengan berbagai jenis tanaman hias, bunga, dan bibit pohon yang berjajar di sepanjang jalan utama desa Cihideung. Pemandangan ini tidak hanya memperindah kawasan tersebut tetapi juga menarik banyak pengunjung yang tertarik untuk membeli atau sekadar menikmati keindahan tanaman hias. Aktivitas ini telah menjadi bagian integral dari kehidupan masyarakat di Parongpong, yang secara aktif terlibat dalam sektor pertanian dan wisata.</p>

<p>Data terbaru menunjukkan bahwa jumlah penduduk di Kecamatan Parongpong mencapai total 110.537 jiwa. Dari jumlah tersebut, terdapat 56.101 laki-laki dan 54.436 perempuan. Keseimbangan jumlah laki-laki dan perempuan ini mencerminkan struktur demografis yang relatif seimbang dan memberikan gambaran tentang dinamika sosial di kecamatan ini. Struktur populasi yang seimbang ini penting untuk pengembangan berbagai inisiatif sosial dan ekonomi di kawasan ini.</p>

<p>Sebagai bentuk pengakuan terhadap potensi wisata yang dimiliki, pemerintah Kabupaten Bandung Barat telah mendeklarasikan Kecamatan Parongpong sebagai kota wisata bunga. Keputusan ini diambil untuk mendorong pengembangan sektor pariwisata serta meningkatkan kesejahteraan masyarakat melalui promosi dan pengembangan industri bunga dan tanaman hias. Dengan total penduduk yang signifikan dan potensi wisata yang kuat, Kecamatan Parongpong berada dalam posisi strategis untuk berkembang menjadi pusat wisata yang lebih dikenal dan diminati.</p>',
                'created_at' => now(),
                'updated_at' => now(),
            ]);


giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CISARUA',
                'gambar' => '/assets/library/giskbb/CISARUA.png',
                'laki_laki' => '39293',
                'perempuan' => '38080',
                'total_penduduk' => '79118',
                'keterangan_gis' => '
     <p>Kecamatan Cisarua adalah sebuah kecamatan yang terletak di Kabupaten Bandung Barat, Provinsi Jawa Barat, Indonesia. Terletak sekitar 9 kilometer dari ibu kota kabupaten ke arah timur laut, Kecamatan Cisarua memiliki posisi strategis yang mendukung perkembangan ekonominya. Pusat pemerintahan kecamatan ini berada di Desa Jambudipa, yang menjadi pusat administrasi dan kegiatan pemerintah daerah.</p>

<p>Cisarua dikenal sebagai kecamatan yang memiliki potensi besar di bidang pertanian dan peternakan. Produk utama dari kawasan ini meliputi jamur, susu, tanaman palawija, dan sayur-sayuran. Keberagaman produk pertanian ini menunjukkan kekayaan sumber daya alam yang dimiliki Cisarua, serta kontribusinya terhadap perekonomian lokal. Iklim yang cukup dingin di wilayah ini juga mendukung pertumbuhan berbagai jenis tanaman dan produk peternakan.</p>

<p>Menurut data terbaru, jumlah penduduk di Kecamatan Cisarua mencapai total 77.373 jiwa. Dari jumlah tersebut, terdapat 39.293 laki-laki dan 38.080 perempuan. Angka ini menunjukkan struktur demografis yang seimbang, dengan jumlah laki-laki dan perempuan yang hampir merata. Keseimbangan ini penting untuk pengembangan berbagai program sosial dan ekonomi di kecamatan ini.</p>

<p>Dengan potensi pertanian dan peternakan yang dimilikinya, serta iklim yang mendukung, Kecamatan Cisarua berada dalam posisi yang baik untuk berkembang lebih lanjut. Potensi sumber daya alam yang ada di Cisarua memberikan peluang besar untuk meningkatkan kesejahteraan masyarakat melalui pengembangan sektor pertanian dan peternakan yang berkelanjutan.</p>

                    ',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIKALONG WETAN',
                'gambar' => '/assets/library/giskbb/CIKALONGWETAN.png',
                'laki_laki' => '39293',
                'perempuan' => '38080',
                'total_penduduk' => '125630',
                'keterangan_gis' => ' DATA BELUM DIISI

                    ',

'created_at' => now(),
                'updated_at' => now(),
            ]);


giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPEUNDEY',
                'gambar' => '/assets/library/giskbb/CIPEUNDEY.png',
                'laki_laki' => '43453',
                'perempuan' => '41920',
                'total_penduduk' => '87376',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'NGAMPRAH',
                'gambar' => '/assets/library/giskbb/NGAMPRAH.png',
                'laki_laki' => '89279',
                'perempuan' => '86595',
                'total_penduduk' => '175874',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);


giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPATAT',
                'gambar' => '/assets/library/giskbb/CIPATAT.png',
                'laki_laki' => '72219',
                'perempuan' => '69570',
                'total_penduduk' => '141789',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'PADALARANG',
                'gambar' => '/assets/library/giskbb/PADALARANG.png',
                'laki_laki' => '93110',
                'perempuan' => '89871',
                'total_penduduk' => '182981',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'BATUJAJAR',
                'gambar' => '/assets/library/giskbb/BATUJAJAR.png',
                'laki_laki' => '55063',
                'perempuan' => '53516',
                'total_penduduk' => '108579',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIHAMPELAS',
                'gambar' => '/assets/library/giskbb/CIHAMPELAS.png',
                'laki_laki' => '68421',
                'perempuan' => '65263',
                'total_penduduk' => '133684',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CILILIN',
                'gambar' => '/assets/library/giskbb/CILILIN.png',
                'laki_laki' => '49169',
                'perempuan' => '46959',
                'total_penduduk' => '96128',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'CIPONGKOR',
                'gambar' => '/assets/library/giskbb/CIPONGKOR.png',
                'laki_laki' => '51118',
                'perempuan' => '48679',
                'total_penduduk' => '99797',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'RONGGA',
                'gambar' => '/assets/library/giskbb/RONGGA.png',
                'laki_laki' => '30394',
                'perempuan' => '28604',
                'total_penduduk' => '58998',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'SINDANGKERTA',
                'gambar' => '/assets/library/giskbb/SINDANGKERTA.png',
                'laki_laki' => '37059',
                'perempuan' => '36063',
                'total_penduduk' => '73122',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);



giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'GUNUNG HALU',
                'gambar' => '/assets/library/giskbb/GUNUNGHALU.png',
                'laki_laki' => '40001',
                'perempuan' => '37911',
                'total_penduduk' => '77912',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

giskbb::create([
                    // Ganti dengan ID yang sesuai jika menggunakan foreign key
                'nama_kecamatan' => 'SAGULING',
                'gambar' => '/assets/library/giskbb/saguling.png',
                'laki_laki' => '17442',
                'perempuan' => '16863',
                'total_penduduk' => '34305',
                'keterangan_gis' => ' DATA BELUM DIISI',

'created_at' => now(),
                'updated_at' => now(),
            ]);

// ===================== ===================== ===================== =====================
            pelatihan::create([
                'tahun'  => '2015',
                'kasus' => '110285',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2016',
                'kasus' => '101367',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2017',
                'kasus' => '123040',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2018',
                'kasus' => '173415',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2019',
                'kasus' => '182835',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2020',
                'kasus' => '221740',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2021',
                'kasus' => '234270',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            pelatihan::create([
                'tahun'  => '2022',
                'kasus' => '265334',
                'created_at' => now(),
                'updated_at' => now(),
            ]);


// ============================================================================

//         himbauandinas::create([
//             'nama_lengkap'          => 'Yuyu Yuhana, ST., MM',       // Menghasilkan nomor acak antara 1 dan 9
//             'jabatan'               => 'Fungsional Pembina Jasa Konstruksi Ahli Muda Pemerintah Kabupaten Bandung Barat',       // Menghasilkan nomor acak antara 1 dan 9
//             'himbauan'              => '<p>Kami mendorong semua pihak memanfaatkan Sistem Informasi Pembina Jasa Konstruksi (SIPJAKI) secara maksimal. Sistem ini dirancang untuk memudahkan akses informasi penting terkait peraturan dan sertifikasi dalam industri konstruksi. Dengan menggunakan SIPJK, saudara akan memperoleh informasi terkini dan membantu memastikan proyek konstruksi berjalan sesuai standar. Mari kita tingkatkan kualitas dan profesionalisme industri konstruksi bersama</p>',       // Menghasilkan nomor acak antara 1 dan 9
//             'foto_pejabat'          => 'himbauan/dinas/PERSETUJUAN_BANGUNAN_GEDUNG.png',
//             'created_at'            => now(),
//             'updated_at'            => now(),
// ]);

        himbauandinas::create([
            'nama_lengkap'          => '______',       // Menghasilkan nomor acak antara 1 dan 9
            'jabatan'               => '______',       // Menghasilkan nomor acak antara 1 dan 9
            'himbauan'              => '______',       // Menghasilkan nomor acak antara 1 dan 9
            'foto_pejabat'          => '',
            'created_at'            => now(),
            'updated_at'            => now(),
]);

        himbauandinas::create([
            'nama_lengkap'          => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'jabatan'               => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'himbauan'              => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'foto_pejabat'          => '',
            'created_at'            => now(),
            'updated_at'            => now(),
]);


        himbauandinas::create([
            'nama_lengkap'          => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'jabatan'               => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'himbauan'              => '_____',       // Menghasilkan nomor acak antara 1 dan 9
            'foto_pejabat'          => '',
            'created_at'            => now(),
            'updated_at'            => now(),
]);


    }
 /**
     * Menghitung usia berdasarkan tanggal lahir.
     *
     * @param  string  $birthDate
     * @return int
     */
    protected function calculateAge($birthDate)
    {
        return Carbon::parse($birthDate)->age;
    }


    // PEMERINTAH KABUPATEN BLORA PROVINSI JAWA TENGAH


}
