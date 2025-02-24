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


        // BAGIAN KE 6 TERTIB JASA KONSTRUKSI
        // =====================================================================================
        tertibjakon::create([
            'statustertibjakon_id' => '1',
            'namabadanusaha' => 'CV. Mandara Kanta Unggul',
            'nib' => '0208220001109',
            'pjbu' => 'Muhammad Abdul Rozak',
            'jenis' => 'Tertib',
            'sifat' => 'Tertib',
            'klasifikasi' => 'Tertib',
            'layanan' => 'Tertib',
            'bentuk' => 'Tertib',
            'kualifikasi' => 'Tertib',
            'sbu' => 'Tertib',
            'statusnib' => 'Tertib',
            'statustertib' => 'Belum Terbit',
        ]);

        statustertibjakon::create([
            'id' => '1',
            'mitra' => 'Pemerintah',
        ]);

        statustertibjakon::create([
            'id' => '2',
            'mitra' => 'Swasta',
        ]);


// =============== CREATE TIM ASOSIASI PENGUSAHA
asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Pengusaha Konstruksi Indonesia',
    'alamat_kantor' => 'Jl. Raya Konstruksi No. 123, Bandung, Jawa Barat',
    'pengawasanlokasi_id' => 1,
    'provinsi' => 'JAWA BARAT',
    'kontak' => '+62 812-3456-7890',
    'email' => 'info@apki.or.id',
    'website' => 'https://www.apki.or.id',
    'kepala_asosiasi' => 'Yuyu Yuhana, ST., MM',
    'foto_asosiasi' => 'asosiasipengusaha/asosiasipengusaha.png',
    'jumlah_anggota' => '234',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Kontraktor Nasional',
    'alamat_kantor' => 'Jl. Kontraktor No. 45, Jakarta',
    'pengawasanlokasi_id' => 12,
    'provinsi' => 'DKI JAKARTA',
    'kontak' => '+62 811-2345-6789',
    'email' => 'info@akn.or.id',
    'website' => 'https://www.akn.or.id',
    'kepala_asosiasi' => 'Budi Santoso',
    'foto_asosiasi' => 'asosiasipengusaha/akn.png',
    'jumlah_anggota' => '150',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Jasa Konstruksi',
    'alamat_kantor' => 'Jl. Jasa Konstruksi No. 101, Surabaya',
    'pengawasanlokasi_id' => 13,
    'provinsi' => 'JAWA TIMUR',
    'kontak' => '+62 813-4567-8901',
    'email' => 'info@ajk.or.id',
    'website' => 'https://www.ajk.or.id',
    'kepala_asosiasi' => 'Rina Suryani',
    'foto_asosiasi' => 'asosiasipengusaha/ajk.png',
    'jumlah_anggota' => '120',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Pengusaha Material Konstruksi',
    'alamat_kantor' => 'Jl. Material Konstruksi No. 15, Medan',
    'pengawasanlokasi_id' => 14,
    'provinsi' => 'SUMATERA UTARA',
    'kontak' => '+62 814-5678-9012',
    'email' => 'info@apmk.or.id',
    'website' => 'https://www.apmk.or.id',
    'kepala_asosiasi' => 'Andi Wijaya',
    'foto_asosiasi' => 'asosiasipengusaha/apmk.png',
    'jumlah_anggota' => '98',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Ahli Konstruksi',
    'alamat_kantor' => 'Jl. Ahli Konstruksi No. 22, Semarang',
    'pengawasanlokasi_id' => 15,
    'provinsi' => 'JAWA TENGAH',
    'kontak' => '+62 815-6789-0123',
    'email' => 'info@aak.or.id',
    'website' => 'https://www.aak.or.id',
    'kepala_asosiasi' => 'Hendrik Tanjung',
    'foto_asosiasi' => 'asosiasipengusaha/aak.png',
    'jumlah_anggota' => '200',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Konsultan Konstruksi',
    'alamat_kantor' => 'Jl. Konsultan Konstruksi No. 30, Bali',
    'pengawasanlokasi_id' => 15,
    'provinsi' => 'BALI',
    'kontak' => '+62 816-7890-1234',
    'email' => 'info@akk.or.id',
    'website' => 'https://www.akk.or.id',
    'kepala_asosiasi' => 'Lina Agustina',
    'foto_asosiasi' => 'asosiasipengusaha/akk.png',
    'jumlah_anggota' => '250',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Pemborong Konstruksi',
    'alamat_kantor' => 'Jl. Pemborong No. 5, Yogyakarta',
    'pengawasanlokasi_id' => 14,
    'provinsi' => 'DI YOGYAKARTA',
    'kontak' => '+62 817-8901-2345',
    'email' => 'info@apk.or.id',
    'website' => 'https://www.apk.or.id',
    'kepala_asosiasi' => 'Budi Prasetyo',
    'foto_asosiasi' => 'asosiasipengusaha/apk.png',
    'jumlah_anggota' => '80',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Pekerja Konstruksi',
    'alamat_kantor' => 'Jl. Pekerja Konstruksi No. 8, Makassar',
    'pengawasanlokasi_id' => 13,
    'provinsi' => 'SULAWESI SELATAN',
    'kontak' => '+62 818-9012-3456',
    'email' => 'info@apk.or.id',
    'website' => 'https://www.apk.or.id',
    'kepala_asosiasi' => 'Diana Suharno',
    'foto_asosiasi' => 'asosiasipengusaha/apk.png',
    'jumlah_anggota' => '150',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Perusahaan Jasa Konstruksi',
    'alamat_kantor' => 'Jl. Jasa Konstruksi No. 11, Palembang',
    'pengawasanlokasi_id' => 12,
    'provinsi' => 'SUMATERA SELATAN',
    'kontak' => '+62 819-0123-4567',
    'email' => 'info@apjk.or.id',
    'website' => 'https://www.apjk.or.id',
    'kepala_asosiasi' => 'Rizky Firmansyah',
    'foto_asosiasi' => 'asosiasipengusaha/apjk.png',
    'jumlah_anggota' => '300',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Penyedia Konstruksi',
    'alamat_kantor' => 'Jl. Penyedia Konstruksi No. 14, Banjarmasin',
    'pengawasanlokasi_id' => 11,
    'provinsi' => 'KALIMANTAN SELATAN',
    'kontak' => '+62 820-1234-5678',
    'email' => 'info@apk.or.id',
    'website' => 'https://www.apk.or.id',
    'kepala_asosiasi' => 'Teguh Santoso',
    'foto_asosiasi' => 'asosiasipengusaha/apk.png',
    'jumlah_anggota' => '175',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Perancang Konstruksi',
    'alamat_kantor' => 'Jl. Perancang Konstruksi No. 6, Samarinda',
    'pengawasanlokasi_id' => 10,
    'provinsi' => 'KALIMANTAN TIMUR',
    'kontak' => '+62 821-2345-6789',
    'email' => 'info@apk.or.id',
    'website' => 'https://www.apk.or.id',
    'kepala_asosiasi' => 'Maya Arista',
    'foto_asosiasi' => 'asosiasipengusaha/apk.png',
    'jumlah_anggota' => '220',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Konstruksi Berkelanjutan',
    'alamat_kantor' => 'Jl. Konstruksi Berkelanjutan No. 3, Jakarta',
    'pengawasanlokasi_id' => 9,
    'provinsi' => 'DKI JAKARTA',
    'kontak' => '+62 822-3456-7890',
    'email' => 'info@akb.or.id',
    'website' => 'https://www.akb.or.id',
    'kepala_asosiasi' => 'Ferry Hidayat',
    'foto_asosiasi' => 'asosiasipengusaha/akb.png',
    'jumlah_anggota' => '250',
    'status' => 'AKTIF',
]);

asosiasipengusaha::create([
    'nama_asosiasi' => 'Asosiasi Pembangunan Infrastruktur',
    'alamat_kantor' => 'Jl. Infrastruktur No. 9, Denpasar',
    'pengawasanlokasi_id' => 8,
    'provinsi' => 'BALI',
    'kontak' => '+62 823-4567-8901',
    'email' => 'info@api.or.id',
    'website' => 'https://www.api.or.id',
    'kepala_asosiasi' => 'Rudi Prabowo',
    'foto_asosiasi' => 'asosiasipengusaha/api.png',
    'jumlah_anggota' => '400',
    'status' => 'AKTIF',
]);


