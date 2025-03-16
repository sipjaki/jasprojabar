<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// namespace App\Models;

use App\Models\agendastatus;
use App\Models\Agendastatus as ModelsAgendastatus;
use App\Models\asosiasipengusaha;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Tukangterampil;
use App\Models\peraturan;
use App\Models\agendaskk;
use App\Models\pesertapelatihan;
use App\Models\permenteri;
use App\Models\perpemerintah;
use App\Models\perpresiden;
use App\Models\keputusanmenteri;
use App\Models\perbupatiwalikota;
use App\Models\perdaerah;
use App\Models\referensi;
use App\Models\suratedaran;
use App\Models\pergubernur;
use App\Models\suratkeputusan;
use App\Models\paketpekerjaanmasjaki;
use App\Models\paketstatuspekerjaan;
use App\Models\berita;
use App\Models\pelatihan;
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
use App\Models\prosespaket;
use App\Models\prosespaketnontender;
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
use App\Models\satuanhargaupahtenagakerja;
use App\Models\satuanhargaperalatan;
use App\Models\hspdivisi;
use App\Models\hsppaket;
use App\Models\hspkodepekerjaan;
use App\Models\hspkonstruksiumum;
use App\Models\beritajakon;
use App\Models\allskktenagakerjablora;
// use App\Models\artikeljakon;
use App\Models\artikeljakonmasjaki;
use App\Models\kategoripelatihan;
use App\Models\agendapelatihan;
use App\Models\subhargadiv1;
// hsp harga divisi 2
use App\Models\hsppaket2;
use App\Models\hspkodepekerjaan2;
use App\Models\hspkonstruksiumum2;
use App\Models\subhargadiv2;

// hsp harga divisi 3
use App\Models\hsppaket3;
use App\Models\hspkodepekerjaan3;
use App\Models\hspkonstruksiumum3;
use App\Models\subhargadiv3;

// hsp harga divisi 4
use App\Models\hsppaket4;
use App\Models\hspkodepekerjaan4;
use App\Models\hspkonstruksiumum4;
use App\Models\subhargadiv4;

// hsp harga divisi 5
use App\Models\hsppaket5;
use App\Models\hspkodepekerjaan5;
use App\Models\hspkonstruksiumum5;
use App\Models\subhargadiv5;

// hsp harga divisi 6
use App\Models\hsppaket6;
use App\Models\hspkodepekerjaan6;
use App\Models\hspkonstruksiumum6;
use App\Models\subhargadiv6;

// hsp harga divisi 7
use App\Models\hsppaket7;
use App\Models\hspkodepekerjaan7;
use App\Models\hspkonstruksiumum7;
use App\Models\subhargadiv7;

// hsp harga divisi 8
use App\Models\hsppaket8;
use App\Models\hspkodepekerjaan8;
use App\Models\hspkonstruksiumum8;
use App\Models\subhargadiv8;

// hsp harga divisi 9
use App\Models\hsppaket9;
use App\Models\hspkodepekerjaan9;
use App\Models\hspkonstruksiumum9;
use App\Models\subhargadiv9;



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
            'name'  => 'Budi Sudarsono',
            'username' => 'Sigitadmin',
            'statusadmin_id' => '2',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitadmin@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'name'  => 'Rahmat Irianto',
            'username' => 'Sigitpekerja',
            'statusadmin_id' => '3',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitpekerja@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '4',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitsupp_pabrik@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '5',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitsupp_peralatan@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '6',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitsupp_tokobangunan@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '7',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitlpspenerbit@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '8',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitoperator@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);

        User::create([
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigitsupppabrik',
            'statusadmin_id' => '9',
            'avatar' => 'user/avatar/foto1.png',
            'email' => 'sigitdinas@gmail.com',
            'password' => bcrypt('adminadmin123$$')
        ]);


        // =================================================================
        statusadmin::create([
            'id'  => '1',
            'statusadmin'  => 'super_admin',
        ]);

        statusadmin::create([
            'id'  => '2',
            'statusadmin'  => 'admin',
        ]);

        statusadmin::create([
            'id'  => '3',
            'statusadmin'  => 'pekerja',
        ]);

        statusadmin::create([
            'id'  => '4',
            'statusadmin'  => 'supp_pabrik',
        ]);

        statusadmin::create([
            'id'  => '5',
            'statusadmin'  => 'supp_peralatan',
        ]);

        statusadmin::create([
            'id'  => '6',
            'statusadmin'  => 'supp_tokobangunan',
        ]);

        statusadmin::create([
            'id'  => '7',
            'statusadmin'  => 'lpspenerbit',
        ]);

        statusadmin::create([
            'id'  => '8',
            'statusadmin'  => 'operator',
        ]);

        statusadmin::create([
            'id'  => '9',
            'statusadmin'  => 'dinas',
        ]);


