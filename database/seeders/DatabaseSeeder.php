<?php

namespace Database\Seeders;
use Illuminate\Support\Str;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
// namespace App\Models;

use App\Models\agendasertifikasi;
use App\Models\agendastatus;
use App\Models\Agendastatus as ModelsAgendastatus;
use App\Models\asosiasipengusaha;
use App\Models\bantuanteknis;
use App\Models\kelurahandesa;
use App\Models\rencanagsbblora;
use App\Models\statusadmin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\bgkartuinventarisbangunan;
use App\Models\bujkkonsultan;
use App\Models\statushaktanahbangunangedung;
use App\Models\kecamatanblora;
use App\Models\datastrukturbangunangedung;
use App\Models\datainstitusibangunangedung;
use App\Models\statusbangunangedung;
use App\Models\fungsibangunan;
use App\Models\klasifikasibangunangedung;
use App\Models\profiltanahbangunangedung;
use App\Models\kedinasan;
use App\Models\kodelokasibangunangedung;
use App\Models\databangunangedung;
use App\Models\fasilitatorasses;
use App\Models\jenispengajuanbantek;
use App\Models\kepemilikanbangunangedung;
use App\Models\krkhunian;
use App\Models\krkkeagamaan;
use App\Models\krksosbud;
use App\Models\krkusaha;
use App\Models\namafasilitator;
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

        User::create([
            'id'  => 1,
            'name'  => 'Sigit Septiadi',
            'username' => 'Sigit',
            'statusadmin_id' => '1',
            'avatar' => 'assets/abgblora/logo/iconabgblora.png',
            'email' => 'sigitseptiadi1@gmail.com',
            'password' => bcrypt('adminadmin')
        ]);

        User::create([
            'id'  => 2,
            'name'  => 'Mas Primas',
            'username' => 'Prima',
            'statusadmin_id' => '1',
            'avatar' => 'assets/abgblora/logo/iconabgblora.png',
            'email' => 'ganet.suryo@gmail.com',
            'password' => bcrypt('rekapin111888')
        ]);

        // MENU KEDINASAN

        statusadmin::create([
            'id'  => 1,
            'status' => 'super_admin',
        ]);

        statusadmin::create([
            'id'  => 2,
            'status' => 'pengguna',
        ]);




// LAPAR





// makanyu
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
}