// =============== CREATE PAKET PEKERJAAN

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Pekerjaan Umum dan Penataan Ruang',
    'jumlah_pagu' => '3875647586',
    'pekerjaan' => 'Pembangunan Jembatan Cikapundung',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '50',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Bina Marga',
    'jumlah_pagu' => '2543567500',
    'pekerjaan' => 'Perbaikan Jalan Raya',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '30',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Cipta Karya',
    'jumlah_pagu' => '434500900',
    'pekerjaan' => 'Pembangunan Gedung Serbaguna',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '70',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Perumahan Rakyat',
    'jumlah_pagu' => '1543236400',
    'pekerjaan' => 'Renovasi Rumah Susun',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '20',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Lingkungan Hidup',
    'jumlah_pagu' => '3432546300',
    'pekerjaan' => 'Pembangunan TPS',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '40',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Pendidikan',
    'jumlah_pagu' => '543563100',
    'pekerjaan' => 'Renovasi Sekolah Baru',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '10',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Kesehatan',
    'jumlah_pagu' => '843523400',
    'pekerjaan' => 'Pembangunan Puskesmas',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '80',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Kebudayaan dan Pariwisata',
    'jumlah_pagu' => '6748563700',
    'pekerjaan' => 'Pembangunan Taman Wisata',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '60',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Pemadam Kebakaran',
    'jumlah_pagu' => '1364827400',
    'pekerjaan' => 'Pengadaan Mobil Pemadam',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '90',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Pertanian',
    'jumlah_pagu' => '754637500',
    'pekerjaan' => 'Pengadaan Alat Pertanian',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '20',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Perhubungan',
    'jumlah_pagu' => '957385700',
    'pekerjaan' => 'Pembangunan Terminal Bus',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '75',
]);

paketpekerjaan::create([
    'metodepengadaan_id' => 2,
    'instansi' => 'Dinas Sosial',
    'jumlah_pagu' => '552948500',
    'pekerjaan' => 'Pembangunan Panti Asuhan',
    'foto_pekerjaan' => 'datajakon/paketpekerjaan/paketpekerjaan.png',
    'tahun' => '2024',
    'progress_fisik' => '35',
]);


// =============== CREATE PENANGGUNG JAWAB TEKNIS
penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 11, // Pastikan ID ini valid dalam tabel metodepengadaan
    'nama_lengkap' => 'Yuyu Yuhana, ST., MM',
    'nopjt' => '45345356',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jembatan',
    'foto_pjt' => 'Profesional',
    'tanggal_terbit' => '2024-01-15', // Format YYYY-MM-DD
    'masa_berlaku' => '2024-12-31', // Format YYYY-MM-DD
]);


penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 12,
    'nama_lengkap' => 'Andi Prasetyo, ST.',
    'nopjt' => '45345357',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Gedung',
    'foto_pjt' => 'gedung.png',
    'tanggal_terbit' => '2024-02-20',
    'masa_berlaku' => '2025-02-20',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 13,
    'nama_lengkap' => 'Budi Santoso, MT.',
    'nopjt' => '45345358',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jalan',
    'foto_pjt' => 'jalan.png',
    'tanggal_terbit' => '2024-03-10',
    'masa_berlaku' => '2025-03-10',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 14,
    'nama_lengkap' => 'Siti Aisyah, ST.',
    'nopjt' => '45345359',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Saluran',
    'foto_pjt' => 'saluran.png',
    'tanggal_terbit' => '2024-04-05',
    'masa_berlaku' => '2025-04-05',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 15,
    'nama_lengkap' => 'Rudi Hartono, ST., MM',
    'nopjt' => '45345360',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jembatan Flyover',
    'foto_pjt' => 'flyover.png',
    'tanggal_terbit' => '2024-05-15',
    'masa_berlaku' => '2025-05-15',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 15,
    'nama_lengkap' => 'Dewi Lestari, ST.',
    'nopjt' => '45345361',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Pembangunan Bendungan',
    'foto_pjt' => 'bendungan.png',
    'tanggal_terbit' => '2024-06-20',
    'masa_berlaku' => '2025-06-20',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 14,
    'nama_lengkap' => 'Agus Salim, ST., MM',
    'nopjt' => '45345362',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Penataan Ruang',
    'foto_pjt' => 'penataan_ruang.png',
    'tanggal_terbit' => '2024-07-25',
    'masa_berlaku' => '2025-07-25',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 13,
    'nama_lengkap' => 'Fiona Larasati, ST.',
    'nopjt' => '45345363',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Instalasi Air',
    'foto_pjt' => 'instalasi_air.png',
    'tanggal_terbit' => '2024-08-30',
    'masa_berlaku' => '2025-08-30',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 12,
    'nama_lengkap' => 'Nina Oktavia, ST.',
    'nopjt' => '45345364',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Drainase',
    'foto_pjt' => 'drainase.png',
    'tanggal_terbit' => '2024-09-10',
    'masa_berlaku' => '2025-09-10',
]);

penanggungjawabteknis::create([
    'pengawasanlokasi_id' => 13,
    'nama_lengkap' => 'Rian Setiawan, ST., MT.',
    'nopjt' => '45345365',
    'sfesifikasi' => 'Spesifikasi Teknis Pekerjaan Jaringan Listrik',
    'foto_pjt' => 'jaringan_listrik.png',
    'tanggal_terbit' => '2024-10-12',
    'masa_berlaku' => '2025-10-12',
]);


// =============== CREATE KETERTIBAN DAN PENGAWASAN
ketertiban::create([
    'pengawasanlokasi_id' => 1,
    'pengawasanbangunangedung_id' => 1,
    'penanggungjawabteknis_id' => 1,
    'pengawasanstatus_id' => 1,
    'pengawasantindakan_id' => 1,
    'judul' => 'Laporan Ketertiban Gedung Perkantoran',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Perkantoran dalam kondisi baik dan sudah memenuhi PKKPR yang diizinkan.',
]);

ketertiban::create([
    'pengawasanlokasi_id' => 2,
    'pengawasanbangunangedung_id' => 2,
    'penanggungjawabteknis_id' => 2,
    'pengawasanstatus_id' => 2,
    'pengawasantindakan_id' => 1,
    'judul' => 'Laporan Ketertiban Gedung Kesehatan',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Kesehatan harus menambah IMB/PBG karena ada ketidaksesuaian.',
]);

ketertiban::create([
    'pengawasanlokasi_id' => 3,
    'pengawasanbangunangedung_id' => 3,
    'penanggungjawabteknis_id' => 1,
    'pengawasanstatus_id' => 1,
    'pengawasantindakan_id' => 2,
    'judul' => 'Laporan Ketertiban Gedung Pendidikan',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Pendidikan sudah memenuhi ketentuan.',
]);

ketertiban::create([
    'pengawasanlokasi_id' => 4,
    'pengawasanbangunangedung_id' => 4,
    'penanggungjawabteknis_id' => 3,
    'pengawasanstatus_id' => 2,
    'pengawasantindakan_id' => 2,
    'judul' => 'Laporan Ketertiban Gedung Olahraga',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Olahraga ada ketidaksesuaian antara IMB dan Bangunan Terbangun.',
]);

ketertiban::create([
    'pengawasanlokasi_id' => 5,
    'pengawasanbangunangedung_id' => 5,
    'penanggungjawabteknis_id' => 1,
    'pengawasanstatus_id' => 1,
    'pengawasantindakan_id' => 1,
    'judul' => 'Laporan Ketertiban Gedung Komersial',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Komersial dalam keadaan Laik Fungsi.',
]);

ketertiban::create([
    'pengawasanlokasi_id' => 6,
    'pengawasanbangunangedung_id' => 6,
    'penanggungjawabteknis_id' => 2,
    'pengawasanstatus_id' => 1,
    'pengawasantindakan_id' => 2,
    'judul' => 'Laporan Ketertiban Gedung Transportasi',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Transportasi memerlukan pemeliharaan lebih lanjut.',
]);

ketertiban::create([
    'pengawasanlokasi_id' => 7,
    'pengawasanbangunangedung_id' => 7,
    'penanggungjawabteknis_id' => 1,
    'pengawasanstatus_id' => 2,
    'pengawasantindakan_id' => 1,
    'judul' => 'Laporan Ketertiban Gedung Perhotelan',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Perhotelan sudah sesuai dengan IMB yang diterbitkan.',
]);

ketertiban::create([
    'pengawasanlokasi_id' => 8,
    'pengawasanbangunangedung_id' => 8,
    'penanggungjawabteknis_id' => 3,
    'pengawasanstatus_id' => 2,
    'pengawasantindakan_id' => 2,
    'judul' => 'Laporan Ketertiban Gedung Rekreasi',
    'tanggal_laporan' => now(),
    'keterangan' => 'Gedung Rekreasi dalam keadaan Laik Fungsi',
]);