//======================== ===================================================================================
//======================== ===================================================================================
strukturdinas::create([
    'judul' => 'Struktur Dinas Pekerjaan Umum Dan Penataan Ruang Pemerintah Kabupaten Blora',
    'peraturan' => '01_kelembagaan/01_dinas/Struktur_Organisasi_PUPR_Blora.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

// strukturdinas::create([
//     'judul' => 'Struktur Dinas Pekerjaan Umum Dan Penataan Ruang Pemerintah Kabupaten Blora',
//     'peraturan' => 'struktur/01_dinas/STRUKTUR_DPUPR_KABUPATEN_BLORA.pdf',
//     'created_at' => Carbon::now(),
//     'updated_at' => Carbon::now(),
//     'deleted_at' => null, // Jika Anda menggunakan soft deletes
// ]);


//======================== ===================================================================================
renstra::create([
    'judul' => 'Rencana Strategis Pemerintah Kabupaten Bandung Barat',
    'peraturan' => '01_kelembagaan/02_renstra/RENSTRA_DPUPR_KAB_BLORA.pdf',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================
tupoksi::create([
    'judul' => 'Tupoksi Program Dan Jasa Konstruksi DPUPR Kab Blora',
    'peraturan' => '01_kelembagaan/03_tupoksi/TUPOKSI_JASA _KONSTRUKSI.pdf',
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
    'no_pengesahan' => 'AHU-0049177-AH.01.14',
    // 'tahunpilihan_id' => 4, // Ganti dengan ID yang sesuai
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
    'no_pengesahan' => null,
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => 'AHU-0006809-AH.01.16',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => 'AHU-0005350-AH.01.17',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => 'AHU-0042025-AH.01.14',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => 'AHU-0011469-AH.01.16',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => 'AHU-0004908-AH.01.14',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => 'AHU-0022831-AH.01.16',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => 'AHU-0012312-AH.01.16',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => '72/CV/2018/PN.BLA',
    // 'tahunpilihan_id' => 4,
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
    'no_pengesahan' => '72/CV/2018/PN.BLA',
    // 'tahunpilihan_id' => 3,
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
    'no_pengesahan' => '72/CV/2018/PN.BLA',
    // 'tahunpilihan_id' => 2,
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


//======================== ===================================================================================
// DATA NAMA SEKOLAH MAS JAKI BLORA

allskktenagakerjablora::create([
    'agendaskk_id'            => 1,
    'user_id'                       => 1,
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja Jenjang 4',
    'tempatlahir' => 'Bojonegoro',
    'ttl' => '1989-04-14',
    'jeniskelamin' => 'Laki-laki',
    'nik' => '3522251404890001',
    'alamat' => 'RT 5 RW 7 dukuh cepu kidul,kelurahan cepu,kec.cepu,kab.blora,jateng',
    'notelepon' => '087730573343',
    'email' => 'arifwahyudicc548@gmail.com',
    'jenjangpendidikan_id' => 3,
    'namasekolah_id' => 23,
    'tahunlulus' => '2007',
    'tahunpilihan_id' => 5,
    'uploadktp' => 'https://drive.google.com/open?id=1N_6cVJ44YPAzK8Kr5qCQuiCfSXTkB9n6',
    'uploadfoto' => 'https://drive.google.com/open?id=1FNHTKVU6oowro4CJlzLpj3FG-YdRi6ki',
    'uploadijazah' => 'https://drive.google.com/open?id=14IoOuj_gp6LDGGnsrha11DARikUWnDHe',
    'uploadpengalaman' => 'https://drive.google.com/open?id=1rWXn8FTSBirY94dqrT-T8au7R5bWaFrL',
    'uploadnpwp' => 'https://drive.google.com/open?id=1-3gPp9RYiRCWu1fjqskNzdIFtnzFcBH4',
    'uploaddaftarriwayathidup' => 'https://drive.google.com/open?id=1plhsgum_GVs_HLtVu--Ke7bku8eKfDEU',
    'namaasosiasi' => 'Perorangan',
    'punyaskk' => 'TIDAK',
    'punyasiki' => 'TIDAK',
    'siappatuh' => 'BERSEDIA',
    'verifikasipu' => 'LULUS',
    'verifikasilps' => 'LULUS',
]);

allskktenagakerjablora::create([
    'agendaskk_id'            => 1,
    'user_id'                       => 2,
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja Jenjang 4',
    'tempatlahir' => 'Bojonegoro',
    'ttl' => '1989-04-14',
    'jeniskelamin' => 'Laki-laki',
    'nik' => '3522251404890034',
    'alamat' => 'RT 5 RW 7 dukuh cepu kidul,kelurahan cepu,kec.cepu,kab.blora,jateng',
    'notelepon' => '087730573343',
    'email' => 'arifwahyudicc548@gmail.com',
    'jenjangpendidikan_id' => 3,
    'namasekolah_id' => 23,
    'tahunlulus' => '2007',
    'tahunpilihan_id' => 5,
    'uploadktp' => 'https://drive.google.com/open?id=1N_6cVJ44YPAzK8Kr5qCQuiCfSXTkB9n6',
    'uploadfoto' => 'https://drive.google.com/open?id=1FNHTKVU6oowro4CJlzLpj3FG-YdRi6ki',
    'uploadijazah' => 'https://drive.google.com/open?id=14IoOuj_gp6LDGGnsrha11DARikUWnDHe',
    'uploadpengalaman' => 'https://drive.google.com/open?id=1rWXn8FTSBirY94dqrT-T8au7R5bWaFrL',
    'uploadnpwp' => 'https://drive.google.com/open?id=1-3gPp9RYiRCWu1fjqskNzdIFtnzFcBH4',
    'uploaddaftarriwayathidup' => 'https://drive.google.com/open?id=1plhsgum_GVs_HLtVu--Ke7bku8eKfDEU',
    'namaasosiasi' => 'Perorangan',
    'punyaskk' => 'TIDAK',
    'punyasiki' => 'TIDAK',
    'siappatuh' => 'BERSEDIA',
    'verifikasipu' => 'LULUS',
    'verifikasilps' => 'TIDAK LULUS',
]);

allskktenagakerjablora::create([
    'agendaskk_id'            => 1,
    'user_id'                       => 3,
    'jabatankerja' => 'Personil Keselamatan dan Kesehatan Kerja Jenjang 4',
    'tempatlahir' => 'Bojonegoro',
    'ttl' => '1989-04-14',
    'jeniskelamin' => 'Laki-laki',
    'nik' => '3522251404890043',
    'alamat' => 'RT 5 RW 7 dukuh cepu kidul,kelurahan cepu,kec.cepu,kab.blora,jateng',
    'notelepon' => '087730573343',
    'email' => 'arifwahyudicc548@gmail.com',
    'jenjangpendidikan_id' => 3,
    'namasekolah_id' => 23,
    'tahunlulus' => '2007',
    'tahunpilihan_id' => 5,
    'uploadktp' => 'https://drive.google.com/open?id=1N_6cVJ44YPAzK8Kr5qCQuiCfSXTkB9n6',
    'uploadfoto' => 'https://drive.google.com/open?id=1FNHTKVU6oowro4CJlzLpj3FG-YdRi6ki',
    'uploadijazah' => 'https://drive.google.com/open?id=14IoOuj_gp6LDGGnsrha11DARikUWnDHe',
    'uploadpengalaman' => 'https://drive.google.com/open?id=1rWXn8FTSBirY94dqrT-T8au7R5bWaFrL',
    'uploadnpwp' => 'https://drive.google.com/open?id=1-3gPp9RYiRCWu1fjqskNzdIFtnzFcBH4',
    'uploaddaftarriwayathidup' => 'https://drive.google.com/open?id=1plhsgum_GVs_HLtVu--Ke7bku8eKfDEU',
    'namaasosiasi' => 'Perorangan',
    'punyaskk' => 'TIDAK',
    'punyasiki' => 'TIDAK',
    'siappatuh' => 'BERSEDIA',
    'verifikasipu' => 'TIDAK LULUS',
    'verifikasilps' => 'TIDAK LULUS',
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
// PAKET KONSULTASI TENDER MAS JAKI BLORA

satuanhargamaterial::create([
    'uraian' => 'Agregat Pokok',
    'satuan' => 'M3',
    'besaran' => '322200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Agregat Pengunci',
    'satuan' => 'M3',
    'besaran' => '322200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Agregat Penutup',
    'satuan' => 'Kg',
    'besaran' => '239',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Angkur M16 panjang 50 cm',
    'satuan' => 'Buah',
    'besaran' => '28600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Asbes gelombang',
    'satuan' => 'Lembar',
    'besaran' => '112200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Baja L 40.40.4',
    'satuan' => 'Kg',
    'besaran' => '18000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Banner plastik 0,6 x 0,8 m2',
    'satuan' => 'M2',
    'besaran' => '133900',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Batu kerikil uk. 2-3 cm, 4-5 cm dan 5-7 cm',
    'satuan' => 'M3',
    'besaran' => '329200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Bentonite',
    'satuan' => 'Kg',
    'besaran' => '3960',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Besi strip',
    'satuan' => 'Kg',
    'besaran' => '17600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Cuka Bibit',
    'satuan' => 'Liter',
    'besaran' => '26800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Dinding triplek 4mm',
    'satuan' => 'Lembar',
    'besaran' => '70700',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Dolken kayu φ 8- 10/400 cm',
    'satuan' => 'M1',
    'besaran' => '14600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Floor lantai (Beton lantai kerja)',
    'satuan' => 'M3',
    'besaran' => '915506',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Fondasi pasangan batu',
    'satuan' => 'M3',
    'besaran' => '803126',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Frame allum L.10.1',
    'satuan' => 'Kg',
    'besaran' => '17600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Frame besi Kaca Nako',
    'satuan' => 'Daun',
    'besaran' => '20460',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Frame besi L.30.30.3',
    'satuan' => 'Kg',
    'besaran' => '17600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Geomembran t = 1,5 mm',
    'satuan' => 'M2',
    'besaran' => '11550',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Geosynthetic Liner (GCL)',
    'satuan' => 'M2',
    'besaran' => '11550',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Geotextil (> 100 s/d 400 gr/m2)',
    'satuan' => 'M2',
    'besaran' => '11550',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'GRC pelat, t=4mm, uk 122x244 cm',
    'satuan' => 'Lembar',
    'besaran' => '70000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Jendela naco',
    'satuan' => 'Buah',
    'besaran' => '80300',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kaca Polos tebal 5 mm',
    'satuan' => 'M2',
    'besaran' => '133900',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kaso 5/7 kayu kelas II (Perancah)',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kawat Duri Silet BTO 30',
    'satuan' => 'M1',
    'besaran' => '47200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kawat jaring panjang 2,4 m dan aksesoris',
    'satuan' => 'Lembar',
    'besaran' => '92800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kawat seng 3mm',
    'satuan' => 'Kg',
    'besaran' => '26800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kayu papan 3/20 cm',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kayu perancah',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Tiang kayu 5/7 (II) T= 3 m',
    'satuan' => 'M3',
    'besaran' => '1976000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kerikil (Maks 30mm)',
    'satuan' => 'Kg',
    'besaran' => '244',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Kolom beton pracetak',
    'satuan' => 'Batang',
    'besaran' => '370000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Koral Beton',
    'satuan' => 'M3',
    'besaran' => '329200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Makadam (batu pecah 5/7)',
    'satuan' => 'M3',
    'besaran' => '301600',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Marmer graphir 12x12 cm',
    'satuan' => 'Buah',
    'besaran' => '532200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Multiplek tebal 18 mm',
    'satuan' => 'Lembar',
    'besaran' => '208333',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Multiplek tebal 9 mm',
    'satuan' => 'Lembar',
    'besaran' => '123700',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku',
    'satuan' => 'Kg',
    'besaran' => '25200',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku 5 inch',
    'satuan' => 'Kg',
    'besaran' => '16400',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku 5 inci',
    'satuan' => 'Kg',
    'besaran' => '16400',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku 7 cm',
    'satuan' => 'Kg',
    'besaran' => '16400',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargamaterial::create([
    'uraian' => 'Paku asbes',
    'satuan' => 'Kg',
    'besaran' => '21800',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

//======================== ===================================================================================
// SATUAN HARGA UPAH MAS JAKI BLORA
satuanhargaupahtenagakerja::create([
    'uraian' => 'Pekerja',
    'kode' => 'L.01',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang batu/tembok',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang kayu',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang besi/besi beton',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang cat/pelitur',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pipa',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang penganyam bronjong',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang tebas',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang las',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang las geotextile',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang listrik/ elektronik',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang alumunium',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang kaca',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang Ereksi',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang tanam',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tukang pemelihara taman',
    'kode' => 'L.02',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Kepala tukang',
    'kode' => 'L.03',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Mandor',
    'kode' => 'L.04',
    'satuan' => 'Orang/Hari',
    'besaran' => '133000.00',
    'besaranperjam' => '19000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Juru ukur',
    'kode' => 'L.05',
    'satuan' => 'Orang/Hari',
    'besaran' => '106000.00',
    'besaranperjam' => '15143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu juru ukur',
    'kode' => 'L.06',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000.00',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Mekanik alat berat',
    'kode' => 'L.07',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Operator alat berat',
    'kode' => 'L.08',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Pembantu operator',
    'kode' => 'L.09',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000.00',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Supir truk',
    'kode' => 'L.10',
    'satuan' => 'Orang/Hari',
    'besaran' => '122000.00',
    'besaranperjam' => '17429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Kenek truk',
    'kode' => 'L.11',
    'satuan' => 'Orang/Hari',
    'besaran' => '96000.00',
    'besaranperjam' => '13714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli utama',
    'kode' => 'L.12a',
    'satuan' => 'Orang/Hari',
    'besaran' => '300000.00',
    'besaranperjam' => '42857.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli madya',
    'kode' => 'L.12b',
    'satuan' => 'Orang/Hari',
    'besaran' => '234000.00',
    'besaranperjam' => '33429.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli muda',
    'kode' => 'L.12c',
    'satuan' => 'Orang/Hari',
    'besaran' => '130000.00',
    'besaranperjam' => '18571.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga ahli pratama',
    'kode' => 'L.12d',
    'satuan' => 'Orang/Hari',
    'besaran' => '120000.00',
    'besaranperjam' => '17143.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Narasumber pejabat eselon II',
    'kode' => 'L.13a',
    'satuan' => 'Orang/Hari',
    'besaran' => '7000000.00',
    'besaranperjam' => '1000000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Narasumber pejabat eselon III',
    'kode' => 'L.13b',
    'satuan' => 'Orang/Hari',
    'besaran' => '6300000.00',
    'besaranperjam' => '900000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Narasumber praktisi',
    'kode' => 'L.13c',
    'satuan' => 'Orang/Hari',
    'besaran' => '11900000.00',
    'besaranperjam' => '1700000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga terampil teknisi',
    'kode' => 'L.14a',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga terampil operator',
    'kode' => 'L.14b',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Tenaga terampil operator',
    'kode' => 'L.14c',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaupahtenagakerja::create([
    'uraian' => 'Lainnya',
    'kode' => 'L.15',
    'satuan' => 'Orang/Hari',
    'besaran' => '110000.00',
    'besaranperjam' => '15714.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);


//======================== ===================================================================================
// SATUAN HARGA PERALATAN MAS JAKI BLORA
satuanhargaperalatan::create([
    'uraian' => 'Linggis (baja keras)/bh',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '50000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pahat beton (baja keras)',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '50000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Palu/godam (baja keras)/bh',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '50000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa pipe support',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '1900',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa scaffolding',
    'kode' => null,
    'satuan' => 'Buah',
    'besaran' => '10000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Pancang Mini Pile Driver (Vibrator) Hammer 500 kg (10 HP)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '413228.39',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat Pancang Mini Pile Driver (Vibratory) Hammer 50 kg (1 HP)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '413228.39',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bender baja beton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '268819.47',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 20 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 30 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 40 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bor: Auger ∅ 50 cm',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Cutter',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '325462.24',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane Truck 3 T',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cutter besi beton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '268819.47',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Cutter baja beton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '268819.47',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Flat deck truck kap 7 ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '1991352.50',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Gergaji Besi (Baja Keras)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack  Hammer  Drill- 1,5  KW  +  Genset  3 KWH',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack  Hammer  Drill 2,5  KW  +  Genset  5 KW',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer (5 KW)+ Genset (12 HP)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Jack hammer dan genset; 12 HP',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Kunci momen',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '286000.86',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Linggis (baja keras)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las Geotextile',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '894923.85',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Molen 1m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mobile crane  ≤  3 ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen 0,35 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen/Beton 0,35 m3 + Bahan',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen 0,35 m3 + Automatic feeder',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen kapasitas 0,35 m3 termasuk feeder',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen/Beton mixer 0,35 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Molen/Beton mixer 0,35 m3 dilengkapi Automatic Feeder',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '554168.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Palu/godam',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Peralatan potong pipa T1/manual (gergaji) / saw',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '1900.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Peralatan potong pipa T2/mekanik / cilinder saw',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '1900.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa    beton   ∅3", 140KW; 180 bar, T = 75 m / H =150',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa  beton  ∅2,5", 20KW; 20 bar, T = 18 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton ∅  2,5", 75KW; 120 bar, T= 50 m/H=80 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa beton φ 1,5"; 5 KW; 8 bar; T = 5 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '6311421.79',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa  sedot  pasir, diesel 7,5 KW; 5',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa lumpur diesel 10 KW; 5"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pompa lumpur diesel 7,5 KW; 4"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Alat Pemasangan',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa  Tripot/Tackel  & handle crane 2T',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '345000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa crane 2 T',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa excavator type 225 kapasitas 0,5 - 1,0 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2762325.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa excavator type kapasitas 0,5 -1,0 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2762325.48',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Genset 5 KW',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2206866.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Mesin Hydroseeding 2000L',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '264164.10',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Pompa Sedot  Ø 5”',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '370190.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Tripot/Tackel',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '345000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Water Truck*)',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '2284246.61',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper  Kodok  150 kg',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper D-Drum 550 kg',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper Kuda 70 kg',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stamper Smooth Drum 1,5 Ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '339533.36',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stang bor, batang bor diameter 1 1/4"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '105000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stang bor, batang bor diameter 4"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '105000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Stang bor, batang bor diameter 8"',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '110000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandon Air kap. 2 m3',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Theodolit',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tower crane arm 30 m',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tripod tinggi 7 m kap 2 ton',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '345000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Vibrator',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '357769.29',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Waterpass',
    'kode' => null,
    'satuan' => 'Hari',
    'besaran' => '100000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bull Dozer',
    'kode' => 'E04',
    'satuan' => 'Jam',
    'besaran' => '651069.74',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Compressor',
    'kode' => 'E05',
    'satuan' => 'Jam',
    'besaran' => '157118.99',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck',
    'kode' => 'E09',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Motor Grader',
    'kode' => 'E13',
    'satuan' => 'Jam',
    'besaran' => '404725.97',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Track Loader',
    'kode' => 'E14',
    'satuan' => 'Jam',
    'besaran' => '372272.12',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Wheel Loader',
    'kode' => 'E15',
    'satuan' => 'Jam',
    'besaran' => '472750.77',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandem Roller',
    'kode' => 'E17',
    'satuan' => 'Jam',
    'besaran' => '378192.54',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Vibratory Roller',
    'kode' => 'E19a',
    'satuan' => 'Jam',
    'besaran' => '74796.56',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Water Tanker',
    'kode' => 'E23',
    'satuan' => 'Jam',
    'besaran' => '326320.94',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asp. Distributor',
    'kode' => 'E41',
    'satuan' => 'Jam',
    'besaran' => '316602.16',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat las Listrik',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat pancang Hidraulik Pile Driver 2 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '59032.63',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Alat pancang Hidraulik Pile Driver 3 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '59032.63',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'AMP',
    'kode' => 'E01a',
    'satuan' => 'Jam',
    'besaran' => '8809318.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Distributor',
    'kode' => 'E41',
    'satuan' => 'Jam',
    'besaran' => '316602.16',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Asphalt Finisher',
    'kode' => 'E02',
    'satuan' => 'Jam',
    'besaran' => '1560100.19',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 100 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 120 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 60 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Bored Pile Machine (Hidraulik) Auger ø 80 cm',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin pengeboran',
    'kode' => 'E50',
    'satuan' => 'Jam',
    'besaran' => '441754.72',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 20”; 5,5HP',
    'kode' => 'E87',
    'satuan' => 'Jam',
    'besaran' => '36946.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 30”; 10 HP',
    'kode' => 'E87',
    'satuan' => 'Jam',
    'besaran' => '36946.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Chainsaw 30”; 7,5HP',
    'kode' => 'E87',
    'satuan' => 'Jam',
    'besaran' => '36946.35',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Compressor',
    'kode' => 'E05',
    'satuan' => 'Jam',
    'besaran' => '157118.99',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Pump',
    'kode' => 'E28',
    'satuan' => 'Jam',
    'besaran' => '901631.68',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Concrete Vibrator',
    'kode' => 'E20',
    'satuan' => 'Jam',
    'besaran' => '47167.54',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane Mobile 7 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 10 Ton, Winch 12 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 3 Ton, Winch 5 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 5 Ton, Winch 8 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crane truck 8 Ton, Winch 10 Ton *)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crawler Crane 10 Ton + ladder 14 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Crawler Crane 20 Ton + ladder 14 ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer 1 Ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '132527.17',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer 2 Ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '132527.17',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Driver Hammer 3 Ton',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '132527.17',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck 1',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck 2',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Dump Truck 3',
    'kode' => 'E08',
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Excavator  (Std.);  Bucket 0,55 m3; 95 HP *)',
    'kode' => 'E10',
    'satuan' => 'Jam',
    'besaran' => '394617.93',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Genset',
    'kode' => 'E12',
    'satuan' => 'Jam',
    'besaran' => '315266.70',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin bor',
    'kode' => 'E71',
    'satuan' => 'Jam',
    'besaran' => '100000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 150 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 250 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 350 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Las listrik 500 A',
    'kode' => 'E58',
    'satuan' => 'Jam',
    'besaran' => '127846.26',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mobil sedot lumpur kapasitas 3 m3',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '229571.18',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'P. Tyre Roller',
    'kode' => 'E18',
    'satuan' => 'Jam',
    'besaran' => '478124.71',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Pressure Grout machine 30 KW; 60 - 75 bar (D)',
    'kode' => null,
    'satuan' => 'Jam',
    'besaran' => '157118.99',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa crane kapasitas 1 ton',
    'kode' => 'E07',
    'satuan' => 'Jam',
    'besaran' => '539102.45',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Tandem Roller',
    'kode' => 'E17',
    'satuan' => 'Jam',
    'besaran' => '37819254',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Three Wheel Roller',
    'kode' => 'E16',
    'satuan' => 'Jam',
    'besaran' => '198152.67',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Wheel Loader',
    'kode' => 'E15',
    'satuan' => 'Jam',
    'besaran' => '472750.77',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing Pipa Baja Diameter 30 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing Pipa Baja Diameter 40 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing Pipa Baja Diameter 50 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Casing PVC Diameter 20 cm',
    'kode' => null,
    'satuan' => 'm1',
    'besaran' => '10000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa Lahan',
    'kode' => null,
    'satuan' => 'm2',
    'besaran' => '50000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Sewa crane',
    'kode' => null,
    'satuan' => 'Unit/Hari',
    'besaran' => '3773717.15',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);

satuanhargaperalatan::create([
    'uraian' => 'Mesin Poles',
    'kode' => null,
    'satuan' => 'Unit/Hari',
    'besaran' => '150000.00',
    // 'keterangan' => 'AHSP Kab Blora Tahun 2025',
]);


// garut

//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA
hspdivisi::create([
    'id' => 1,
    'hspdivisi' => 'Persiapan Lapangan/Site Work',
]);

hspdivisi::create([
    'id' => 2,
    'hspdivisi' => 'Pekerjaan Struktur',
]);

hspdivisi::create([
    'id' => 3,
    'hspdivisi' => 'Pekerjaan Arsitektur',
]);

hspdivisi::create([
    'id' => 4,
    'hspdivisi' => 'Pekerjaan Lansekap',
]);

hspdivisi::create([
    'id' => 5,
    'hspdivisi' => 'Pekerjaan Mekanikal Elektrikal',
]);

hspdivisi::create([
    'id' => 6,
    'hspdivisi' => 'Pekerjaan Plambing',
]);

hspdivisi::create([
    'id' => 7,
    'hspdivisi' => 'Jalan Pada Permukiman',
]);

hspdivisi::create([
    'id' => 8,
    'hspdivisi' => 'Drainase Jalan',
]);

hspdivisi::create([
    'id' => 9,
    'hspdivisi' => 'Pekerjaan Jaringan Pipa di Luar Bangunan Gedung',
]);


//======================== ===================================================================================
// HSP PAKET HARGA MAS JAKI BLORA
hsppaket::create([
    'id' => 1,
    'hspdivisi_id' => 1,
    'hsppaket' => 'Pekerjaan Persiapan',
]);

hsppaket::create([
    'id' => 2,
    'hspdivisi_id' => 1,
    'hsppaket' => 'Pekerjaan Galian Tanah',
]);

hsppaket::create([
    'id' => 3,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN TIMBUNAN DAN PEMADATAN (TERMASUK PERATAAN DAN PERAPIHAN)',
]);

hsppaket::create([
    'id' => 4,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN ANGKUTAN MATERIAL DAN/ATAU HASIL GALIAN',
]);

hsppaket::create([
    'id' => 5,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN GEOTEKSTIL DAN GEOMEMBRAN',
]);

hsppaket::create([
    'id' => 6,
    'hspdivisi_id' => 1,
    'hsppaket' => 'PEKERJAAN PEMBONGKARAN',
]);

// PAKET PEKERJAAN DIVISI 2
// hsppaket::create([
//     'id' => 7,
//     'hspdivisi_id' => 2,
//     'hsppaket' => 'PEKERJAAN RANGKA ATAP',
// ]);

// hsppaket::create([
//     'id' => 8,
//     'hspdivisi_id' => 2,
//     'hsppaket' => 'PEKERJAAN STRUKTUR BETON',
// ]);

// hsppaket::create([
//     'id' => 9,
//     'hspdivisi_id' => 2,
//     'hsppaket' => 'PEKERJAAN STRUKTUR BAJA',
// ]);

// hsppaket::create([
//     'id' => 10,
//     'hspdivisi_id' => 2,
//     'hsppaket' => 'PEKERJAAN STRUKTUR BETON PRACETAK',
// ]);

// hsppaket::create([
//     'id' => 11,
//     'hspdivisi_id' => 2,
//     'hsppaket' => 'PEKERJAAN STRUKTUR BETON PRATEGANG',
// ]);

// hsppaket::create([
//     'id' => 12,
//     'hspdivisi_id' => 2,
//     'hsppaket' => 'PEKERJAAN STRUKTUR KAYU',
// ]);

// hsppaket::create([
//     'id' => 13,
//     'hspdivisi_id' => 2,
//     'hsppaket' => 'PEKERJAAN DINDING PENAHAN TANAH',
// ]);

//======================== ===================================================================================
// HSP PAKET HARGA MAS JAKI BLORA
hspkodepekerjaan::create([
    'id' => 1,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pembuatan pagar proyek',
]);

hspkodepekerjaan::create([
    'id' => 2,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Alat dan/atau sarana penunjang',
]);

hspkodepekerjaan::create([
    'id' => 3,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Pembersihan dan pengupasan permukaan tanah',
]);

hspkodepekerjaan::create([
    'id' => 4,
    'hsppaket_id' => 1,
    'kodepekerjaan' => '4',
    'namapekerjaan' => 'Pengukuran dan pasangan bouwplank',
]);


//======================== ===================================================================================
// HSP PAKET HARGA MAS JAKI BLORA
hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '1',
    'subhargadiv1_id' => 1,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara dari kayu tinggi 2 meter',
    'hargasatuan' => '380843.37',
]);
hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '2',
    'subhargadiv1_id' => 2,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara dari seng gelombang rangka kayu tinggi 2 meter ',
    'hargasatuan' => '295990.26',
]);
hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '3',
    'subhargadiv1_id' => 3,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara dari kawat duri tinggi 2 meter',
    'hargasatuan' => '1254695.60',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '4',
    'subhargadiv1_id' => 4,
    'jenispekerjaan' => 'Pembuatan 1 m’ pagar sementara seng gelombang rangka baja L.40.40.4, tinggi pagar 1,8 m’ ',
    'hargasatuan' => '550180.75',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '5',
    'subhargadiv1_id' => 5,
    'jenispekerjaan' => 'Pembuatan 1 m2 pagar BRC galvanis’ ',
    'hargasatuan' => '11395.20',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 1,
    'kode' => '6',
    'subhargadiv1_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m2  Panel Beton Pracetak 50x50x240 untuk Pagar',
    'hargasatuan' => '605010.56',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '1',
    'subhargadiv1_id' => 8,
    'jenispekerjaan' => '1 buah papan nama pekerjaan ukuran 0,8x1,2 menggunakan multiflex 18 mm, frame besi siku dan tiang kayu 8/12',
    'hargasatuan' => '1028388.41',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '2',
    'subhargadiv1_id' => 9,
    'jenispekerjaan' => '1 buah papan nama pekerjaan ukuran 0,6x0,8 menggunakan multiplex 10 mm, frame allumunium siku & tiang kayu 5/7, printing banner plastik',
    'hargasatuan' => '488860.90',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '3',
    'subhargadiv1_id' => 10,
    'jenispekerjaan' => 'Pembuatan 1 m2 kantor sementara/rumah jaga/gudang semen dan peralatan lantai plesteran, dinding setengah tembok',
    'hargasatuan' => '1336764.00',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '4',
    'subhargadiv1_id' => 11,
    'jenispekerjaan' => 'Pembuatan 1 m2 direksi keet (Kantor), los kerja dan gudang*)',
    'hargasatuan' => '2265024.65',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 2,
    'kode' => '5',
    'subhargadiv1_id' => 12,
    'jenispekerjaan' => 'Pembuatan 1 m2 Jalan sementara Lapis Macadam',
    'hargasatuan' => '2262393.94',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '1',
    'subhargadiv1_id' => 13,
    'jenispekerjaan' => '1 m2 pembersihan dan pengupasan permukaan tanah (striping) s.d. tanaman ∅ 2 cm ',
    'hargasatuan' => '11291.50',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '2',
    'subhargadiv1_id' => 14,
    'jenispekerjaan' => 'Tebas tebang 1 m2 tanaman/tumbuhan ∅ < 5 cm ',
    'hargasatuan' => '3606.90',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '3',
    'subhargadiv1_id' => 15,
    'jenispekerjaan' => 'Tebas tebang 1 m2  tanaman/tumbuhan ∅  >5 s.d. 15 cm',
    'hargasatuan' => '6011.50',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '4',
    'subhargadiv1_id' => 15,
    'jenispekerjaan' => 'Tebas tebang 1 batang pohon/tumbuhan ∅  >15 s.d. 30 cm',
    'hargasatuan' => '6011.50',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '5',
    'subhargadiv1_id' => 15,
    'jenispekerjaan' => 'Tebas tebang 1 batang pohon/tumbuhan ∅ > 30 s.d 50 cm ',
    'hargasatuan' => '3982.82',
]);

hspkonstruksiumum::create([
    'hspdivisi_id' => 1,
    'hsppaket_id' => 1,
    'hspkodepekerjaan_id' => 3,
    'kode' => '5',
    'subhargadiv1_id' => 16,
    'jenispekerjaan' => 'Tebas  tebang  1  batang  pohon/tumbuhan  ∅   >  50  s.d  75  cm (diameter pohon diukur 1 m di atas permukaan tanah) ',
    'hargasatuan' => '23690.38',
]);


// ------------------------------------
// HARGA SUB DIVISI
subhargadiv1::create([
    'hspkonstruksiumum_id' => 1,
    'uraian' => 'Pekerja',
    'kode' => 'L.01',
    'satuan' => 'OH',
    'koefisien' => '0,600',
    'hargasatuan' => '96000',
    'jumlahharga' => '57.600,00',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 2 ===========================
hsppaket2::create([
    'id' => 1,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Rangka Atap',
]);

hsppaket2::create([
    'id' => 2,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Beton',
]);

hsppaket2::create([
    'id' => 3,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Baja',
]);

hsppaket2::create([
    'id' => 4,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Beton Pracetak',
]);

hsppaket2::create([
    'id' => 5,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Beton Prategang',
]);

hsppaket2::create([
    'id' => 6,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Struktur Kayu',
]);

hsppaket2::create([
    'id' => 7,
    'hspdivisi_id' => 2,
    'hsppaket2' => 'Pekerjaan Dinding Penahan Tanah',
]);


hspkodepekerjaan2::create([
    'id' => 1,
    'hsppaket2_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Rangka Atap Baja Ringan',
]);

hspkodepekerjaan2::create([
    'id' => 2,
    'hsppaket2_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Rangka Atap Kayu',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 1,
    'kode' => '1',
    'subhargadiv2_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 m2  Atap Pelana Rangka Atap Baja Ringan (Canai Dingin) profil C75',
    'hargasatuan' => '333267.61',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 1,
    'kode' => '2',
    'subhargadiv2_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m2  Atap Jurai/Limasan Rangka Atap Baja Ringan (Canai Dingin) Profil C75',
    'hargasatuan' => '339726.48',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 1,
    'kode' => '2.a',
    'subhargadiv2_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m2 Usuk dan Reng Rangka Baja Ringan',
    'hargasatuan' => '221558.70',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '1',
    'subhargadiv2_id' => 4,
    'jenispekerjaan' => 'Pemasangan  1  m3   Konstruksi  Kuda-kuda  Konvensional,  Kayu Kelas I, II dan III Bentang Sampai Dengan 6 Meter',
    'hargasatuan' => '17986408.00',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '2',
    'subhargadiv2_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m3 Konstruksi Kuda-kuda Expose, Kayu Kelas I',
    'hargasatuan' => '23606143.00',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '3',
    'subhargadiv2_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m3 Konstruksi Gordeng, Kayu kelas II',
    'hargasatuan' => '17123040.00',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '4',
    'subhargadiv2_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m2 Rangka Atap Genteng Keramik, Kayu kelas II',
    'hargasatuan' => '267844.39',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '5',
    'subhargadiv2_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m2 Rangka Atap Genteng Beton, Kayu Kelas II',
    'hargasatuan' => '296395.99',
]);

hspkonstruksiumum2::create([
    'hspdivisi_id' => 2,
    'hsppaket2_id' => 1,
    'hspkodepekerjaan2_id' => 2,
    'kode' => '6',
    'subhargadiv2_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m2 Rangka Atap Sirap, Kayu Kelas II',
    'hargasatuan' => '43684.30',
]);



// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 3 ===========================
hsppaket3::create([
    'id' => 1,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Penutup Atap',
]);

hsppaket3::create([
    'id' => 2,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Insulasi',
]);

hsppaket3::create([
    'id' => 3,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Aksesoris Atap',
]);

hsppaket3::create([
    'id' => 4,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Waterproofing',
]);

hsppaket3::create([
    'id' => 5,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Langit-langit (Plafon)',
]);

hsppaket3::create([
    'id' => 6,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Pasangan Dinding',
]);

hsppaket3::create([
    'id' => 7,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Plesteran dan Acian',
]);

hsppaket3::create([
    'id' => 8,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Pengecatan dan Pelituran',
]);

hsppaket3::create([
    'id' => 9,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Penutup Lantai',
]);

hsppaket3::create([
    'id' => 10,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Penutup Dinding',
]);

hsppaket3::create([
    'id' => 11,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Pintu dan Jendela',
]);

hsppaket3::create([
    'id' => 12,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Kaca',
]);

hsppaket3::create([
    'id' => 13,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Besi dan Alumunium',
]);

hsppaket3::create([
    'id' => 14,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Kayu',
]);

hsppaket3::create([
    'id' => 16,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Signage',
]);

hsppaket3::create([
    'id' => 18,
    'hspdivisi_id' => 3,
    'hsppaket3' => 'Pekerjaan Sanitair',
]);

hspkodepekerjaan3::create([
    'id' => 1,
    'hsppaket3_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Atap Genteng',
]);

hspkodepekerjaan3::create([
    'id' => 2,
    'hsppaket3_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Atap Serat Semen Gelombang',
]);

hspkodepekerjaan3::create([
    'id' => 3,
    'hsppaket3_id' => 1,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Penutup Atap Lainnya',
]);

hspkodepekerjaan3::create([
    'id' => 4,
    'hsppaket3_id' => 5,
    'kodepekerjaan' => '4',
    'namapekerjaan' => 'Langit=langit (Plafon) Akustik',
]);

hspkodepekerjaan3::create([
    'id' => 5,
    'hsppaket3_id' => 5,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Langit-langit PLAFON) Lainnya',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '1',
    'subhargadiv3_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Palentong Kecil',
    'hargasatuan' => '104607.25',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '2',
    'subhargadiv3_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Kodok Glazuur',
    'hargasatuan' => '100207.25',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '3.a',
    'subhargadiv3_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Palentong Besar Uk. 32,5 cm x 23,5 cm Jarak Reng 26 cm',
    'hargasatuan' => '145505.25',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '4',
    'subhargadiv3_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 m2 Atap Genteng Beton',
    'hargasatuan' => '162235.59',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '5',
    'subhargadiv3_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Palentong Kecil',
    'hargasatuan' => '138056.05',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '6',
    'subhargadiv3_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Kodok Glazuur',
    'hargasatuan' => '147076.05',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '7',
    'subhargadiv3_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Palentong Besar',
    'hargasatuan' => '162256.05',
]);

hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 1,
    'hspkodepekerjaan3_id' => 1,
    'kode' => '8',
    'subhargadiv3_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m’ Nok/Bubung Genteng Beton',
    'hargasatuan' => '137970.80',
]);

// HANYA PERCOBAAN
hspkonstruksiumum3::create([
    'hspdivisi_id' => 3,
    'hsppaket3_id' => 5,
    'hspkodepekerjaan3_id' => 5,
    'kode' => '1',
    'subhargadiv3_id' => 9,
    'jenispekerjaan' => 'Pemasangan 1 m2 Langit-langit (Plafon) Akustik Ukuran 30 x 30 cm',
    'hargasatuan' => '76874.60',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 4 ===========================
hsppaket4::create([
    'id' => 1,
    'hspdivisi_id' => 4,
    'hsppaket4' => 'Pekerjaan Penanaman Tanaman',
]);

hsppaket4::create([
    'id' => 2,
    'hspdivisi_id' => 4,
    'hsppaket4' => 'Pekerjaan Pemeliharaan Tanaman',
]);

hspkodepekerjaan4::create([
    'id' => 1,
    'hsppaket4_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Penanaman Pohon',
]);

hspkodepekerjaan4::create([
    'id' => 2,
    'hsppaket4_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Penyiraman Pada Masa Pemeliharaan',
]);

hspkonstruksiumum4::create([
    'hspdivisi_id' => 4,
    'hsppaket4_id' => 1,
    'hspkodepekerjaan4_id' => 1,
    'kode' => '3',
    'subhargadiv4_id' => 1,
    'jenispekerjaan' => 'Penanaman 1 buah pohon sedang Ketapang Kencana (Terminalia mantaly) Diameter 3-5 cm, tinggi 3-6 meter, polybag 50 L',
    'hargasatuan' => '947274.90',
]);

hspkonstruksiumum4::create([
    'hspdivisi_id' => 4,
    'hsppaket4_id' => 1,
    'hspkodepekerjaan4_id' => 1,
    'kode' => '4',
    'subhargadiv4_id' => 2,
    'jenispekerjaan' => 'Penanaman 1 buah pohon besar Kamboja (Plumeria sp.) Diameter 7-15 cm, tinggi diatas 6 meter, polybag 100 L',
    'hargasatuan' => '2010149.55',
]);

hspkonstruksiumum4::create([
    'hspdivisi_id' => 4,
    'hsppaket4_id' => 2,
    'hspkodepekerjaan4_id' => 2,
    'kode' => '1',
    'subhargadiv4_id' => 3,
    'jenispekerjaan' => 'Penyiraman 1m2 area tanam untuk 1 hari (dengan selang plastik 3/4 inch)',
    'hargasatuan' => '317.24',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 5 ===========================
hsppaket5::create([
    'id' => 1,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Distribusi Jaringan Listrik',
]);

hsppaket5::create([
    'id' => 2,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Proteksi Petir',
]);

hsppaket5::create([
    'id' => 3,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Pencahayaan',
]);

hsppaket5::create([
    'id' => 4,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Elektronik',
]);

hsppaket5::create([
    'id' => 5,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Tata Udara',
]);

hsppaket5::create([
    'id' => 6,
    'hspdivisi_id' => 5,
    'hsppaket5' => 'Pekerjaan Sistem Proteksi Kebakaran',
]);

hspkodepekerjaan5::create([
    'id' => 1,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan kabel arus kuat (kabel, kabel tray/ladder)',
]);

hspkodepekerjaan5::create([
    'id' => 2,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Kabel Tray / Ladder',
]);

hspkodepekerjaan5::create([
    'id' => 3,
    'hsppaket5_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pemasangan panel listrik',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.26',
    'subhargadiv5_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 3 x 4 mm²',
    'hargasatuan' => '38717.80',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.35',
    'subhargadiv5_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 4 mm²',
    'hargasatuan' => '69457.30',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.36',
    'subhargadiv5_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 6 mm²',
    'hargasatuan' => '93365.80',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.37',
    'subhargadiv5_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 10 mm²',
    'hargasatuan' => '145479.40',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.38',
    'subhargadiv5_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 16 mm²',
    'hargasatuan' => '209235.40',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.39',
    'subhargadiv5_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 25 mm²',
    'hargasatuan' => '318876.80',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.40',
    'subhargadiv5_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 35 mm²',
    'hargasatuan' => '432682.80',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.41',
    'subhargadiv5_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 50 mm²',
    'hargasatuan' => '571313.60',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.42',
    'subhargadiv5_id' => 9,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 70 mm²',
    'hargasatuan' => '812174.00',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '1.43',
    'subhargadiv5_id' => 10,
    'jenispekerjaan' => 'Pemasangan 1 m’ Kabel NYY 4 x 94 mm²',
    'hargasatuan' => '1116916.90',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 1,
    'kode' => '12.4',
    'subhargadiv5_id' => 11,
    'jenispekerjaan' => 'Pemasangan 1 Unit Kabel Tray (Horizontal) 300 x 100 mm',
    'hargasatuan' => '401790.40',
]);

hspkonstruksiumum5::create([
    'hspdivisi_id' => 5,
    'hsppaket5_id' => 1,
    'hspkodepekerjaan5_id' => 2,
    'kode' => '4.a',
    'subhargadiv5_id' => 12,
    'jenispekerjaan' => 'Pemasangan 1 Unit Main Distribution Panel (MDP) Wall Mounted ukuran 60 x 100 x 25 Cm',
    'hargasatuan' => '3829710.50',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 6 ===========================
hsppaket6::create([
    'id' => 1,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Sistem Air Minum',
]);

hsppaket6::create([
    'id' => 2,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Grease trap',
]);

hsppaket6::create([
    'id' => 3,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Bak Kontrol',
]);

hsppaket6::create([
    'id' => 4,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Sistem Perpipaan Dalam Gedung',
]);

hsppaket6::create([
    'id' => 5,
    'hspdivisi_id' => 6,
    'hsppaket6' => 'Aksesoris Pipa',
]);

hsppaket6::create([
    'id' => 6,
    'hspdivisi_id' => 6,
    'hsppaket6' => '-',
]);

hspkodepekerjaan6::create([
    'id' => 1,
    'hsppaket6_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Roof water tank',
]);

hspkodepekerjaan6::create([
    'id' => 2,
    'hsppaket6_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pompa transfer dan booster',
]);

hspkodepekerjaan6::create([
    'id' => 3,
    'hsppaket6_id' => 2,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Grease trap',
]);

hspkodepekerjaan6::create([
    'id' => 4,
    'hsppaket6_id' => 3,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Bak Kontrol',
]);

hspkodepekerjaan6::create([
    'id' => 5,
    'hsppaket6_id' => 4,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pipa PVC',
]);

hspkodepekerjaan6::create([
    'id' => 6,
    'hsppaket6_id' => 4,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pipa Galvanis',
]);

hspkodepekerjaan6::create([
    'id' => 7,
    'hsppaket6_id' => 4,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Pipa PPR (PolyPropylene Random)',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '7',
    'subhargadiv6_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 0,7 m3',
    'hargasatuan' => '1781487.40',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '8',
    'subhargadiv6_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 1,5 m3',
    'hargasatuan' => '1781487.40',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '10',
    'subhargadiv6_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 3 m3',
    'hargasatuan' => '6334704.20',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 1,
    'kode' => '12',
    'subhargadiv6_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 buah Tangki Toren Kap. 5 m3',
    'hargasatuan' => '11434304.20',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '3',
    'subhargadiv6_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 Unit Pompa Booster 150 lpm; Vertical In Line –',
    'hargasatuan' => '58170080.10',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '4',
    'subhargadiv6_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 Unit Pompa Jet 27 lpm',
    'hargasatuan' => '49861724.00',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '6',
    'subhargadiv6_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 Unit Pompa Jet 100 lpm',
    'hargasatuan' => '4728724.00',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 1,
    'hspkodepekerjaan6_id' => 2,
    'kode' => '8.a',
    'subhargadiv6_id' => 8,
    'jenispekerjaan' => 'Pemasangan  1  Unit  Pompa  Sumbmersible ( Speed For Pump data = 10700 rpm, rateflow 5 m3/h, ratehead = 73 - 100 m  )',
    'hargasatuan' => '21030786.70',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 2,
    'hspkodepekerjaan6_id' => 3,
    'kode' => '2',
    'subhargadiv6_id' => 9,
    'jenispekerjaan' => 'Pemasangan 1 Unit Grease Trap Portable Stainless, Kap. 30 Liter',
    'hargasatuan' => '623877.10',
]);

hspkonstruksiumum6::create([
    'hspdivisi_id' => 6,
    'hsppaket6_id' => 3,
    'hspkodepekerjaan6_id' => 4,
    'kode' => null,
    'subhargadiv6_id' => 10,
    'jenispekerjaan' => 'Pemasangan 1 buah Bak Kontrol Pasangan Bata 30 cm x 30 cm Tinggi 35 cm dengan Tutup Beton',
    'hargasatuan' => '550029.70',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 7 ===========================
hsppaket7::create([
    'id' => 1,
    'hspdivisi_id' => 7,
    'hsppaket7' => 'Jalan Paving Block',
]);

hspkodepekerjaan7::create([
    'id' => 1,
    'hsppaket7_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Paving Block',
]);

hspkodepekerjaan7::create([
    'id' => 2,
    'hsppaket7_id' => 1,
    'kodepekerjaan' => '2',
    'namapekerjaan' => 'Pemasangan Kanstin',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '1',
    'subhargadiv7_id' => 1,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara manual',
    'hargasatuan' => '140093.25',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '1.a',
    'subhargadiv7_id' => 2,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara manual',
    'hargasatuan' => '193509.25',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '2',
    'subhargadiv7_id' => 3,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm 25 MPa untuk Jalan Akses/Penghubung (Jalan Kolektor) secara manual ',
    'hargasatuan' => '142403.25',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '2.a',
    'subhargadiv7_id' => 4,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm 25 MPa dan Pengunci Topi Uskup untuk Jalan Akses/Penghubung (Jalan Kolektor) secara manual ',
    'hargasatuan' => '248509.25',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '3',
    'subhargadiv7_id' => 5,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara semi mekanis',
    'hargasatuan' => '144481.72',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '3.a',
    'subhargadiv7_id' => 6,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm fc 20 MPa untuk Jalan Lingkungan (Jalan Lokal) secara semi mekanis',
    'hargasatuan' => '197897.72',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '4',
    'subhargadiv7_id' => 7,
    'jenispekerjaan' => 'Pemasangan 1 m2 Paving block (Blok Beton) Natural Tebal 6 cm 25 MPa untuk Jalan Akses/Penghubung (Jalan Kolektor) secara semi mekanis',
    'hargasatuan' => '146791.72',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 1,
    'kode' => '4.a',
    'subhargadiv7_id' => 8,
    'jenispekerjaan' => 'Pemasangan 1 m2 Pengunci Topi Uskup Tebal 6 cm fc 25 MPa untuk Jalan Akses/Penghubung (Jalan Kolektor) secara semi mekanis',
    'hargasatuan' => '252897.72',
]);

hspkonstruksiumum7::create([
    'hspdivisi_id' => 7,
    'hsppaket7_id' => 1,
    'hspkodepekerjaan7_id' => 2,
    'kode' => '1',
    'subhargadiv7_id' => 9,
    'jenispekerjaan' => 'Pemasangan  1  m1  Kanstin,  tebal  10x18x40  cm  untuk  Jalan Lingkungan (Jalan Lokal)',
    'hargasatuan' => '60570.37',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 8 ===========================
hsppaket8::create([
    'id' => 1,
    'hspdivisi_id' => 8,
    'hsppaket8' => null,
]);

hsppaket8::create([
    'id' => 2,
    'hspdivisi_id' => 8,
    'hsppaket8' => 'Saluran Buis Beton',
]);

hspkodepekerjaan8::create([
    'id' => 1,
    'hsppaket8_id' => 2,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Saluran Buis Beton',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '1',
    'subhargadiv8_id' => 1,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 30 - 100 cm',
    'hargasatuan' => '73291.41',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '2',
    'subhargadiv8_id' => 2,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 40 - 100 cm',
    'hargasatuan' => '95929.28',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '3',
    'subhargadiv8_id' => 3,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 50 - 100 cm',
    'hargasatuan' => '136723.65',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '4',
    'subhargadiv8_id' => 4,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 60 - 100 cm',
    'hargasatuan' => '204680.03',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '5',
    'subhargadiv8_id' => 5,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 80 - 100 cm',
    'hargasatuan' => '227324.33',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '6',
    'subhargadiv8_id' => 6,
    'jenispekerjaan' => '1 m’ Buis Beton 1/2 D 100 - 100 cm',
    'hargasatuan' => '248192.04',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '7',
    'subhargadiv8_id' => 7,
    'jenispekerjaan' => '1 m’ Buis Beton D 30 - 100 cm',
    'hargasatuan' => '139304.64',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '8',
    'subhargadiv8_id' => 8,
    'jenispekerjaan' => '1 m’ Buis Beton D 40 - 100 cm',
    'hargasatuan' => '196589.22',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '9',
    'subhargadiv8_id' => 9,
    'jenispekerjaan' => '1 m’ Buis Beton D 50 - 100 cm',
    'hargasatuan' => '287201.75',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '10',
    'subhargadiv8_id' => 10,
    'jenispekerjaan' => '1 m’ Buis Beton D 60 - 100 cm',
    'hargasatuan' => '381067.98',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '11',
    'subhargadiv8_id' => 11,
    'jenispekerjaan' => '1 m’ Buis Beton D 80 - 100 cm',
    'hargasatuan' => '405534.38',
]);

hspkonstruksiumum8::create([
    'hspdivisi_id' => 8,
    'hsppaket8_id' => 2,
    'hspkodepekerjaan8_id' => 1,
    'kode' => '12',
    'subhargadiv8_id' => 12,
    'jenispekerjaan' => '1 m’ Buis Beton D 100 - 100 cm',
    'hargasatuan' => '485505.48',
]);

// ============================================= LIST DAFTAR HARGA KONSTRUKSI UMUM DIVISI 9 ===========================
hsppaket9::create([
    'id' => 1,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Pipa PVC',
]);

hsppaket9::create([
    'id' => 2,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Pipa Galvanis',
]);

hsppaket9::create([
    'id' => 3,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Pipa HDPE/PE',
]);

hsppaket9::create([
    'id' => 7,
    'hspdivisi_id' => 9,
    'hsppaket9' => 'Aksesoris Pipa',
]);

hspkodepekerjaan9::create([
    'id' => 1,
    'hsppaket9_id' => 1,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Pipa PVC',
]);

hspkodepekerjaan9::create([
    'id' => 2,
    'hsppaket9_id' => 2,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Pipa Galvanis',
]);

hspkodepekerjaan9::create([
    'id' => 3,
    'hsppaket9_id' => 3,
    'kodepekerjaan' => '1',
    'namapekerjaan' => 'Pemasangan Pipa HDPE',
]);

hspkodepekerjaan9::create([
    'id' => 4,
    'hsppaket9_id' => 7,
    'kodepekerjaan' => '3',
    'namapekerjaan' => 'Pasangan Aksesoris Tee',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.a',
    'subhargadiv9_id' => 1,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 12,5 mm',
    'hargasatuan' => '29354.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.b',
    'subhargadiv9_id' => 2,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 25 mm',
    'hargasatuan' => '39254.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.c',
    'subhargadiv9_id' => 3,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 37,5 mm',
    'hargasatuan' => '53004.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.d',
    'subhargadiv9_id' => 4,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 50 mm',
    'hargasatuan' => '56854.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '1.e',
    'subhargadiv9_id' => 5,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 75 mm',
    'hargasatuan' => '86004.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 1,
    'hspkodepekerjaan9_id' => 1,
    'kode' => '2.a',
    'subhargadiv9_id' => 6,
    'jenispekerjaan' => 'Pasangan 1 m Pipa PVC Ø 100 mm',
    'hargasatuan' => '200973.30',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.a',
    'subhargadiv9_id' => 7,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 12,5 mm',
    'hargasatuan' => '82788.57',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.c',
    'subhargadiv9_id' => 8,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 37,5 mm',
    'hargasatuan' => '93055.23',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.d',
    'subhargadiv9_id' => 9,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 50 mm',
    'hargasatuan' => '110655.23',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1',
    'subhargadiv9_id' => 10,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 63 mm',
    'hargasatuan' => '121838.57',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 2,
    'hspkodepekerjaan9_id' => 2,
    'kode' => '1.e',
    'subhargadiv9_id' => 11,
    'jenispekerjaan' => 'Pasangan 1 m Pipa Galvanis Ø 75 mm',
    'hargasatuan' => '167121.90',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.a',
    'subhargadiv9_id' => 12,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 12,5 mm',
    'hargasatuan' => '21027.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.b',
    'subhargadiv9_id' => 13,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 37,5 mm',
    'hargasatuan' => '44677.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.c',
    'subhargadiv9_id' => 14,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 50 mm',
    'hargasatuan' => '53807.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '1.d',
    'subhargadiv9_id' => 15,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 75 mm',
    'hargasatuan' => '95827.60',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '2',
    'subhargadiv9_id' => 16,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE Ø 100 mm',
    'hargasatuan' => '137661.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 3,
    'hspkodepekerjaan9_id' => 3,
    'kode' => '4',
    'subhargadiv9_id' => 17,
    'jenispekerjaan' => 'Pasangan 1 m Pipa HDPE  Ø 150 mm',
    'hargasatuan' => '277630.10',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.a',
    'subhargadiv9_id' => 18,
    'jenispekerjaan' => 'Pasangan 1 Buah Tee galvanish Ø 12,5 mm',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.b',
    'subhargadiv9_id' => 19,
    'jenispekerjaan' => 'Pasangan 1 Buah Valve socket Ø 12,5 mm',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.c',
    'subhargadiv9_id' => 20,
    'jenispekerjaan' => 'Pasangan 1 Buah Clam sadle 2x 1,5 "',
    'hargasatuan' => '73608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.d',
    'subhargadiv9_id' => 21,
    'jenispekerjaan' => 'Pasangan 1 Buah Knee galvanish 0,5"',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.e',
    'subhargadiv9_id' => 22,
    'jenispekerjaan' => 'Pasangan 1 Buah Water moor kuningan 0,5"',
    'hargasatuan' => '54358.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.f',
    'subhargadiv9_id' => 23,
    'jenispekerjaan' => 'Pasangan 1 Buah Double nippel galvanish 0,5"',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.g',
    'subhargadiv9_id' => 24,
    'jenispekerjaan' => 'Pasangan 1 Buah Fouket socket galvanish 0,5"',
    'hargasatuan' => '68108.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.h',
    'subhargadiv9_id' => 25,
    'jenispekerjaan' => 'Pasangan 1 Buah Fouket socket galvanish 0,5"',
    'hargasatuan' => '57108.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.i',
    'subhargadiv9_id' => 26,
    'jenispekerjaan' => 'Pasangan 1 Buah Fit kran kuningan 0,5"',
    'hargasatuan' => '51608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.j',
    'subhargadiv9_id' => 27,
    'jenispekerjaan' => 'Pasangan 1 Buah Bok meter air + Logo',
    'hargasatuan' => '194608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.k',
    'subhargadiv9_id' => 28,
    'jenispekerjaan' => 'Pasangan 1 Buah Katup searah kuningan 0,5"',
    'hargasatuan' => '111008.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.l',
    'subhargadiv9_id' => 29,
    'jenispekerjaan' => 'Pasangan 1 Buah Plug kran kuningan 0,5"',
    'hargasatuan' => '117608.70',
]);

hspkonstruksiumum9::create([
    'hspdivisi_id' => 9,
    'hsppaket9_id' => 7,
    'hspkodepekerjaan9_id' => 4,
    'kode' => '1.m',
    'subhargadiv9_id' => 30,
    'jenispekerjaan' => 'Pasangan 1 Buah Fouket elbow galvanish 0,5"',
    'hargasatuan' => '51608.70',
]);

paketstatuspekerjaan::create([
    'id' => 1,
    'paketstatuspekerjaan' => 'Pekerjaan Konstruksi Tender',
]);

paketstatuspekerjaan::create([
    'id' => 2,
    'paketstatuspekerjaan' => 'Pekerjaan Konstruksi Non Tender',
]);

paketstatuspekerjaan::create([
    'id' => 3,
    'paketstatuspekerjaan' => 'Pekerjaan Konsultasi Konstruksi Tender',
]);

paketstatuspekerjaan::create([
    'id' => 4,
    'paketstatuspekerjaan' => 'Pekerjaan Konsultasi Konstruksi Non Tender',
]);


//==========================================================================================================
// DATA PAKET PEERJAAN MASJAKI
paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 1,
    'namapekerjaan'              => 'Rehabilitasi Checkdam Talokwohmojo Kec Ngawen Lanjutan',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV Restu Bumi Mustika',
    'nib'                        => '1105240037134',
    'nilaikontrak'               => 691260716.59,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => 'Agustus',
    'bulanselesai'               => 'Desember',
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 2,
    'namapekerjaan'              => 'BELANJA MODAL BANGUNAN KESEHATAN-BELANJA MODAL PAGAR',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV. REZEKY MUJI KONSTRUKSI',
    'nib'                        => '3011220047491',
    'nilaikontrak'               => 857589920.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => 'Oktober',
    'bulanselesai'               => 'Desember',
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'Pembangunan Saluran Pengendali Banjir Kecamatan Cepu Lanjutan',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV. KINAN KARYA GEMILANG',
    'nib'                        => '0260010050988',
    'nilaikontrak'               => 763241000.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => 'Juli',
    'bulanselesai'               => 'Desember',
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'Pembangunan Saluran Pengendali Banjir Ruas Jalan Sonokidul Kecamatan Kunduran',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV Restu Bumi Mustika',
    'nib'                        => '1105240037134',
    'nilaikontrak'               => 451076000.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => 'Agustus',
    'bulanselesai'               => 'Desember',
    'dinas'                      => 'Dinas Pekerjaan Umum dan Penataan Ruang'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'PEMBANGUNAN SARANA DAN PRASARANA DRAINASE LINGKUNGAN PERMUKIMAN KUMUH DRAINASE LINGKUNGAN RT 2 RW 9 KELURAHAN CEPU KECAMATAN CEPU KAB. BLORA',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV.KEMBAR DUA',
    'nib'                        => '0246000912019',
    'nilaikontrak'               => 161453878.91,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => 'Agustus',
    'bulanselesai'               => 'November',
    'dinas'                      => 'DINAS PERUMAHAN PEMUKIMAN DAN PERHUBUNGAN'
]);

paketpekerjaanmasjaki::create([
    'prosespaket_id'            => 1,
    'profiljenispekerjaan_id'    => 1,
    'paketstatuspekerjaan_id'    => 3,
    'namapekerjaan'              => 'Pembangunan Saluran Pengendali Banjir Kel. Kunduran Kec. Kunduran Lanjutan',
    'tahunpilihan_id'            => 4,
    'cvptpenyedia'               => 'CV. WIRATAMA GEMILANG',
    'nib'                        => 'N/A',
    'nilaikontrak'               =>  421000000.00,
    'sumberdana_id'              => 2,
    'jeniskontrak'               => 'Harga Satuan',
    'karakteristikkontrak'       => 'Tahun Tunggal', // Duplikat dihapus
    'bulanmulai'                 => 'Agustus',
    'bulanselesai'               => 'Desember',
    'dinas'                      => 'DINAS PEKERJAAN UMUM DAN PENATAAN RUANG'
]);

//==========================================================================================================
// DATA PESERTA PELATIHAN KAB BLORA JASA KONSTRUSI
pesertapelatihan::create([
    'agendapelatihan_id'            => 1,
    'user_id'                       => 1,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 2,
    'user_id'                       => 2,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 3,
    'user_id'                       => 3,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 1,
    'user_id'                       => 2,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);
pesertapelatihan::create([
    'agendapelatihan_id'            => 1,
    'user_id'                       => 3,
    'jenjangpendidikan_id'          => 2,
    'nik'                 => '3205270107200023',
    'jeniskelamin'                 => 'Laki-laki',
    'tanggallahir'                 => '2000-07-01',
    'notelepon'                 => '081321455855',
    'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    // 'instansi'                 => 'DPUPR Kabupaten Bandung Barat',
    'sertifikat'                 => null,
    'verifikasi'                 => 'SETUJU',
]);



//==========================================================================================================
// DATA BERITA

beritajakon::create([
    'judulberita' => 'Pelatihan dan Uji Kompetensi SKK Jenjang 4 bagi Tenaga Kerja Konstruksi di Kabupaten Blora',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora menggelar Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 bagi tenaga kerja konstruksi untuk meningkatkan kualitas dan profesionalisme sesuai standar nasional. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor konstruksi dengan pembekalan teori dan praktik oleh instruktur serta asesor kompetensi bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menegaskan pentingnya sertifikasi ini dalam meningkatkan daya saing tenaga kerja konstruksi, sejalan dengan regulasi pemerintah yang mewajibkan kepemilikan SKK. Salah satu peserta,  menyatakan bahwa pelatihan ini sangat bermanfaat dalam meningkatkan pemahaman dan keterampilannya di bidang konstruksi. Uji kompetensi dilakukan secara ketat untuk menilai pemahaman terhadap standar konstruksi, keselamatan kerja, dan kemampuan teknis. Dengan pelatihan ini, diharapkan tenaga kerja konstruksi di Blora semakin berkualitas dan siap bersaing dalam industri nasional.',
    'foto' => '00_beranda/01_berita/berita1.JPG',
]);

beritajakon::create([
    'judulberita' => 'Meningkatkan Kualitas Tenaga Kerja: Pelatihan dan Uji Kompetensi SKK Digelar di Blora',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora mengadakan Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 bagi tenaga kerja konstruksi guna meningkatkan profesionalisme dan daya saing mereka. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor konstruksi yang mendapatkan pembekalan teori serta praktik langsung oleh instruktur dan asesor kompetensi bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menegaskan pentingnya sertifikasi ini dalam mendukung standar nasional dan meningkatkan peluang kerja tenaga konstruksi di berbagai proyek. Salah satu peserta,  menyatakan bahwa pelatihan ini sangat membantu dalam meningkatkan keterampilan dan kepercayaan diri menghadapi dunia kerja. Dengan terselenggaranya kegiatan ini, diharapkan tenaga kerja konstruksi di Blora semakin berkualitas dan mampu bersaing dalam industri nasional.',
    'foto' => '00_beranda/01_berita/berita2.JPG',
]);

beritajakon::create([
    'judulberita' => 'Puluhan Tenaga Konstruksi Blora Ikuti Sertifikasi Kompetensi Kerja Jenjang 4',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora menggelar Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 untuk meningkatkan kualitas tenaga kerja konstruksi sesuai standar nasional. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor konstruksi yang mendapatkan pembekalan teori dan praktik langsung dari instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyampaikan bahwa sertifikasi ini penting untuk meningkatkan daya saing tenaga kerja dan membuka peluang kerja lebih luas di sektor konstruksi. Salah satu peserta, mengaku pelatihan ini sangat bermanfaat dalam meningkatkan keterampilan dan kepercayaan diri di dunia kerja. Dengan adanya kegiatan ini, diharapkan tenaga kerja konstruksi di Blora semakin kompeten dan siap bersaing dalam industri nasional',
    'foto' => '00_beranda/01_berita/berita3.JPG',
]);

beritajakon::create([
    'judulberita' => 'Dorong Profesionalisme, Dinas PUPR Blora Selenggarakan Uji Kompetensi SKK Konstruksi',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora mengadakan Pelatihan dan Sertifikasi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 sebagai langkah strategis dalam meningkatkan standar tenaga kerja konstruksi di daerah ini. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor yang mendapatkan pembekalan teori dan praktik langsung oleh instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyatakan bahwa sertifikasi ini bertujuan untuk memastikan tenaga kerja konstruksi memiliki kompetensi sesuai standar nasional dan mampu bersaing di industri konstruksi. Salah satu peserta, menyampaikan bahwa pelatihan ini sangat bermanfaat dalam meningkatkan keterampilan dan peluang kerja di sektor konstruksi. Dengan adanya program ini, diharapkan tenaga kerja konstruksi di Blora semakin profesional dan berkontribusi dalam pembangunan yang berkualitas.',
    'foto' => '00_beranda/01_berita/berita4.JPG',
]);

beritajakon::create([
    'judulberita' => 'Pelatihan dan Sertifikasi SKK di Blora: Upaya Meningkatkan Standar Tenaga Konstruksi',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora mengadakan Pelatihan dan Sertifikasi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 untuk meningkatkan standar tenaga kerja konstruksi di daerah tersebut. Kegiatan ini diikuti oleh puluhan peserta yang mendapatkan pembekalan teori dan praktik langsung dari instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyatakan bahwa sertifikasi ini penting untuk memastikan tenaga kerja memiliki kompetensi sesuai standar nasional dan dapat bersaing di industri konstruksi. Salah satu peserta, mengungkapkan bahwa pelatihan ini sangat membantu dalam meningkatkan keterampilan dan peluang kerja. Dengan adanya program ini, diharapkan tenaga kerja konstruksi di Blora semakin profesional dan berkontribusi dalam pembangunan infrastruktur yang berkualitas.',
    'foto' => '00_beranda/01_berita/berita5.jpg',
]);

beritajakon::create([
    'judulberita' => 'Dinas PUPR Blora Gelar Pelatihan dan Uji Kompetensi SKK Jenjang 4 bagi Tenaga Konstruksi',
    'tanggal' => '2025-03-05',
    'keterangan' => 'Blora, Dinas PUPR Kabupaten Blora menyelenggarakan Pelatihan dan Uji Kompetensi Sertifikat Kompetensi Kerja (SKK) Jenjang 4 untuk meningkatkan kualitas tenaga kerja konstruksi di daerah tersebut. Kegiatan ini diikuti oleh puluhan peserta dari berbagai sektor yang mendapatkan pembekalan teori dan praktik dari instruktur serta asesor bersertifikat. Kepala Dinas PUPR Kabupaten Blora, menyampaikan bahwa sertifikasi ini bertujuan untuk memastikan tenaga kerja memiliki kompetensi sesuai standar nasional dan siap bersaing di industri konstruksi. Salah satu peserta, mengungkapkan bahwa pelatihan ini sangat membantu dalam meningkatkan keterampilan dan peluang kerja. Dengan adanya program ini, diharapkan tenaga kerja konstruksi di Blora semakin profesional dan mampu mendukung pembangunan infrastruktur yang berkualitas.',
    'foto' => '00_beranda/01_berita/berita6.JPG',
]);

//======================== ===================================================================================
// DATA ARTIKEL JAKON MAS JAKI

artikeljakonmasjaki::create([
    'judul' => 'Mengenal Sistem Informasi Jasa Konstruksi: Manfaat dan Implementasinya',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Mengenal Sistem Informasi Jasa Konstruksi: Manfaat dan Implementasinya',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    // 'berkas' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Digitalisasi Manajemen Proyek: Peran Sistem Informasi dalam Jasa Konstruksi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Panduan Memilih Sistem Informasi yang Tepat untuk Perusahaan Konstruksi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Teknologi dalam Jasa Konstruksi: Bagaimana Sistem Informasi Meningkatkan Efisiensi?',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Keamanan Data dalam Sistem Informasi Jasa Konstruksi: Tantangan dan Solusi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Meningkatkan Produktivitas Konstruksi dengan Sistem Manajemen Informasi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Tren Digital dalam Industri Konstruksi: Integrasi BIM dan Sistem Informasi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Regulasi dan Standar dalam Sistem Informasi Jasa Konstruksi di Indonesia',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);

artikeljakonmasjaki::create([
    'judul' => 'Strategi Implementasi Sistem Informasi untuk Optimalisasi Pengelolaan Proyek Konstruksi',
    'foto1' => '00_beranda/02_artikeljakon/artikeljakon.jpg',
    'foto2' => null,
    'foto3' => null,
    'berkas' => '00_beranda/02_artikeljakon/artikeljakon.pdf',
    // 'berkas' => null,
    'tanggal' => null,
]);


// ARIS AKHIR
// ===============================
// DATA TAHUN PILIHAN

tahunpilihan::create([
    'id' => 1,
    'tahunpilihan' => '2021',
]);

tahunpilihan::create([
    'id' => 2,
    'tahunpilihan' => '2022',
]);

tahunpilihan::create([
    'id' => 3,
    'tahunpilihan' => '2023',
]);

tahunpilihan::create([
    'id' => 4,
    'tahunpilihan' => '2024',
]);

tahunpilihan::create([
    'id' => 5,
    'tahunpilihan' => '2025',
]);

tahunpilihan::create([
    'id' => 6,
    'tahunpilihan' => '2026',
]);

tahunpilihan::create([
    'id' => 7,
    'tahunpilihan' => '2027',
]);

// ===============================
// DATA KATEGORI PELATIHAN

kategoripelatihan::create([
    'id' => 1,
    'kategoripelatihan' => 'Workshop',
]);

kategoripelatihan::create([
    'id' => 2,
    'kategoripelatihan' => 'Pelatihan',
]);

kategoripelatihan::create([
    'id' => 3,
    'kategoripelatihan' => 'Sosialisasi',
]);

// ===============================
// DATA AGENDA PELATIHAN
// ===============================
// DATA AGENDA PELATIHAN
agendapelatihan::create([
    'id' => 1,
    'kategoripelatihan_id' => '1',
    'namakegiatan' => 'Pelatihan Manajemen Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-02-13',
    'waktupelaksanaan' => '2025-02-15',
    'jumlahpeserta' => 40,
    'lokasi' => 'Jln Blora No. 10',
    'Keterangan' => 'Pelatihan untuk meningkatkan kualitas tenaga kerja konstruksi.',
    'isiagenda' => 'Pelatihan ini bertujuan untuk meningkatkan kemampuan manajemen konstruksi bagi tenaga kerja di bidang konstruksi. Materi yang diberikan mencakup perencanaan proyek, pengendalian biaya, dan strategi pengawasan yang efektif. Dengan pelatihan ini, diharapkan para peserta dapat lebih profesional dalam mengelola proyek konstruksi secara efisien.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendapelatihan::create([
    'id' => 2,
    'kategoripelatihan_id' => '2',
    'namakegiatan' => 'Pelatihan Ahli K3 Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '5',
    'penutupan' => '2025-02-08',
    'waktupelaksanaan' => '2025-02-10',
    'jumlahpeserta' => 30,
    'lokasi' => 'Balai Latihan Kerja Blora',
    'Keterangan' => 'Pelatihan sertifikasi ahli K3 di bidang konstruksi.',
    'isiagenda' => 'Pelatihan ini ditujukan bagi tenaga kerja konstruksi yang ingin mendapatkan sertifikasi Ahli K3. Materi meliputi identifikasi risiko kerja, prosedur keselamatan, serta penerapan standar K3 dalam proyek konstruksi. Dengan mengikuti pelatihan ini, peserta diharapkan mampu meningkatkan keselamatan dan kesehatan kerja di lingkungan konstruksi.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendapelatihan::create([
    'id' => 3,
    'kategoripelatihan_id' => '3',
    'namakegiatan' => 'Workshop Teknologi Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-02-26', // Tanggal 30 diubah ke 28 agar valid
    'waktupelaksanaan' => '2025-02-28', // Tanggal 30 diubah ke 28 agar valid
    'jumlahpeserta' => 50,
    'lokasi' => 'Hotel Blora Indah',
    'Keterangan' => 'Pengenalan teknologi terbaru dalam konstruksi.',
    'isiagenda' => 'Workshop ini akan membahas perkembangan terbaru dalam teknologi konstruksi, termasuk penggunaan material inovatif, teknik pembangunan modern, dan pemanfaatan digitalisasi dalam proyek konstruksi. Para peserta akan mendapatkan wawasan langsung dari para ahli di bidang konstruksi dan inovasi teknologi.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendapelatihan::create([
    'id' => 4,
    'kategoripelatihan_id' => '1',
    'namakegiatan' => 'Pelatihan Pengawasan Proyek',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-05-10',
    'waktupelaksanaan' => '2025-05-12',
    'jumlahpeserta' => 25,
    'lokasi' => 'Gedung Serbaguna Blora',
    'Keterangan' => 'Pelatihan bagi tenaga pengawas proyek konstruksi.',
    'isiagenda' => 'Pelatihan ini memberikan pemahaman mendalam mengenai metode pengawasan proyek konstruksi, termasuk teknik inspeksi, pemantauan jadwal proyek, serta pengelolaan risiko di lapangan. Peserta akan mendapatkan studi kasus nyata untuk memperdalam pemahaman mereka dalam bidang ini.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendapelatihan::create([
    'id' => 5,
    'kategoripelatihan_id' => '2',
    'namakegiatan' => 'Bimbingan Teknis Konstruksi',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-06-18',
    'waktupelaksanaan' => '2025-06-20',
    'jumlahpeserta' => 60,
    'lokasi' => 'Aula Kantor PU Blora',
    'Keterangan' => 'Bimtek peningkatan kapasitas tenaga konstruksi.',
    'isiagenda' => 'Bimbingan teknis ini bertujuan untuk meningkatkan kompetensi tenaga kerja konstruksi dengan memberikan pemahaman tentang regulasi, teknik pelaksanaan, serta manajemen proyek konstruksi. Para peserta akan dilatih secara langsung oleh tenaga ahli berpengalaman.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendapelatihan::create([
    'id' => 6,
    'kategoripelatihan_id' => '3',
    'namakegiatan' => 'Seminar Keselamatan Kerja',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    // 'jenjang_id' => '4',
    'penutupan' => '2025-07-13',
    'waktupelaksanaan' => '2025-07-15',
    'jumlahpeserta' => 35,
    'lokasi' => 'Universitas Blora',
    'Keterangan' => 'Seminar terkait pentingnya keselamatan kerja dalam konstruksi.',
    'isiagenda' => 'Seminar ini akan membahas pentingnya keselamatan kerja dalam industri konstruksi, mencakup strategi pencegahan kecelakaan, peraturan keselamatan yang berlaku, serta studi kasus insiden kerja. Tujuannya adalah untuk meningkatkan kesadaran dan penerapan standar keselamatan dalam proyek konstruksi.',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

// 'foto' => '00_dokmasjaki/03_datajakon/agendapelatihan.jpg',
// iqlima
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
// AGENDA SKK TENAGA KERJA KONSTRUKSI
agendaskk::create([
    'id' => 1,
    'namakegiatan' => 'Sertifikasi Keahlian Tenaga Kerja Konstruksi Bangunan Gedung - Jenjang 4',
    'penyelenggara' => 'Dinas Pekerjaan Umum dan Penataan Ruang Kab Blora',
    'penutupan' => '2025-02-13',
    'waktupelaksanaan' => '2025-02-15',
    'jumlahpeserta' => 40,
    'lokasi' => 'Jln Blora No. 10',
    'Keterangan' => 'Pelatihan dan sertifikasi tenaga kerja konstruksi bangunan gedung.',
    'isiagenda' => 'Peserta akan diberikan pemahaman mendalam tentang konstruksi bangunan gedung...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 2,
    'namakegiatan' => 'Sertifikasi Keterampilan Tukang Bangunan Sipil - Jenjang 6',
    'penyelenggara' => 'Balai Jasa Konstruksi Wilayah IV Surabaya',
    'penutupan' => '2025-03-10',
    'waktupelaksanaan' => '2025-03-12',
    'jumlahpeserta' => 50,
    'lokasi' => 'Jln Raya Semarang No. 22',
    'Keterangan' => 'Pelatihan dan sertifikasi tenaga kerja di bidang tukang bangunan sipil.',
    'isiagenda' => 'Materi meliputi teknik pemasangan struktur beton dan perawatan bangunan...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 3,
    'namakegiatan' => 'Sertifikasi Tenaga Ahli Struktur Baja dalam Konstruksi - Jenjang 7',
    'penyelenggara' => 'Kementerian PUPR',
    'penutupan' => '2025-04-05',
    'waktupelaksanaan' => '2025-04-07',
    'jumlahpeserta' => 35,
    'lokasi' => 'Jln Solo No. 18',
    'Keterangan' => 'Pelatihan dan sertifikasi tenaga ahli struktur baja dalam konstruksi.',
    'isiagenda' => 'Peserta akan belajar teknik perhitungan beban dan pemasangan struktur baja...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 4,
    'namakegiatan' => 'Sertifikasi Pengawas Konstruksi Bangunan dan Jalan - Jenjang 8',
    'penyelenggara' => 'Asosiasi Kontraktor Indonesia',
    'penutupan' => '2025-05-20',
    'waktupelaksanaan' => '2025-05-22',
    'jumlahpeserta' => 45,
    'lokasi' => 'Jln Bandung No. 5',
    'Keterangan' => 'Pelatihan dan sertifikasi pengawas konstruksi bangunan dan jalan.',
    'isiagenda' => 'Peserta akan dibekali keterampilan dalam pengawasan proyek konstruksi...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);

agendaskk::create([
    'id' => 5,
    'namakegiatan' => 'Sertifikasi Ahli Keselamatan dan Kesehatan Kerja Konstruksi - Jenjang 9',
    'penyelenggara' => 'Universitas Teknologi Bandung',
    'penutupan' => '2025-06-15',
    'waktupelaksanaan' => '2025-06-17',
    'jumlahpeserta' => 30,
    'lokasi' => 'Jln Cirebon No. 8',
    'Keterangan' => 'Pelatihan tentang standar keselamatan kerja dalam proyek konstruksi.',
    'isiagenda' => 'Peserta akan memahami prosedur keselamatan dalam setiap tahap konstruksi...',
    'foto' => '01_agendapelatihan/agendapelatihans.jpg',
]);



// makan

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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
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
    'namapekerjaan' => null,
    'kegiatankonstruksi' => 'KANTOR PT POS PROPERTI INDONESIA',
    'nomorkontrak' => '-',
    'bujk' => 'CV. CRYSTAL DESIGN',
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



// uijk::create([
//     'nama_perusahaan' => '',
//     'kategori_perusahaan' => '',
//     'klasifikasi_bidang_usaha' => '',
//     'sub_klasifikasi_bidang_usaha' => '',
//     'keterangan' => '2018',
//     'created_at' => Carbon::now(),
//     'updated_at' => Carbon::now(),
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