// =============== CREATE BERITA AGENDA
beritaagenda::create([
    'pengawasanlokasi_id' => 11,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Rapat Koordinasi Proyek Konstruksi',
    'keterangan' => 'Rapat koordinasi untuk membahas progres proyek Kabupaten Bandung Barat.',
    'kuota' => '50',
    'tanggal_mulai' => '2024-07-20',
    'tanggal_selesai' => '2024-07-27',
]);

beritaagenda::create([
    'pengawasanlokasi_id' => 13,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Pelatihan Keselamatan Kerja',
    'keterangan' => 'Pelatihan untuk meningkatkan keselamatan kerja di lokasi proyek.',
    'kuota' => '25',
    'tanggal_mulai' => '2024-08-02',
    'tanggal_selesai' => '2024-08-11',
]);

beritaagenda::create([
    'pengawasanlokasi_id' => 11,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Pelatihan Sertifikasi Para Pekerja Konstruksi',
    'keterangan' => 'Pelatihan Sertifikasi Pekerja Konstruksi di Kecamatan Cililin.',
    'kuota' => '30',
    'tanggal_mulai' => '2024-08-11',
    'tanggal_selesai' => '2024-08-14',
]);

beritaagenda::create([
    'pengawasanlokasi_id' => 12,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Sosialisasi Proyek Baru',
    'keterangan' => 'Sosialisasi Paket Pekerjaan Konstruksi Tahun 2024.',
    'kuota' => '30',
    'tanggal_mulai' => '2024-08-12',
    'tanggal_selesai' => '2024-08-30',
]);

beritaagenda::create([
    'pengawasanlokasi_id' => 15,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Workshop Teknologi Konstruksi',
    'keterangan' => 'Workshop tentang teknologi terbaru dalam industri konstruksi.',
    'kuota' => '40',
    'tanggal_mulai' => '2024-11-03',
    'tanggal_selesai' => '2024-11-15',
]);

beritaagenda::create([
    'pengawasanlokasi_id' => 4,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Pelatihan Sertifikasi Para Pekerja Konstruksi',
    'keterangan' => 'Pelatihan Sertifikasi Pekerja Konstruksi di Kecamatan Cikalong Wetan.',
    'kuota' => '30',
    'tanggal_mulai' => '2024-12-02',
    'tanggal_selesai' => '2024-12-04',
]);

beritaagenda::create([
    'pengawasanlokasi_id' => 14,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Evaluasi Proyek Tahunan',
    'keterangan' => 'Evaluasi kinerja proyek yang telah dilaksanakan selama satu tahun.',
    'kuota' => '20',
    'tanggal_mulai' => '2024-12-12',
    'tanggal_selesai' => '2024-12-23',
]);


beritaagenda::create([
    'pengawasanlokasi_id' => 16,
    'statusprogram' => 'Selesai',
    'nama_agenda' => 'Penyampaian Laporan Proyek',
    'keterangan' => 'Penyampaian laporan akhir proyek yang telah selesai dilaksanakan.',
    'kuota' => '10',
    'tanggal_mulai' => '2024-12-18',
    'tanggal_selesai' => '2024-12-18',
]);


// =============== CREATE QA PERTANYAAN
qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Suhardi Wiharja',
    'email' => 'suhardi@example.com',
    'telepon' => '081234567890',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Dewi Sari',
    'email' => 'dewi@example.com',
    'telepon' => '081234567891',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Budi Santoso',
    'email' => 'budi@example.com',
    'telepon' => '081234567892',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 2,
    'nama_lengkap' => 'Rina Agustina',
    'email' => 'rina@example.com',
    'telepon' => '081234567893',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 1,
    'nama_lengkap' => 'Joko Widodo',
    'email' => 'joko@example.com',
    'telepon' => '081234567894',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 2,
    'nama_lengkap' => 'Siti Aminah',
    'email' => 'siti@example.com',
    'telepon' => '081234567895',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Toni Prasetyo',
    'email' => 'toni@example.com',
    'telepon' => '081234567896',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Anisa Putri',
    'email' => 'anisa@example.com',
    'telepon' => '081234567897',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Farhan Rizky',
    'email' => 'farhan@example.com',
    'telepon' => '081234567898',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Indah Permata',
    'email' => 'indah@example.com',
    'telepon' => '081234567899',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 5,
    'nama_lengkap' => 'Rizal Mardiansyah',
    'email' => 'rizal@example.com',
    'telepon' => '081234567900',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 6,
    'nama_lengkap' => 'Fika Ramadhani',
    'email' => 'fika@example.com',
    'telepon' => '081234567901',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Krisna Utama',
    'email' => 'krisna@example.com',
    'telepon' => '081234567902',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 6,
    'nama_lengkap' => 'Lina Oktaviana',
    'email' => 'lina@example.com',
    'telepon' => '081234567903',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 5,
    'nama_lengkap' => 'Dika Rahman',
    'email' => 'dika@example.com',
    'telepon' => '081234567904',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Putri Lestari',
    'email' => 'putri@example.com',
    'telepon' => '081234567905',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Asep Mulyana',
    'email' => 'asep@example.com',
    'telepon' => '081234567906',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 2,
    'nama_lengkap' => 'Sari Rahmawati',
    'email' => 'sari@example.com',
    'telepon' => '081234567907',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 7,
    'nama_lengkap' => 'Denny Saputra',
    'email' => 'denny@example.com',
    'telepon' => '081234567908',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 5,
    'nama_lengkap' => 'Fahri Maulana',
    'email' => 'fahri@example.com',
    'telepon' => '081234567909',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 6,
    'nama_lengkap' => 'Hani Salsabila',
    'email' => 'hani@example.com',
    'telepon' => '081234567910',
]);

qa::create([
    'qasebagai_id' => 2,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Aulia Nabila',
    'email' => 'aulia@example.com',
    'telepon' => '081234567911',
]);

qa::create([
    'qasebagai_id' => 3,
    'qapertanyaan_id' => 3,
    'nama_lengkap' => 'Wira Nugraha',
    'email' => 'wira@example.com',
    'telepon' => '081234567912',
]);

qa::create([
    'qasebagai_id' => 1,
    'qapertanyaan_id' => 4,
    'nama_lengkap' => 'Eka Saputri',
    'email' => 'eka@example.com',
    'telepon' => '081234567913',
]);


// =============== CREATE TIM PEMBINA
        timpembina::create([
            'jabatandalamkedinasan'  => 'Fungsional Pembina Jasa Konstruksi Ahli Muda',
            'nama_lengkap'  => 'Yuyu Yuhana, ST., MM',
            // 'jabatan'  => 'Yuyu Yuhana, ST., MM',
            'email'  => 'sipjakikbb@gmail.com',
            // 'alamatkantor'  => 'Kantor Bupati Pemerintah Kabupaten Bandung Barat',
            'telepon'  => '081317051502',
            'fototimpembina'  => 'timpembina/sipjakikbb.png',

            // 'Jabatan'  => 'Yuyu Yuhana, ST., MM',

        ]);
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


        // ===================================================================================
        // DATA TENAGA KERJA SKK KABUPATEN BANDUNG BARAT
        // skktenagakerja::factory(1235)->create();


        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Kanangasari',
            'nama' => 'WAHYUDIN',
            'alamat' => 'Kp. Cibitung RT/RW 002/011 Kelurahan Kanangasari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1962-08-10',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A01_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/01_WAHYUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/01_WAHYUDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/01_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/01_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Kanangasari',
            'nama' => 'JAJANG JAENUDIN',
            'alamat' => 'KP. Cisela RT/RW 001/011 Kelurahan Kanangasari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1970-03-11',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A02_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/02_JAJANG_JAENUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/02_JAJANG_JAENUDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/02_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/02_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'ADE SUTARYA',
            'alamat' => 'Kp. Lembang Dano RT/RW 002/002 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1963-06-03',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A03_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/03_ADE_SUTARYA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/03_ADE_SUTARYA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/03_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/03_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'ASEP SUTISNA',
            'alamat' => 'Kp. Lembang RT/RW 002/002 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1978-02-12',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A04_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/04_ASEP_SUTISNA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/04_ASEP_SUTISNA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/04_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/04_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Mekarjaya',
            'nama' => 'LILI SUMANTRI',
            'alamat' => 'Kp. Cipadagirang Kecamatan Cikalong Wetan Kabupaten Bandung Barat ',
            'tanggal_lahir' => '1982-07-07',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A05_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/05_LILI_SUMANTRI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/05_LILI_SUMANTRI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/05_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/05_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Mandalasari',
            'nama' => 'SOLIIHIN',
            'alamat' => 'Kp. Ciawitali Kecamatan Cikalong Wetan Kabupaten Bandung Barat ',
            'tanggal_lahir' => '1993-03-11',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A06_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/06_SOLIHIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/06_SOLIHIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/06_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/06_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Mandalasari',
            'nama' => 'DANI SAPRUDIN',
            'alamat' => 'Kp. Sirnaraja RT/RW 003/012 Kelurahan Mandalasari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1992-08-28',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A07_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/07_DANI_SAPRUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/07_DANI_SAPRUDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/07_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/07_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Puteran',
            'nama' => 'ENDANG SUPRIATNA',
            'alamat' => 'Kp. Cigatrot RT/RW 004/005 Kelurahan Puteran Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1967-10-25',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A08_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/08_ENDANG_SUPRIATNA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/08_ENDANG_SUPRIATNA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/08_CK_KEGIATAN1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/08_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Puteran',
            'nama' => 'SISWANDI',
            'alamat' => 'Kp. Hegarmanah RT/RW 001/016 Kelurahan Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1984-09-19',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A09_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/09_SISWANDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/09_SISWANDI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/09_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Puteran',
            'nama' => 'PARMAN',
            'alamat' => 'Kp. Blok Lembur RT/RW 001/009 Kelurahan Puteran Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1972-10-10',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A10_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/10_PARMAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/10_PARMAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/10_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'YUDI LESMANA',
            'alamat' => 'Kp. Lembang RT/RW 001/001 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1991-04-10',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A11_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/11_YUDI_LESMANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/11_YUDI_LESMANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/11_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'ATO SUGIARTO',
            'alamat' => 'Kp. Cipicung RT/RW 001/003 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1991-08-08',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A12_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/12_ATO_SUGIARTO_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/12_ATO_SUGIARTO_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/12_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cipada',
            'nama' => 'SLAMET TRIADI',
            'alamat' => 'Kp. Lembang Dano RT/RW 001/001 Kelurahan Cipada Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1999-05-12',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A13_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/13_SLAMET_TRIADI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/13_SLAMET_TRIADI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/13_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Ganjarsari',
            'nama' => 'DEPI RISMAWAN',
            'alamat' => 'Kp. Ganjarsari RT/RW 002/008 Kelurahan Ganjarsari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1999-12-22',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A14_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/14_DEPI_RISMAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/14_DEPI_RISMAWAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/14_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'DADAN',
            'alamat' => 'Kp. Cisomang Barat RT/RW 001/012 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1975-11-30',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A15_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/15_DADAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/15_DADAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/15_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'JAJANG',
            'alamat' => 'Kp. Cisomang Barat RT/RW 003/011 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1972-04-21',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A16_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/16_JAJANG_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/16_JAJANG_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/16_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'APIN ARIPIN',
            'alamat' => 'Kp. Cisomang Barat RT/RW 001/017 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1973-07-03',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A17_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/17_APIN_ARIPIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/17_APIN_ARIPIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/17_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'DUYEH',
            'alamat' => 'Kp. Cisomang Barat RT/RW 002/011 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1969-08-02',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A18_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/18_DUYEH_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/18_DUYEH_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/18_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Ganjarsari',
            'nama' => 'AYI NURDIN',
            'alamat' => 'Kp. Bojong Sero RT/RW 003/004 Kelurahan Ganjarsari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1980-07-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A19_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/19_AYI_NURDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/19_AYI_NURDIN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/19_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Ganjarsari',
            'nama' => 'ASEP RAHMAT',
            'alamat' => 'Kp. Jambudipa RT/RW 001/002 Kelurahan Ganjarsari Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1976-06-27',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A20_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/20_ASEP_RAHMAT_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/20_ASEP_RAHMAT_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/20_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cikalong Wetan',
            'nama' => 'YANA HERDIANA',
            'alamat' => 'Kp. Lapang RT/RW 005/004 Kelurahan Cikalong Wetan Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1972-09-30',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A21_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/21_YANA_HERDIANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/21_YANA_HERDIANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/21_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'DODO ABDUL FATAH',
            'alamat' => 'Kp. Babakan RT/RW 003/003 Kelurahan Wangunjaya Wetan Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1973-07-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A22_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/22_DODO_ABDUL_FATAH_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/22_DODO_ABDUL_FATAH_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/22_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat ',
            'nama' => 'WAWAN',
            'alamat' => 'Kp. Cikara RT/RW 001/012 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1980-04-03',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A23_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/23_WAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/23_WAWAN_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/23_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat ',
            'nama' => 'ENDANG MUSTOPA',
            'alamat' => 'Kp. Pasirnangka RT/RW 002/004 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1971-07-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A24_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/24_ENDANG_MUSTOPA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/24_ENDANG_MUSTOPA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/24_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'TATANG',
            'alamat' => 'Kp. Babakan RT/RW 001/003 Kelurahan Wangunjaya Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1979-02-01',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A25_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/25_TATANG_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/25_TATANG_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/25_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'YAYAN MULYANA',
            'alamat' => 'Kp. Cianca RT/RW 001/007 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1970-07-05',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A26_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/26_YAYAN_MULYANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/26_YAYAN_MULYANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/26_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Cisomang Barat',
            'nama' => 'MULYANA',
            'alamat' => 'Kp. Cibungbulang RT/RW 001/011 Kelurahan Cisomang Barat Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1980-12-12',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A27_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/27_MULYANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/27_MULYANA_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/27_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'AYI SOPIAN',
            'alamat' => 'Kp. Tengek RT/RW 002/008 Kelurahan Wangunjaya Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1967-03-23',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A28_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/28_AYI_SOPANDI_KTA GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/28_AYI_SOPANDI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/28_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Wangunjaya',
            'nama' => 'OBAR S BIN SAPDI',
            'alamat' => 'Kp. Tengek RT/RW 002/011 Kelurahan Wangunjaya Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '1977-08-08',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A29_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/29_OBAR_S_BIN_SAPDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/29_OBAR_S_BIN_SAPDI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/29_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '4',
            'desa' => 'Sadangmekar',
            'nama' => 'RIFKI NOVALIMANI',
            'alamat' => 'Kp. Cilengsar RT/RW 002/001 Kelurahan Sadangmekar Kecamatan Cikalong Wetan Kabupaten Bandung Barat',
            'tanggal_lahir' => '2004-10-19',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '7',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/A30_Paspoto.png',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/30_RIFKI_NOVALIMANI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/30_RIFKI_NOVALIMANI_SKK.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/--.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/30_CK_KEGIATAN2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        // ------------------------------------------ CIKALONG WETAN SIPJAKI KBB KABUPATEN BANDUNG BARAT --------------
        // ------------------------------------------ CIKALONG WETAN SIPJAKI KBB KABUPATEN BANDUNG BARAT --------------
        // ------------------------------------------ CIKALONG WETAN SIPJAKI KBB KABUPATEN BANDUNG BARAT --------------

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Budiharja',
            'nama' => 'ANTON HILMAN',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-01.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ANTON_HILMAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ANTON_HILMAN_SKK_TUKANG_BANGUNAN_GEDUNG__J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/antonkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/antonkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batu Layang',
            'nama' => 'ENDANG SOEMANTRI',
            'alamat' => '-',
            'tanggal_lahir' => '1985-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-02.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ENDANG_SOMANTRI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ENDANG_SOMANTRI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/endangkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/endangkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1985-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batu Layang',
            'nama' => 'LUBIS',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-03.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/LUBIS_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/LUBIS_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/lubiskegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/lubiskegiatan2.jpg',
            // 'usia' => $this->calculateAge('1988-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batu Layang',
            'nama' => 'JAJANG SAEFUL MUMIN',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-04.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/JAJANG_SAEPUL_MUMIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/JAJANG_SAEPUL_MUMIN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/antonkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/antonkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas',
            'nama' => 'ABDUL RIZKI MAJID',
            'alamat' => '-',
            'tanggal_lahir' => '1992-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-05.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ABDUL_RIZKIL MAJID_KTA GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ABDUL_RIZKIL MAJID_SKK_TUKANG_BANGUNAN GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/abdulkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/abdulkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1992-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);


        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karanganyar',
            'nama' => 'MUHAMMAD HUSNI PURNAMA MUIZ',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-06.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/MUHAMMAD_HUSNI_PURNAMA_MUIZ_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/MUHAMMAD_HUSNI_PURNAMA_MUIZ_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/husnikegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/husnikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karang Tanjung ',
            'nama' => 'UJANG MULYANA',
            'alamat' => '-',
            'tanggal_lahir' => '1995-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-07.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/UJANG_MULYANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/UJANG_MULYANA_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/ujangmulyanakegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/ujangmulyanakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1995-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karyamukti ',
            'nama' => 'HENDRI',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-08.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/HENDRI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/HENDRI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/hendrikegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/hendrikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Kidang Panunjang ',
            'nama' => 'HENDRAWAN',
            'alamat' => '-',
            'tanggal_lahir' => '1982-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-09.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/HENDRAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/HENDRAWAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/hendrawankegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/hendrawankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1982-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Muka Payung ',
            'nama' => 'KARSIM WIDIANTO',
            'alamat' => '-',
            'tanggal_lahir' => '1975-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-10.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/KARSIM_WIDIANTO_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/KARSIM_WIDIANTO_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/kasimkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/kasimkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1975-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Kidang Panunjang ',
            'nama' => 'MAMAT HIDAYAT',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-11.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/MAMAT_HIDAYAT_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/MAMAT_HIDAYAT_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/mamatkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/mamatkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1988-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Nangerang ',
            'nama' => 'ROHMAT',
            'alamat' => '-',
            'tanggal_lahir' => '1975-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-12.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ROHMAT_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ROHMAT_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/rohmatkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/rohmatkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1975-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Ranca Panggung ',
            'nama' => 'NURJAMAH AMINUDIN',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-13.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/NURJAMAH_AMINUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/NURJAMAH_AMINUDIN_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/nurjamahkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/nurjamahkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Cililin ',
            'nama' => 'BEBEN',
            'alamat' => '-',
            'tanggal_lahir' => '1985-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-14.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/BEBEN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/BEBEN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/bebenkegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/bebenkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1985-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batulayang ',
            'nama' => 'PANDI SUPRIADI',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-15.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/PANDI_SUPRIADI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/PANDI_SUPRIADI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/pandikegiatan1.jpeg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/pandikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Budiharja ',
            'nama' => 'SULAEMAN',
            'alamat' => '-',
            'tanggal_lahir' => '1990-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-16.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/SULAEMAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/SULAEMAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/sulaemankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/sulaemankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1990-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas ',
            'nama' => 'AHMAD EFENDI',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-17.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/AHMAD_EFENDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/AHMAD_EFENDI_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/ahmadefendikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/ahmadefendikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1988-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karanganyar ',
            'nama' => 'IAN SOPIAN',
            'alamat' => '-',
            'tanggal_lahir' => '1982-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-18.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/IAN_SOPIAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/IAN_SOPIAN_ SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/iankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/iankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1982-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Mukapayung ',
            'nama' => 'BULDANI',
            'alamat' => '-',
            'tanggal_lahir' => '1993-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-19.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/BULDANI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/BULDANI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/buldanikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/buldanikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1993-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Nangerang ',
            'nama' => 'SAEHUDIN',
            'alamat' => '-',
            'tanggal_lahir' => '1978-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-20.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/SAEHUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/SAEHUDIN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/saehudinkegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/saehudinkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1978-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batulayang ',
            'nama' => 'CECEP JAMALUDIN',
            'alamat' => '-',
            'tanggal_lahir' => '1992-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-21.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/CECEP_JAMALUDIN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/CECEP_JAMALUDIN_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/cecepjamaludinkegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/cecepjamaludinkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1992-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karangmukti ',
            'nama' => 'Yopi Sopian',
            'alamat' => '-',
            'tanggal_lahir' => '1995-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-22.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/YOPI_SOFYAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/YOPI_SOFYAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/yopikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/yopikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1995-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karangmukti ',
            'nama' => 'RUKMANA',
            'alamat' => '-',
            'tanggal_lahir' => '1980-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-23.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/RUKMANA_S_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/RUKMANA_S_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/rukmanakegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/rukmanakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Batulayang ',
            'nama' => 'IDRUS SUPARDI',
            'alamat' => '-',
            'tanggal_lahir' => '1988-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-24.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/IDRUS_SUPARDI_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/IDRUS_SUPARDI_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/idruskegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/idruskegiatan2.jpg',
            // 'usia' => $this->calculateAge('1980-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas ',
            'nama' => 'AGUS SETIAWAN',
            'alamat' => '-',
            'tanggal_lahir' => '1984-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-25.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/AGUS_SETIAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/AGUS_SETIAWAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/agussetiawankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/agussetiawankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1984-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Kidang Panunjang',
            'nama' => 'DEDE MEDIANSYAH',
            'alamat' => '-',
            'tanggal_lahir' => '1984-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-26.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/DEDE_MEDIANSYAH_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/DEDE_MEDIANSYAH_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/mediansyahkegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/mediansyahkegiatan2.jpg',
            // 'usia' => $this->calculateAge('1984-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Nangerang',
            'nama' => 'Dadang Eki Gunawan',
            'alamat' => '-',
            'tanggal_lahir' => '1986-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-27.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/DADANG_EKKI_GUNAWAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/DADANG_EKKI_GUNAWAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/dadangekikegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/dadangekikegiatan2.jpg',
            // 'usia' => $this->calculateAge('1986-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Karanganyar',
            'nama' => 'Ade Supriatna',
            'alamat' => '-',
            'tanggal_lahir' => '1991-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-28.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/ADE_SUPRIATNA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/ADE_SUPRIATNA_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/adesupriatnakegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/adesupriatnakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1991-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Mukapayung',
            'nama' => 'AJANG KUSWANA',
            'alamat' => '-',
            'tanggal_lahir' => '1987-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-29.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/AJANG_KUSWANA_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/AJANG_KUSWANA_SKK_TUKANG_BANGUNAN_GEDUNG_ J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/ajangkuswanakegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/ajangkuswanakegiatan2.jpg',
            // 'usia' => $this->calculateAge('1987-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
        ]);

        Tukangterampil::create([
            'pengawasanlokasi_id' => '11',
            'desa' => 'Bongas',
            'nama' => 'YUSUF SOPIAN',
            'alamat' => '-',
            'tanggal_lahir' => '1987-03-09',
            'nik' => '-',
            'keterampilanpekerja_id' => '3',
            'tahunpilihan_id' => '6',
            'kualifikasi' => 'SUDAH',
            'registrasi' => 'SUDAH',
            'foto' => 'skktenagakerja/arsip/pas/Paspoto-Asesi-30.jpg',
            'kta_gatensi' => 'skktenagakerja/arsip/kta_gatensi/YUSUP_SOPYAN_KTA_GATENSI.pdf',
            'skk_pekerja' => 'skktenagakerja/arsip/skk_pekerja/YUSUP_SOPYAN_SKK_TUKANG_BANGUNAN_GEDUNG_J1.pdf',
            'foto_kegiatanpekerja1' => 'skktenagakerja/arsip/foto_kegiatan1/yusufsopiankegiatan1.jpg',
            'foto_kegiatanpekerja2' => 'skktenagakerja/arsip/foto_kegiatan2/yusufsopiankegiatan2.jpg',
            // 'usia' => $this->calculateAge('1987-03-09'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            'deleted_at' => null, // Jika Anda menggunakan soft deletes
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
    'no_telepon' => '82324908547',
    'email' => 'mandrakantaunggul@gmail.com',
    'nib' => '0208220001109',
    'pju' => 'WINARSIH',
    'no_akte' => '25',
    'tanggal' => '2024-07-21',
    'nama_notaris' => 'DIAH TRIMURTI SALEH S.E., S.H., M.KN',
    'no_pengesahan' => ' AHU-0049177-AH.01.14'
]);

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
    'jenispekerjaan' => 'Pekerjaan Konstruksi Gedung',
    'namapekerjaan' => 'Pembangunan Gedung Perkantoran Blora',
    'tahunpelaksanaan' => 2023,
    'cvptpenyedia' => 'CV. Maju Bersama',
    'nib' => '1234567890',
    'nilaikontrak' => 500000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Konstruksi Gedung Perkantoran',
    'bulanmulai' => '2023-01-01',
    'bulanselesai' => '2023-12-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketpekerjaanblora::create([
    'jenispekerjaan' => 'Pekerjaan Konstruksi Jalan',
    'namapekerjaan' => 'Pembangunan Jalan Raya Blora',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'PT. Jalan Jaya',
    'nib' => '9876543210',
    'nilaikontrak' => 250000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pemeliharaan',
    'karakteristikkontrak' => 'Pemeliharaan Jalan Raya',
    'bulanmulai' => '2024-03-01',
    'bulanselesai' => '2024-11-30',
    'dinas' => 'Dinas Bina Marga Blora',
]);

profilpaketpekerjaanblora::create([
    'jenispekerjaan' => 'Pekerjaan Infrastruktur',
    'namapekerjaan' => 'Pembangunan Saluran Air Bersih Blora',
    'tahunpelaksanaan' => 2025,
    'cvptpenyedia' => 'CV. Air Bersih Sejahtera',
    'nib' => '5647382910',
    'nilaikontrak' => 100000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Penyediaan Infrastruktur',
    'karakteristikkontrak' => 'Pembangunan Saluran Air Bersih',
    'bulanmulai' => '2025-06-01',
    'bulanselesai' => '2025-12-31',
    'dinas' => 'Dinas Perumahan dan Permukiman Blora',
]);

profilpaketpekerjaanblora::create([
    'jenispekerjaan' => 'Pekerjaan Pemeliharaan Jalan',
    'namapekerjaan' => 'Pemeliharaan Jalan Utama Blora',
    'tahunpelaksanaan' => 2026,
    'cvptpenyedia' => 'PT. Jalan Sehat',
    'nib' => '1029384756',
    'nilaikontrak' => 150000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Pemeliharaan',
    'karakteristikkontrak' => 'Pemeliharaan Jalan Utama',
    'bulanmulai' => '2026-02-01',
    'bulanselesai' => '2026-08-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketpekerjaanblora::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Jembatan',
    'namapekerjaan' => 'Pembangunan Jembatan Sungai Blora',
    'tahunpelaksanaan' => 2027,
    'cvptpenyedia' => 'PT. Jembatan Permai',
    'nib' => '3216549870',
    'nilaikontrak' => 300000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Jembatan di atas Sungai Blora',
    'bulanmulai' => '2027-05-01',
    'bulanselesai' => '2027-12-31',
    'dinas' => 'Dinas Bina Marga Blora',
]);

profilpaketpekerjaanblora::create([
    'jenispekerjaan' => 'Pekerjaan Renovasi Gedung',
    'namapekerjaan' => 'Renovasi Gedung Pemerintahan Blora',
    'tahunpelaksanaan' => 2028,
    'cvptpenyedia' => 'CV. Renovasi Sejahtera',
    'nib' => '5463728190',
    'nilaikontrak' => 200000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Renovasi',
    'karakteristikkontrak' => 'Renovasi Gedung Pemerintahan',
    'bulanmulai' => '2028-04-01',
    'bulanselesai' => '2028-12-31',
    'dinas' => 'Dinas Perumahan dan Permukiman Blora',
]);

profilpaketpekerjaanblora::create([
    'jenispekerjaan' => 'Pekerjaan Pengadaan Alat Berat',
    'namapekerjaan' => 'Pengadaan Alat Berat untuk Konstruksi Blora',
    'tahunpelaksanaan' => 2029,
    'cvptpenyedia' => 'PT. Alat Berat Nusantara',
    'nib' => '1938475620',
    'nilaikontrak' => 80000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pengadaan',
    'karakteristikkontrak' => 'Pengadaan Alat Berat untuk Proyek Konstruksi',
    'bulanmulai' => '2029-07-01',
    'bulanselesai' => '2029-12-31',
    'dinas' => 'Dinas Sumber Daya Alam Blora',
]);

//======================== ===================================================================================
// PAKET PEKERJAAN NON TENDER MAS JAKI BLORA
profilpaketpekerjaannontender::create([
    'jenispekerjaan' => 'Pekerjaan Konstruksi Jalan',
    'namapekerjaan' => 'Rehabilitasi Jalan Kabupaten Blora',
    'tahunpelaksanaan' => 2023,
    'cvptpenyedia' => 'PT. Karya Jalan Raya',
    'nib' => '1122334455',
    'nilaikontrak' => 600000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Rehabilitasi',
    'karakteristikkontrak' => 'Perbaikan dan Rehabilitasi Jalan',
    'bulanmulai' => '2023-02-01',
    'bulanselesai' => '2023-10-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketpekerjaannontender::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Irigasi',
    'namapekerjaan' => 'Pembangunan Irigasi Desa Blora',
    'tahunpelaksanaan' => 2024,
    'cvptpenyedia' => 'CV. Air Lancar',
    'nib' => '5566778899',
    'nilaikontrak' => 350000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Saluran Irigasi',
    'bulanmulai' => '2024-04-01',
    'bulanselesai' => '2024-12-31',
    'dinas' => 'Dinas Pertanian Blora',
]);

profilpaketpekerjaannontender::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Jembatan',
    'namapekerjaan' => 'Pembangunan Jembatan Desa Blora',
    'tahunpelaksanaan' => 2025,
    'cvptpenyedia' => 'PT. Jembatan Kuat',
    'nib' => '9988776655',
    'nilaikontrak' => 450000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Jembatan Penghubung',
    'bulanmulai' => '2025-06-01',
    'bulanselesai' => '2025-11-30',
    'dinas' => 'Dinas Bina Marga Blora',
]);

profilpaketpekerjaannontender::create([
    'jenispekerjaan' => 'Pekerjaan Renovasi Gedung',
    'namapekerjaan' => 'Renovasi Gedung Sekolah Blora',
    'tahunpelaksanaan' => 2026,
    'cvptpenyedia' => 'CV. Bangun Sejahtera',
    'nib' => '3344556677',
    'nilaikontrak' => 250000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Renovasi',
    'karakteristikkontrak' => 'Renovasi Gedung Sekolah',
    'bulanmulai' => '2026-03-01',
    'bulanselesai' => '2026-09-30',
    'dinas' => 'Dinas Pendidikan Blora',
]);

profilpaketpekerjaannontender::create([
    'jenispekerjaan' => 'Pekerjaan Pengadaan Peralatan',
    'namapekerjaan' => 'Pengadaan Peralatan Kesehatan Blora',
    'tahunpelaksanaan' => 2027,
    'cvptpenyedia' => 'PT. Medika Sehat',
    'nib' => '1122446688',
    'nilaikontrak' => 180000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Pengadaan',
    'karakteristikkontrak' => 'Pengadaan Alat Kesehatan untuk Rumah Sakit',
    'bulanmulai' => '2027-07-01',
    'bulanselesai' => '2027-12-31',
    'dinas' => 'Dinas Kesehatan Blora',
]);

profilpaketpekerjaannontender::create([
    'jenispekerjaan' => 'Pekerjaan Pemeliharaan Jalan',
    'namapekerjaan' => 'Pemeliharaan Jalan Desa Blora',
    'tahunpelaksanaan' => 2028,
    'cvptpenyedia' => 'PT. Aspal Mulus',
    'nib' => '4455667788',
    'nilaikontrak' => 220000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Pemeliharaan',
    'karakteristikkontrak' => 'Pemeliharaan Jalan Desa',
    'bulanmulai' => '2028-05-01',
    'bulanselesai' => '2028-10-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketpekerjaannontender::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Sistem Drainase',
    'namapekerjaan' => 'Pembangunan Sistem Drainase Kota Blora',
    'tahunpelaksanaan' => 2029,
    'cvptpenyedia' => 'CV. Drainase Lancar',
    'nib' => '7788990011',
    'nilaikontrak' => 300000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Sistem Drainase Kota',
    'bulanmulai' => '2029-08-01',
    'bulanselesai' => '2029-12-31',
    'dinas' => 'Dinas Perumahan dan Permukiman Blora',
]);

//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA
profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Sistem Drainase',
    'namapekerjaan' => 'Pembangunan Sistem Drainase Kota Blora',
    'tahunpelaksanaan' => 2029,
    'cvptpenyedia' => 'CV. Drainase Lancar',
    'nib' => '7788990011',
    'nilaikontrak' => 300000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Sistem Drainase Kota',
    'bulanmulai' => '2029-08-01',
    'bulanselesai' => '2029-12-31',
    'dinas' => 'Dinas Perumahan dan Permukiman Blora',
]);

profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Rehabilitasi Jalan',
    'namapekerjaan' => 'Rehabilitasi Jalan Utama Kecamatan Cepu',
    'tahunpelaksanaan' => 2028,
    'cvptpenyedia' => 'PT. Jalan Mulus',
    'nib' => '1122334455',
    'nilaikontrak' => 500000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Rehabilitasi',
    'karakteristikkontrak' => 'Perbaikan Jalan dan Pengaspalan',
    'bulanmulai' => '2028-05-01',
    'bulanselesai' => '2028-10-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Gedung',
    'namapekerjaan' => 'Pembangunan Gedung Kantor Kecamatan',
    'tahunpelaksanaan' => 2030,
    'cvptpenyedia' => 'CV. Bangun Jaya',
    'nib' => '6677889900',
    'nilaikontrak' => 750000000.00,
    'sumberdana' => 'DAK',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Gedung Bertingkat',
    'bulanmulai' => '2030-03-01',
    'bulanselesai' => '2030-09-30',
    'dinas' => 'Dinas Cipta Karya Blora',
]);

profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Pengadaan Air Bersih',
    'namapekerjaan' => 'Pengadaan Sumur Bor dan Instalasi Air',
    'tahunpelaksanaan' => 2027,
    'cvptpenyedia' => 'PT. Tirta Sejahtera',
    'nib' => '9988776655',
    'nilaikontrak' => 200000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pengadaan',
    'karakteristikkontrak' => 'Pembangunan Sumur Bor dan Pipanisasi',
    'bulanmulai' => '2027-06-01',
    'bulanselesai' => '2027-11-30',
    'dinas' => 'Dinas Perumahan dan Permukiman Blora',
]);

profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Jembatan',
    'namapekerjaan' => 'Pembangunan Jembatan Desa Sumber',
    'tahunpelaksanaan' => 2031,
    'cvptpenyedia' => 'CV. Jembatan Kuat',
    'nib' => '3344556677',
    'nilaikontrak' => 900000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Konstruksi',
    'karakteristikkontrak' => 'Pembangunan Jembatan Beton',
    'bulanmulai' => '2031-04-01',
    'bulanselesai' => '2031-12-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Pengadaan Alat Medis',
    'namapekerjaan' => 'Pengadaan Alat Medis Puskesmas',
    'tahunpelaksanaan' => 2026,
    'cvptpenyedia' => 'PT. Medika Sejahtera',
    'nib' => '5566778899',
    'nilaikontrak' => 150000000.00,
    'sumberdana' => 'DAK',
    'jeniskontrak' => 'Kontrak Pengadaan',
    'karakteristikkontrak' => 'Pengadaan Alat Medis dan Sarana Kesehatan',
    'bulanmulai' => '2026-02-01',
    'bulanselesai' => '2026-07-31',
    'dinas' => 'Dinas Kesehatan Blora',
]);

profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Saluran Irigasi',
    'namapekerjaan' => 'Pembangunan Saluran Irigasi Desa Jiken',
    'tahunpelaksanaan' => 2032,
    'cvptpenyedia' => 'CV. Irigasi Jaya',
    'nib' => '2233445566',
    'nilaikontrak' => 600000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Saluran Irigasi Primer',
    'bulanmulai' => '2032-07-01',
    'bulanselesai' => '2032-12-31',
    'dinas' => 'Dinas Pertanian Blora',
]);

profilpaketkonsultasi::create([
    'jenispekerjaan' => 'Pekerjaan Pembangunan Pasar Tradisional',
    'namapekerjaan' => 'Pembangunan Pasar Tradisional Blora',
    'tahunpelaksanaan' => 2025,
    'cvptpenyedia' => 'PT. Pasar Makmur',
    'nib' => '8899001122',
    'nilaikontrak' => 800000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Pembangunan',
    'karakteristikkontrak' => 'Pembangunan Pasar Tradisional Modern',
    'bulanmulai' => '2025-03-01',
    'bulanselesai' => '2025-09-30',
    'dinas' => 'Dinas Perdagangan Blora',
]);

//======================== ===================================================================================
// PAKET KONSULTASI TENDER MAS JAKI BLORA
profilpaketkonsultasinontender::create([
    'jenispekerjaan' => 'Pekerjaan Perencanaan Drainase',
    'namapekerjaan' => 'Perencanaan Sistem Drainase Kota Blora',
    'tahunpelaksanaan' => 2029,
    'cvptpenyedia' => 'CV. Konsultan Drainase',
    'nib' => '7788990011',
    'nilaikontrak' => 250000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Konsultasi',
    'karakteristikkontrak' => 'Studi dan Perencanaan Drainase Kota',
    'bulanmulai' => '2029-05-01',
    'bulanselesai' => '2029-10-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketkonsultasinontender::create([
    'jenispekerjaan' => 'Pekerjaan Konsultasi Jalan',
    'namapekerjaan' => 'Studi Kelayakan Rehabilitasi Jalan Utama Kecamatan Cepu',
    'tahunpelaksanaan' => 2028,
    'cvptpenyedia' => 'PT. Konsultan Jalan',
    'nib' => '1122334455',
    'nilaikontrak' => 400000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Konsultasi',
    'karakteristikkontrak' => 'Studi dan Desain Rehabilitasi Jalan',
    'bulanmulai' => '2028-03-01',
    'bulanselesai' => '2028-08-31',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketkonsultasinontender::create([
    'jenispekerjaan' => 'Pekerjaan Konsultasi Gedung',
    'namapekerjaan' => 'Perencanaan Gedung Kantor Kecamatan',
    'tahunpelaksanaan' => 2030,
    'cvptpenyedia' => 'CV. Arsitek Jaya',
    'nib' => '6677889900',
    'nilaikontrak' => 600000000.00,
    'sumberdana' => 'DAK',
    'jeniskontrak' => 'Kontrak Konsultasi',
    'karakteristikkontrak' => 'Perencanaan dan Desain Gedung Bertingkat',
    'bulanmulai' => '2030-02-01',
    'bulanselesai' => '2030-07-31',
    'dinas' => 'Dinas Cipta Karya Blora',
]);

profilpaketkonsultasinontender::create([
    'jenispekerjaan' => 'Pekerjaan Studi Air Bersih',
    'namapekerjaan' => 'Studi Pengadaan Sumur Bor dan Instalasi Air',
    'tahunpelaksanaan' => 2027,
    'cvptpenyedia' => 'PT. Konsultan Tirta',
    'nib' => '9988776655',
    'nilaikontrak' => 180000000.00,
    'sumberdana' => 'APBN',
    'jeniskontrak' => 'Kontrak Konsultasi',
    'karakteristikkontrak' => 'Analisis Kebutuhan dan Perencanaan Air Bersih',
    'bulanmulai' => '2027-04-01',
    'bulanselesai' => '2027-09-30',
    'dinas' => 'Dinas Perumahan dan Permukiman Blora',
]);

profilpaketkonsultasinontender::create([
    'jenispekerjaan' => 'Pekerjaan Studi Jembatan',
    'namapekerjaan' => 'Analisis dan Desain Jembatan Desa Sumber',
    'tahunpelaksanaan' => 2031,
    'cvptpenyedia' => 'CV. Konsultan Jembatan',
    'nib' => '3344556677',
    'nilaikontrak' => 700000000.00,
    'sumberdana' => 'APBD',
    'jeniskontrak' => 'Kontrak Konsultasi',
    'karakteristikkontrak' => 'Studi Kelayakan dan Desain Jembatan Beton',
    'bulanmulai' => '2031-03-01',
    'bulanselesai' => '2031-09-30',
    'dinas' => 'Dinas Pekerjaan Umum Blora',
]);

profilpaketkonsultasinontender::create([
    'jenispekerjaan' => 'Pekerjaan Studi Medis',
    'namapekerjaan' => 'Kajian Pengadaan Alat Medis Puskesmas',
    'tahunpelaksanaan' => 2026,
    'cvptpenyedia' => 'PT. Medika Konsultan',
    'nib' => '5566778899',
    'nilaikontrak' => 120000000.00,
    'sumberdana' => 'DAK',
    'jeniskontrak' => 'Kontrak Konsultasi',
    'karakteristikkontrak' => 'Analisis Kebutuhan dan Spesifikasi Alat Medis',
    'bulanmulai' => '2026-01-01',
    'bulanselesai' => '2026-06-30',
    'dinas' => 'Dinas Kesehatan Blora',
]);


// =========================================================
// PROSES PAKET PEKERJAAN TENDER
prosespaket::create([
    'profilpaketpekerjaanblora_id' => 1, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'BELUM',
    'pemeliharaan' => 'BELUM',
    'paketselesai' => 'BELUM',
]);

prosespaketnontender::create([
    'profilpaketpekerjaannontender_id' => 1, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'BELUM',
    'pemeliharaan' => 'BELUM',
    'paketselesai' => 'BELUM',
]);

prosespaketkonsultasi::create([
    'profilpaketkonsultasi_id' => 1, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'BELUM',
    'pemeliharaan' => 'BELUM',
    'paketselesai' => 'BELUM',
]);

prosespaketkonsultasinontender::create([
    'profilpaketkonsultasinontender_id' => 1, // Sesuaikan dengan ID yang ada di tabel terkait
    'persiapan' => 'SELESAI',
    'pengadaan' => 'SELESAI',
    'pelaksanaan' => 'BELUM',
    'pemeliharaan' => 'BELUM',
    'paketselesai' => 'BELUM',
]);

// fort

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
//======================== ===================================================================================
// DATA BACKEND
//======================== ===================================================================================
tahunpilihan::create([
    'id' => '1',
    'tahun' => '2019',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

tahunpilihan::create([
    'id' => '2',
    'tahun' => '2020',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

tahunpilihan::create([
    'id' => '3',
    'tahun' => '2021',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

tahunpilihan::create([
    'id' => '4',
    'tahun' => '2022',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

tahunpilihan::create([
    'id' => '5',
    'tahun' => '2023',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

tahunpilihan::create([
    'id' => '6',
    'tahun' => '2024',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

tahunpilihan::create([
    'id' => '7',
    'tahun' => '2025',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
//======================== ===================================================================================
keterampilanpekerja::create([
    'id' => '1',
    'keterampilan' => 'GALI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '2',
    'keterampilan' => 'RELIEF',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '3',
    'keterampilan' => 'BANGUNAN GEDUNG LEVEL 1',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '4',
    'keterampilan' => 'PEMBESIAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '5',
    'keterampilan' => 'KITCHENSET',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '6',
    'keterampilan' => 'KONSTRUKSI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '7',
    'keterampilan' => 'PENGECATAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '8',
    'keterampilan' => 'AHLI TEMBOK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '9',
    'keterampilan' => 'LAS LISTRIK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '10',
    'keterampilan' => 'MESIN BROKER',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '11',
    'keterampilan' => 'KAYU DAN KUSEN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '12',
    'keterampilan' => 'HAMMER DRILL',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '13',
    'keterampilan' => 'OPERATOR BEKO',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '14',
    'keterampilan' => 'PASANG KERAMIK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '15',
    'keterampilan' => 'PEMASANGAN BATU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '16',
    'keterampilan' => 'PASANG BATU DAN COR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '17',
    'keterampilan' => 'BENGKEL DAN MEKANIK',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '18',
    'keterampilan' => 'PEMASANGAN BATU BATA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '19',
    'keterampilan' => 'KAYU DAN PEMASANGAN BATU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '20',
    'keterampilan' => 'PEMASANGAN BATU, BESI DAN KAYU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '21',
    'keterampilan' => 'PEMASANGAN KAYU DAN BATU BATA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

keterampilanpekerja::create([
    'id' => '22',
    'keterampilan' => 'PEMASANGAN BATU, COR, BESI, DAN KAYU ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
metodepengadaan::create([
    'id' => '1',
    'metode' => 'LANGSUNG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '2',
    'metode' => 'PELELANGAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '3',
    'metode' => 'UNDANGAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '4',
    'metode' => 'KONSULTASI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '5',
    'metode' => 'PENUNJUKAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '6',
    'metode' => 'E-TENDERING',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '7',
    'metode' => 'KUALIFIKASI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '8',
    'metode' => 'TERBUKA TERBATAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

metodepengadaan::create([
    'id' => '9',
    'metode' => 'LANGSUNG TERBATAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== PENGAWASAN LOKASI  ===================================================================================
agendastatus::create([
    'id' => '1',
    'status' => 'SEGERA HADIR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

agendastatus::create([
    'id' => '2',
    'status' => 'DI BATALKAN ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

agendastatus::create([
    'id' => '3',
    'status' => 'BERJALAN ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

agendastatus::create([
    'id' => '4',
    'status' => 'SELESAI ',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);
//======================== PENGAWASAN LOKASI  ===================================================================================
pengawasanlokasi::create([
    'id' => '1',
    'kota' => 'LEMBANG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '2',
    'kota' => 'PARONGPONG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '3',
    'kota' => 'CISARUA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '4',
    'kota' => 'CIKALONG WETAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '5',
    'kota' => 'CIPEUNDEY',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '6',
    'kota' => 'NGAMPRAH',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '7',
    'kota' => 'CIPATAT',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '8',
    'kota' => 'PADALARANG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '9',
    'kota' => 'BATUJAJAR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '10',
    'kota' => 'CIHAMPELAS',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '11',
    'kota' => 'CILILIN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '12',
    'kota' => 'CIPONGKOR',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '13',
    'kota' => 'RONGGA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '14',
    'kota' => 'SINDANGKERTA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '15',
    'kota' => 'GUNUNG HALU',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanlokasi::create([
    'id' => '16',
    'kota' => 'SAGULING',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);


//======================== ===================================================================================
pengawasanbangunangedung::create([
    'id' => '1',
    'bangunan' => 'GEDUNG PERKANTORAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '2',
    'bangunan' => 'GEDUNG KOMERSIAL',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '3',
    'bangunan' => 'GEDUNG INDUSTRI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '4',
    'bangunan' => 'GEDUNG PENDIDIKAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '5',
    'bangunan' => 'GEDUNG KESEHATAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '6',
    'bangunan' => 'GEDUNG PERUMAHAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '7',
    'bangunan' => 'GEDUNG PEMERINTAHAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '8',
    'bangunan' => 'GEDUNG BUDAYA',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '9',
    'bangunan' => 'GEDUNG HIBURAN',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanbangunangedung::create([
    'id' => '10',
    'bangunan' => 'GEDUNG TRANSPORTASI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//======================== ===================================================================================

pengawasanstatus::create([
    'id' => '1',
    'status' => 'RESIKO TINGGI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanstatus::create([
    'id' => '2',
    'status' => 'RESIKO SEDANG',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasanstatus::create([
    'id' => '3',
    'status' => 'RESIKO RENDAH',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

//  ================================================================
pengawasantindakan::create([
    'id' => '1',
    'tindakan' => 'BELUM DI TINDAKLANJUTI',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasantindakan::create([
    'id' => '2',
    'tindakan' => 'SEDANG DI PROSES',
    'created_at' => Carbon::now(),
    'updated_at' => Carbon::now(),
    'deleted_at' => null, // Jika Anda menggunakan soft deletes
]);

pengawasantindakan::create([
    'id' => '3',
    'tindakan' => 'SELESAI',
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


            // =======================================================================================================================
            // qa::create([
            //     'qasebagai_id'   => random_int(1, 9),       // Menghasilkan nomor acak antara 1 dan 9
            //     'qapertanyaan_id' => random_int(1, 11),    // Misalnya, nomor acak antara 1 dan 100 (sesuaikan rentangnya jika perlu)
            //     'nama_lengkap'    => 'Nama Lengkap',        // Ganti dengan nama lengkap yang sesuai
            //     'email'           => 'email@example.com',   // Ganti dengan email yang sesuai
            //     'telepon'         => '08123456789',         // Ganti dengan nomor telepon yang sesuai
            //     'created_at'      => now(),
            //     'updated_at'      => now(),
            // ]);

        // =======================================================================================================================
            qasebagai::create([
                'sebagai'           => 'Kontraktor',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Pengawas',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Tenaga Ahli',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Tenaga Tukang',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Dinas Terkait',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qasebagai::create([
                'sebagai'           => 'Masyarakat Umum',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);


        // =======================================================================================================================
            qapertanyaan::create([
                'pertanyaan'        => 'Sertifikat Laik Fungsi',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Persetujuan Bangunan Gedung ',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Inspeksi Lapangan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Pemeliharaan Perbaikan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Penyediaan Material',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Insfrastruktur Perkotaan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Insfrastruktur Jalan',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Insfrastruktur Industri',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Teknik Konstruksi',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Teknik Struktur',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
            ]);

            qapertanyaan::create([
                'pertanyaan'        => 'Teknik Rekayasa & Air Limbah',       // Menghasilkan nomor acak antara 1 dan 9
                'created_at'        => now(),
                'updated_at'        => now(),
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
