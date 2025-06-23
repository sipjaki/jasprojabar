<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\FedashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\BantuanhibahbgController;
use App\Http\Controllers\BantuanhibahController;
use App\Http\Controllers\BantuanteknisController;
use App\Http\Controllers\DatabaseAbgController;
use App\Http\Controllers\KrkController;
use App\Http\Controllers\PendataanBangunanGedungController;
use App\Http\Controllers\PenilikbangunanController;
use Illuminate\Support\Facades\Route;


use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ------------------------- FRONTEND HALAMAN UTAMA ABG BLORA BANGUNAN GEDUNG --------------------------

Route::get('/', [FedashboardController::class, 'index']);
Route::get('/web', [FedashboardController::class, 'web']);
// Route::post('/qapertanyaanstore', [FedashboardController::class, 'createbarustorepertanyaan'])->middleware('auth')->name('create.storeqapertanyaanbaru');
// Route::post('/qapertanyaanstorebaru', [FedashboardController::class, 'createstorepertanyaanpublik'])->middleware('auth')->name('createpertanyaanstorebaru');
// Route::post('/qapertanyaanstorebaru', [AdministratorController::class, 'createstorepertanyaanpublik'])->name('createpertanyaanstorebaru');

// 01_ MENU PBG SLF
// ----------------------------------------------------------------------------------------
Route::get('/respbgslfindex', [FedashboardController::class, 'menurespbgslfindex']);

// 03_ MENU BANGUNAN GEDUNG ANDROID
// ----------------------------------------------------------------------------------------
Route::get('/resbgindex', [FedashboardController::class, 'menuresbangunangedungindex']);

// 04_ MENU BANTUAN TEKNIS
// ----------------------------------------------------------------------------------------
Route::get('/resbantekindex', [FedashboardController::class, 'resbantekindex']);
Route::get('/resbantekpermohonan', [FedashboardController::class, 'resbantekpermohonan'])->middleware('auth');

// WEB 03_ MENU BANGUNAN GEDUNG ANDROID
// ----------------------------------------------------------------------------------------
Route::get('/pendataankicbangunangedung', [PendataanBangunanGedungController::class, 'datakicbangunan']);
Route::get('/databangunangedung', [PendataanBangunanGedungController::class, 'databangunangedung']);
Route::get('/databangunangedung/{namabangunan}', [PendataanBangunanGedungController::class, 'databangunangedungshow']);
Route::get('/statistikbg', [PendataanBangunanGedungController::class, 'statistikbg']);


// WEB 06_ MENU KRK BANGUNAN GEDUNG
// ----------------------------------------------------------------------------------------
Route::get('/informasikrk', [KrkController::class, 'informasikrk']);
Route::get('/permohonankrk', [KrkController::class, 'permohonankrk'])->middleware('auth');


Route::get('/pemohonkrk', [KrkController::class, 'pemohonkrk'])->middleware('auth');

// MENU 02 PERMOHONAN KRK USAHA
Route::get('/permohonankrkusaha', [KrkController::class, 'permohonankrkusaha'])->name('permohonan.krkusaha');
Route::post('/permohonankrkusaha/create', [KrkController::class, 'permohonankrkusahacreate'])->name('permohonan.krkusahacreate');
Route::post('/berkasusaha/{id}/validate', [KrkController::class, 'validateBerkasusaha'])->name('berkasusaha.validate');
Route::get('/permohonanpengesahanusaha/{id}', [KrkController::class, 'permohonanpengesahanusaha'])->name('permohonan.pengesahanusaha');
Route::post('/permohonanpengesahanusahacreate/{id}', [KrkController::class, 'permohonanpengesahanusahacreate'])->name('permohonan.pengesahanusahacreate');
Route::get('/permohonanpengesahanusahaber/{id}', [KrkController::class, 'permohonanpengesahanusahaber'])->name('permohonan.permohonanpengesahanusahaber');
Route::delete('/krkusahasuratdelete/{id}', [KrkController::class, 'destroykrkusahasurat'])->name('krkusahasurat.destroy');

// Route::get('/permohonankrk', [KrkController::class, 'permohonankrk'])->middleware('auth');

// MENU 02 PERMOHONAN KRK HUNIAN
Route::get('/permohonankrkhunian', [KrkController::class, 'permohonankrkhunian'])->name('permohonan.krkhunian');
Route::post('/permohonankrkhunian/create', [KrkController::class, 'permohonankrkhuniancreate'])->name('permohonan.krkhuniancreate');
Route::post('/berkashunian/{id}/validate', [KrkController::class, 'validateBerkashunian'])->name('berkashunian.validate');
// Route::get('/permohonankrk', [KrkController::class, 'permohonankrk'])->middleware('auth');


// MENU 03 PERMOHONAN KRK KEGAAMAAN
Route::get('/permohonankrkagama', [KrkController::class, 'permohonankrkagama'])->name('permohonan.krkagama');
Route::post('/permohonankrkagama/create', [KrkController::class, 'permohonankrkagamacreate'])->name('permohonan.krkagamacreate');

// MENU 03 PERMOHONAN KRK KEGAAMAAN
Route::get('/permohonankrksosbud', [KrkController::class, 'permohonankrksosbud'])->name('permohonan.krksosbud');
Route::post('/permohonankrksosbud/create', [KrkController::class, 'permohonankrksosbudcreate'])->name('permohonan.krksosbudcreate');


// =================================================================================================================================
// MENU BACKEND ABG BLORA BANGUNAN GEDUNG KABUPATEN BLORA
// MENU 06 KRK BANGUNAN GEDUNG

// AKUN PEMOHON KRK KETERANGAN RENCANA KOTA
Route::get('/bekrkusahapemohon', [KrkController::class, 'bekrkusahapemohon'])->name('bekrkusahapemohon.indexpemohon');
Route::get('/bekrkhunianpemohon', [KrkController::class, 'bekrkhunianpemohon'])->name('bekrkhunianpemohon.indexpemohon');
Route::get('/bekrkkeagamaanpemohon', [KrkController::class, 'bekrkkeagamaanpemohon'])->name('bekrkkeagamaanpemohon.indexpemohon');
Route::get('/bekrksosbudpemohon', [KrkController::class, 'bekrksosbudpemohon'])->name('bekrksosbud.indexpemohon');


// MENU KRK USAHA
Route::get('/bekrkusaha', [KrkController::class, 'bekrkusaha'])->name('krkusaha.index');
Route::get('/bekrkshowpermohonan/{id}', [KrkController::class, 'bekrkshowpermohonan'])->middleware('auth')->name('bekrkshowpermohonan.show');
Route::put('/validasikrkusaha/{id}', [KrkController::class, 'validasikrkusaha'])->middleware('auth')->name('validasikrkusaha');
Route::put('/valberkasusaha/{id}', [KrkController::class, 'valberkasusaha1'])->name('valberkasusaha.update');
Route::get('/doklapkrkusaha/{id}', [KrkController::class, 'doklapkrkusaha'])->middleware('auth')->name('doklapkrkusaha.show');

Route::get('/doklapkrkusahacreate/{id}', [KrkController::class, 'doklapkrkusahacreate'])->middleware('auth')->name('doklapkrkusahacreate.create');
Route::post('/doklapkrkusahacreatenew', [KrkController::class, 'doklapkrkusahacreatenew'])->middleware('auth')->name('create.doklapkrkusahacreatenew');

Route::delete('/doklapkrkusahacreatedelete/{id}', [KrkController::class, 'doklapkrkusahacreatedelete'])->middleware('auth')->name('delete.doklapkrkusahacreatedelete');

Route::put('/valberkasusaha2/{id}', [KrkController::class, 'valberkasusaha2'])->name('valberkasusaha2.update');
Route::put('/valberkasusaha3/{id}', [KrkController::class, 'valberkasusaha3'])->name('valberkasusaha3.update');
Route::put('/valberkasusaha4/{id}', [KrkController::class, 'valberkasusaha4'])->name('valberkasusaha4.update');

Route::get('/permohonankrkusahafinal/{id}', [KrkController::class, 'permohonankrkusahafinal'])->name('permohonan.permohonankrkusahafinal');

Route::get('/krkusahanoterbit/{id}', [KrkController::class, 'krkusahanoterbit'])->middleware('auth')->name('krkusahanoterbit.create');
Route::post('/krkusahanoterbitnew/{id}', [KrkController::class, 'krkusahanoterbitnew'])->middleware('auth')->name('create.krkusahanoterbitnew');


Route::get('/bekrkusahaperbaikan/{id}', [KrkController::class, 'bekrkusahaperbaikan'])->middleware('auth')->name('bekrkusahaperbaikan.perbaikan');
Route::post('/bekrkusahaperbaikannew/{id}', [KrkController::class, 'bekrkusahaperbaikannewupdate'])->middleware('auth')->name('bekrkusahaperbaikannewupdate');

Route::delete('/dokbekrkusahadelete/{id}', [KrkController::class, 'dokbekrkusahadelete'])->middleware('auth')->name('delete.dokbekrkusahadelete');



// MENU KRK HUNIAN
Route::get('/bekrkindex', [KrkController::class, 'bekrkindex']);
// -------
Route::get('/bekrkhunian', [KrkController::class, 'bekrkhunian'])->name('bekrkhunianindex');

Route::get('/bekrkhunianpermohonan/{id}', [KrkController::class, 'bekrkhunianpermohonan'])->middleware('auth')->name('bekrkhunianpermohonan.show');
Route::put('/validasikrkhunian/{id}', [KrkController::class, 'validasikrkhunian'])->middleware('auth')->name('validasikrkhunian');
Route::put('/valberkashunian1/{id}', [KrkController::class, 'valberkashunian1'])->name('valberkashunian1.update');
Route::get('/doklapkrkhunian/{id}', [KrkController::class, 'doklapkrkhunian'])->middleware('auth')->name('doklapkrkhunian.show');

Route::get('/doklapkrkhuniancreate/{id}', [KrkController::class, 'doklapkrkhuniancreate'])->middleware('auth')->name('doklapkrkhuniancreate.create');
Route::post('/doklapkrkhuniancreatenew', [KrkController::class, 'doklapkrkhuniancreatenew'])->middleware('auth')->name('create.doklapkrkhuniancreatenew');

Route::delete('/doklapkrkhuniancreatedelete/{id}', [KrkController::class, 'doklapkrkhuniancreatedelete'])->middleware('auth')->name('delete.doklapkrkhuniancreatedelete');

Route::put('/valberkashunian2/{id}', [KrkController::class, 'valberkashunian2'])->name('valberkashunian2.update');
Route::post('/berkashunianval/{id}/validate', [KrkController::class, 'berkashunianval'])->name('berkashunianval.validate');

Route::get('/perpengesahanhunian/{id}', [KrkController::class, 'perpengesahanhunian'])->name('permohonan.perpengesahanhunian');
Route::post('/perpengesahanhuniancreate/{id}', [KrkController::class, 'perpengesahanhuniancreate'])->name('permohonan.pengesahanhuniancreate');

Route::get('/perpengesahanhunianber/{id}', [KrkController::class, 'perpengesahanhunianber'])->name('berkas.perpengesahanhunianber');
Route::delete('/krkhuniansuratdelete/{id}', [KrkController::class, 'krkhuniansuratdelete'])->name('krkusahasuratsurat.destroy');


Route::put('/valberkashunian3/{id}', [KrkController::class, 'valberkashunian3'])->name('valberkashunian3.update');

Route::get('/permohonankrkhunianfinal/{id}', [KrkController::class, 'permohonankrkhunianfinal'])->name('permohonan.permohonankrkhunianfinal');

Route::get('/krkhuniannoterbit/{id}', [KrkController::class, 'krkhuniannoterbit'])->middleware('auth')->name('krkhuniannoterbit.create');
Route::post('/krkhuniannoterbitnew/{id}', [KrkController::class, 'krkhuniannoterbitnew'])->middleware('auth')->name('create.krkhuniannoterbitnew');

Route::put('/valberkashunian4/{id}', [KrkController::class, 'valberkashunian4'])->name('valberkashunian4.update');


Route::get('/bekrkhunianperbaikan/{id}', [KrkController::class, 'bekrkhunianperbaikan'])->middleware('auth')->name('bekrkhunianperbaikan.perbaikan');
Route::post('/bekrkhunianperbaikannew/{id}', [KrkController::class, 'bekrkhunianperbaikannewupdate'])->middleware('auth')->name('bekrkhunianperbaikannewupdate');

Route::delete('/dokbekrkhuniandelete/{id}', [KrkController::class, 'dokbekrkhuniandelete'])->middleware('auth')->name('delete.dokbekrkhuniandelete');

// -------
// MENU KRK KEAGAMAAN
Route::get('/bekrkkeagamaan', [KrkController::class, 'bekrkkeagamaan'])->name('bekrkkeagamaanindex');

Route::get('/bekrkkeagamaanpermohonan/{id}', [KrkController::class, 'bekrkkeagamaanpermohonan'])->middleware('auth')->name('bekrkkeagamaanpermohonan.show');
Route::put('/validasikrkkeagamaan/{id}', [KrkController::class, 'validasikrkkeagamaan'])->middleware('auth')->name('validasikrkkeagamaan');
Route::put('/valberkasagama1/{id}', [KrkController::class, 'valberkasagama1'])->name('valberkasagama1.update');
Route::get('/doklapkrkkeagamaan/{id}', [KrkController::class, 'doklapkrkkeagamaan'])->middleware('auth')->name('doklapkrkkeagamaan.show');

Route::get('/doklapkrkkeagamaancreate/{id}', [KrkController::class, 'doklapkrkkeagamaancreate'])->middleware('auth')->name('doklapkrkkeagamaancreate.create');
Route::post('/doklapkrkkeagamaancreatenew', [KrkController::class, 'doklapkrkkeagamaancreatenew'])->middleware('auth')->name('create.doklapkrkkeagamaancreatenew');

Route::delete('/doklapkrkkeagamaancreatedelete/{id}', [KrkController::class, 'doklapkrkkeagamaandelete'])->middleware('auth')->name('delete.doklapkrkkeagamaancreatedelete');

Route::put('/valberkasagama2/{id}', [KrkController::class, 'valberkasagama2'])->name('valberkasagama2.update');
Route::post('/berkaskeagamaanval/{id}/validate', [KrkController::class, 'berkaskeagamaanval'])->name('berkaskeagamaanval.validate');

Route::get('/perpengesahanagama/{id}', [KrkController::class, 'perpengesahanagama'])->name('permohonan.perpengesahanagama');
Route::post('/perpengesahanagamacreate/{id}', [KrkController::class, 'perpengesahanagamacreate'])->name('permohonan.perpengesahanagamacreate');

Route::get('/perpengesahanagamaber/{id}', [KrkController::class, 'perpengesahanagamaber'])->name('berkas.perpengesahanagamaber');
Route::delete('/krkagamasuratdelete/{id}', [KrkController::class, 'krkagamasuratdelete'])->name('krkagamasuratdelete.destroy');


Route::put('/valberkasagama3/{id}', [KrkController::class, 'valberkasagama3'])->name('valberkasagama3.update');

Route::get('/permohonankrkkeagamaanfinal/{id}', [KrkController::class, 'permohonankrkkeagamaanfinal'])->name('permohonan.permohonankrkkeagamaanfinal');

Route::get('/krkagamanoterbit/{id}', [KrkController::class, 'krkagamanoterbit'])->middleware('auth')->name('krkagamanoterbit.create');
Route::post('/krkagamanoterbitnew/{id}', [KrkController::class, 'krkagamanoterbitnew'])->middleware('auth')->name('create.krkagamanoterbitnew');

Route::put('/valberkasagama4/{id}', [KrkController::class, 'valberkasagama4'])->name('valberkasagama4.update');

Route::get('/bekrkkeagamaanperbaikan/{id}', [KrkController::class, 'bekrkkeagamaanperbaikan'])->middleware('auth')->name('bekrkkeagamaanperbaikan.perbaikan');
Route::post('/bekrkkeagamaanperbaikannew/{id}', [KrkController::class, 'bekrkkeagamaanperbaikannew'])->middleware('auth')->name('bekrkkeagamaanperbaikannewupdate');

Route::delete('/dokbekrkkeagamaandelete/{id}', [KrkController::class, 'dokbekrkkeagamaandelete'])->middleware('auth')->name('delete.dokbekrkkeagamaandelete');


// -------
// MENU KRK SOSIAL BUDAYA
Route::get('/bekrksosbud', [KrkController::class, 'bekrksosbud'])->name('bekrksosbudindex');

Route::get('/bekrksosbudpermohonan/{id}', [KrkController::class, 'bekrksosbudpermohonan'])->middleware('auth')->name('bekrksosbudpermohonan.show');
Route::put('/validasikrksosbud/{id}', [KrkController::class, 'validasikrksosbud'])->middleware('auth')->name('validasikrksosbud');
Route::put('/valberkassosbud1/{id}', [KrkController::class, 'valberkassosbud1'])->name('valberkassosbud1.update');
Route::get('/doklapkrksosbud/{id}', [KrkController::class, 'doklapkrksosbud'])->middleware('auth')->name('doklapkrksosbud.show');

Route::get('/doklapkrksosbudcreate/{id}', [KrkController::class, 'doklapkrksosbudcreate'])->middleware('auth')->name('ddoklapkrksosbudcreate.create');
Route::post('/doklapkrksosbudcreatenew', [KrkController::class, 'doklapkrksosbudcreatenew'])->middleware('auth')->name('create.doklapkrksosbudcreatenew');

Route::delete('/doklapkrksosbudcreatedelete/{id}', [KrkController::class, 'doklapkrksosbudcreatedelete'])->middleware('auth')->name('delete.doklapkrksosbudcreatedelete');

Route::put('/valberkassosbud2/{id}', [KrkController::class, 'valberkassosbud2'])->name('valberkassosbud2.update');
Route::post('/berkassosbudval/{id}/validate', [KrkController::class, 'berkassosbudval'])->name('berkassosbudval.validate');

Route::get('/perpengesahansosbud/{id}', [KrkController::class, 'perpengesahansosbud'])->name('permohonan.perpengesahansosbud');
Route::post('/perpengesahansosbudcreate/{id}', [KrkController::class, 'perpengesahansosbudcreate'])->name('permohonan.perpengesahansosbudcreate');

Route::get('/perpengesahansosbudber/{id}', [KrkController::class, 'perpengesahansosbudber'])->name('berkas.perpengesahansosbudber');
Route::delete('/krksosbudsuratdelete/{id}', [KrkController::class, 'krksosbudsuratdelete'])->name('krksosbudsuratdelete.destroy');


Route::put('/valberkassosbud3/{id}', [KrkController::class, 'valberkassosbud3'])->name('valberkassosbud3.update');

Route::get('/permohonankrksosbudfinal/{id}', [KrkController::class, 'permohonankrksosbudfinal'])->name('permohonan.permohonankrksosbudfinal');

Route::get('/krksosbufnoterbit/{id}', [KrkController::class, 'krksosbufnoterbit'])->middleware('auth')->name('krksosbufnoterbit.create');
Route::post('/krksosbufnoterbitnew/{id}', [KrkController::class, 'krksosbufnoterbitnew'])->middleware('auth')->name('create.krksosbufnoterbitnew');

Route::put('/valberkassosbud4/{id}', [KrkController::class, 'valberkassosbud4'])->name('valberkassosbud3.update');


Route::get('/bekrksosbudperbaikan/{id}', [KrkController::class, 'bekrksosbudperbaikan'])->middleware('auth')->name('bekrksosbudperbaikan.perbaikan');
Route::post('/bekrksosbudperbaikannew/{id}', [KrkController::class, 'bekrksosbudperbaikannew'])->middleware('auth')->name('bekrksosbudperbaikannewupdate');

// Route::delete('/dokbekrkkeagamaandelete/{id}', [KrkController::class, 'dokbekrkkeagamaandelete'])->middleware('auth')->name('delete.dokbekrkkeagamaandelete');


// MENU 04 BANTUAN TEKNIS
Route::get('/bebantuanteknisindex', [BantuanteknisController::class, 'bebantuanteknisindex'])->middleware('auth')->name('bebantuanteknisindexmenu');
Route::get('/bebantuanteknis', [BantuanteknisController::class, 'bebantuanteknisberkas'])->middleware('auth')->name('bebantuanteknissemua');
// Route::delete('/bebantuanteknisdelete/{id}', [AdministratorController::class, 'bebantuanteknisdelete'])->middleware('auth')->name('delete.bantuanteknis');
Route::delete('/bebantuanteknisdelete/{id}', [BantuanteknisController::class, 'bebantuanteknisdelete'])->middleware('auth')->name('delete.bantuanteknis');


// DAFTAR SURAT PERMOHONAN BERKAS 1
Route::get('/bebantuanteknisassistensi', [BantuanteknisController::class, 'bebantuanteknisassistensi'])->middleware('auth')->name('bebantuanteknisassistensiindex');
Route::get('/beasistensishow/{id}', [BantuanteknisController::class, 'beasistensishow'])->middleware('auth')->name('beasistensishowberkas1.show');
Route::put('/validasidokumenbantek/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek'])->middleware('auth')->name('validasidokumenbantek');
Route::get('/bebantekpemohondinasperbaikan/{id}', [BantuanteknisController::class, 'bebantekpemohondinasperbaikan'])->middleware('auth')->name('bebantekpemohondinasperbaikan.perbaikan');
Route::post('/bebantekpemohondinasperbaikans/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganberkasbaru'])->middleware('auth')->name('bebantekpemohondinasperbaikan.uploads');


// DAFTAR SURAT PERMOHONAN BERKAS 2
Route::get('/bepenelitikontrak', [BantuanteknisController::class, 'bepenelitikontrak'])->middleware('auth')->name('bepenelitikontrakindex');
Route::get('/bebantuanteknisshow/{id}', [BantuanteknisController::class, 'bebantuanteknisberkasshow'])->middleware('auth')->name('bebantuanteknis.show');
Route::put('/validasidokumenbantek2/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek2'])->middleware('auth')->name('validasidokumenbantek2');
Route::get('/bebantekperpeneliti/{id}', [BantuanteknisController::class, 'bebantekperpeneliti'])->middleware('auth')->name('bebantekperpeneliti.perbaikan');
Route::post('/bebantekperpenelitiperbaikan/{id}', [BantuanteknisController::class, 'bebantekperpenelitiperbaikan'])->middleware('auth')->name('bebantekperpenelitiperbaikan');


// DAFTAR SURAT PERMOHONAN BERKAS 3
Route::get('/beperhitunganpenyusutan', [BantuanteknisController::class, 'beperhitunganpenyusutan'])->middleware('auth')->name('beperhitunganpenyusutanindex');
Route::get('/beperhitunganpenyusutanshow/{id}', [BantuanteknisController::class, 'beperhitunganpenyusutanshow'])->middleware('auth')->name('beperhitunganpenyusutan.show');
Route::put('/validasidokumenbantek3/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek3'])->middleware('auth')->name('validasidokumenbantek3');
Route::get('/beperhitunganpenyusutanper/{id}', [BantuanteknisController::class, 'beperhitunganpenyusutanper'])->middleware('auth')->name('beperhitunganpenyusutanper.perbaikan');
Route::post('/beperhitunganpenyusutanpernew/{id}', [BantuanteknisController::class, 'beperhitunganpenyusutanpernew'])->middleware('auth')->name('beperhitunganpenyusutanpernew');


// DAFTAR SURAT PERMOHONAN BERKAS 4
Route::get('/beperhitungankerusakan', [BantuanteknisController::class, 'beperhitungankerusakan'])->middleware('auth')->name('beperhitungankerusakanindex');
Route::get('/beperhitungankerusakanshow/{id}', [BantuanteknisController::class, 'beperhitungankerusakanshow'])->middleware('auth')->name('beperhitungankerusakan.show');
Route::put('/validasidokumenbantek4/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek4'])->middleware('auth')->name('validasidokumenbantek4');
Route::get('/beperhitungankerusakanper/{id}', [BantuanteknisController::class, 'beperhitungankerusakanper'])->middleware('auth')->name('beperhitungankerusakanper.perbaikan');
Route::post('/beperhitungankerusakanpernew/{id}', [BantuanteknisController::class, 'beperhitungankerusakanpernew'])->middleware('auth')->name('beperhitungankerusakanpernew');



// DAFTAR SURAT PERMOHONAN BERKAS 5
Route::get('/beperhitunganbgn', [BantuanteknisController::class, 'beperhitunganbgn'])->middleware('auth')->name('beperhitunganbgnindex');
Route::get('/beperhitunganbgnshow/{id}', [BantuanteknisController::class, 'beperhitunganbgnshow'])->middleware('auth')->name('beperhitunganbgnshow.show');
Route::put('/validasidokumenbantek5/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek5'])->middleware('auth')->name('validasidokumenbantek5');
Route::get('/beperhitunganbgnper/{id}', [BantuanteknisController::class, 'beperhitunganbgnper'])->middleware('auth')->name('beperhitunganbgnper.perbaikan');
Route::post('/beperhitunganbgnpernew/{id}', [BantuanteknisController::class, 'beperhitunganbgnpernew'])->middleware('auth')->name('beperhitunganbgnpernew');

// DAFTAR SURAT PERMOHONAN BERKAS 6
Route::get('/bekonstruksiperhitunganbgn', [BantuanteknisController::class, 'bekonstruksiperhitunganbgn'])->middleware('auth')->name('bekonstruksiperhitunganbgnindex');
Route::get('/bekonstruksiperhitunganbgnshow/{id}', [BantuanteknisController::class, 'bekonstruksiperhitunganbgnshow'])->middleware('auth')->name('bekonstruksiperhitunganbgn.show');
Route::put('/validasidokumenbantek6/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek6'])->middleware('auth')->name('validasidokumenbantek6');
Route::get('/bekonstruksiperhitunganbgnper/{id}', [BantuanteknisController::class, 'bekonstruksiperhitunganbgnper'])->middleware('auth')->name('bekonstruksiperhitunganbgnper.perbaikan');
Route::post('/bekonstruksiperhitunganbgnnew/{id}', [BantuanteknisController::class, 'bekonstruksiperhitunganbgnnew'])->middleware('auth')->name('bekonstruksiperhitunganbgnnew');

// DAFTAR SURAT PERMOHONAN BERKAS 7
Route::get('/beserahterima', [BantuanteknisController::class, 'beserahterima'])->middleware('auth')->name('beserahterimaindex');
Route::get('/beserahterimashow/{id}', [BantuanteknisController::class, 'beserahterimashow'])->middleware('auth')->name('beserahterima.show');
Route::put('/validasidokumenbantek7/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek7'])->middleware('auth')->name('validasidokumenbantek7');
Route::get('/beserahterimaper/{id}', [BantuanteknisController::class, 'beserahterimaper'])->middleware('auth')->name('beserahterimaper.perbaikan');
Route::post('/beserahterimapernew/{id}', [BantuanteknisController::class, 'beserahterimapernew'])->middleware('auth')->name('beserahterimapernew');

// SIGIT SURAT

// DAFTAR SURAT PERMOHONAN BERKAS 8
Route::get('/bepersontimteknis', [BantuanteknisController::class, 'bepersontimteknis'])->middleware('auth')->name('bepersontimteknisindex');
Route::get('/bepersontimteknisshow/{id}', [BantuanteknisController::class, 'bepersontimteknisshow'])->middleware('auth')->name('bepersontimteknis.show');
Route::put('/validasidokumenbantek8/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek8'])->middleware('auth')->name('validasidokumenbantek8');
Route::get('/bepersontimteknisper/{id}', [BantuanteknisController::class, 'bepersontimteknisper'])->middleware('auth')->name('bepersontimteknisper.perbaikan');
Route::post('/bepersontimteknispernew/{id}', [BantuanteknisController::class, 'bepersontimteknispernew'])->middleware('auth')->name('bepersontimteknispernew');

// SIGIT
// DAFTAR SURAT PERMOHONAN BERKAS 2

// Route::get('/bebantuanteknisshowvalidasi/{id}', [BantuanteknisController::class, 'bebantuanteknisberkasshow'])->middleware('auth')->name('validasidokumenbantek');
// VERIFIKASI BANTUAN TEKNIS


Route::put('/validasiberkas1permohonan1/{id}', [BantuanteknisController::class, 'valsuratpermohonan1'])->name('validasiberkas1.update');
Route::put('/validasiberkas1permohonan2/{id}', [BantuanteknisController::class, 'valsuratpermohonan2'])->name('validasiberkas2.update');
Route::put('/validasiberkas1permohonan3/{id}', [BantuanteknisController::class, 'valsuratpermohonan3'])->name('validasiberkas3.update');
Route::put('/validasiberkas1permohonan4/{id}', [BantuanteknisController::class, 'valsuratpermohonan4'])->name('validasiberkas4.update');

// SURAT PERMOHONAN 2

Route::put('/validasiberkas2permohonan1/{id}', [BantuanteknisController::class, 'valsurat2permohonan1'])->name('valsurat2permohonan1.update');
Route::put('/validasiberkas2permohonan2/{id}', [BantuanteknisController::class, 'valsurat2permohonan2'])->name('valsurat2permohonan2.update');
Route::put('/validasiberkas2permohonan3/{id}', [BantuanteknisController::class, 'valsurat2permohonan3'])->name('valsurat2permohonan3.update');
Route::put('/validasiberkas2permohonan4/{id}', [BantuanteknisController::class, 'valsurat2permohonan4'])->name('valsurat2permohonan4.update');

// SURAT PERMOHONAN 3

Route::put('/validasiberkas3permohonan1/{id}', [BantuanteknisController::class, 'valsurat3permohonan1'])->name('valsurat3permohonan1.update');
Route::put('/validasiberkas3permohonan2/{id}', [BantuanteknisController::class, 'valsurat3permohonan2'])->name('valsurat3permohonan2.update');
Route::put('/validasiberkas3permohonan3/{id}', [BantuanteknisController::class, 'valsurat3permohonan3'])->name('valsurat3permohonan3.update');
Route::put('/validasiberkas3permohonan4/{id}', [BantuanteknisController::class, 'valsurat3permohonan4'])->name('valsurat3permohonan4.update');

// SURAT PERMOHONAN 4

Route::put('/validasiberkas4permohonan1/{id}', [BantuanteknisController::class, 'valsurat4permohonan1'])->name('valsurat4permohonan1.update');
Route::put('/validasiberkas4permohonan2/{id}', [BantuanteknisController::class, 'valsurat4permohonan2'])->name('valsurat4permohonan2.update');
Route::put('/validasiberkas4permohonan3/{id}', [BantuanteknisController::class, 'valsurat4permohonan3'])->name('valsurat4permohonan3.update');
Route::put('/validasiberkas4permohonan4/{id}', [BantuanteknisController::class, 'valsurat4permohonan4'])->name('valsurat4permohonan4.update');

// SURAT PERMOHONAN 5

Route::put('/validasiberkas5permohonan1/{id}', [BantuanteknisController::class, 'valsurat5permohonan1'])->name('valsurat5permohonan1.update');
Route::put('/validasiberkas5permohonan2/{id}', [BantuanteknisController::class, 'valsurat5permohonan2'])->name('valsurat5permohonan2.update');
Route::put('/validasiberkas5permohonan3/{id}', [BantuanteknisController::class, 'valsurat5permohonan3'])->name('valsurat5permohonan3.update');
Route::put('/validasiberkas5permohonan4/{id}', [BantuanteknisController::class, 'valsurat5permohonan4'])->name('valsurat5permohonan4.update');

// SURAT PERMOHONAN 6
Route::put('/validasiberkas6permohonan1/{id}', [BantuanteknisController::class, 'valsurat6permohonan1'])->name('valsurat6permohonan1.update');
Route::put('/validasiberkas6permohonan2/{id}', [BantuanteknisController::class, 'valsurat6permohonan2'])->name('valsurat6permohonan2.update');
Route::put('/validasiberkas6permohonan3/{id}', [BantuanteknisController::class, 'valsurat6permohonan3'])->name('valsurat6permohonan3.update');
Route::put('/validasiberkas6permohonan4/{id}', [BantuanteknisController::class, 'valsurat6permohonan4'])->name('valsurat6permohonan4.update');


// SURAT PERMOHONAN 7

Route::put('/validasiberkas7permohonan1/{id}', [BantuanteknisController::class, 'valsurat7permohonan1'])->name('valsurat7permohonan1.update');
Route::put('/validasiberkas7permohonan2/{id}', [BantuanteknisController::class, 'valsurat7permohonan2'])->name('valsurat7permohonan2.update');
Route::put('/validasiberkas7permohonan3/{id}', [BantuanteknisController::class, 'valsurat7permohonan3'])->name('valsurat7permohonan3.update');
Route::put('/validasiberkas7permohonan4/{id}', [BantuanteknisController::class, 'valsurat7permohonan4'])->name('valsurat7permohonan4.update');


// SURAT PERMOHONAN 8
Route::put('/validasiberkas8permohonan1/{id}', [BantuanteknisController::class, 'valsurat8permohonan1'])->name('valsurat8permohonan1.update');
Route::put('/validasiberkas8permohonan2/{id}', [BantuanteknisController::class, 'valsurat8permohonan2'])->name('valsurat8permohonan2.update');
Route::put('/validasiberkas8permohonan3/{id}', [BantuanteknisController::class, 'valsurat8permohonan3'])->name('valsurat8permohonan3.update');
Route::put('/validasiberkas8permohonan4/{id}', [BantuanteknisController::class, 'valsurat8permohonan4'])->name('valsurat8permohonan4.update');


Route::get('/bebanteklap/{id}', [BantuanteknisController::class, 'bebanteklap'])->middleware('auth')->name('bebantuanteknislapa.show');

// UPLOAD CEK LAPANGAN KE SURAT KE 3
Route::get('/bebanteklapper3/{id}', [BantuanteknisController::class, 'bebanteklapper3'])->middleware('auth')->name('bebanteklapper3.show');
Route::get('/bebanteklapper3create/{id}', [BantuanteknisController::class, 'bebanteklapper3create'])->middleware('auth')->name('bebanteklapper3create.create');
Route::post('/bebanteklapper3createnew', [BantuanteknisController::class, 'bebanteklapper3createnew'])->middleware('auth')->name('create.bebanteklapper3create');
Route::delete('/bebanteklapper3delete/{id}', [BantuanteknisController::class, 'bebanteklapper3delete'])->middleware('auth')->name('delete.bebanteklapper3delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 4
Route::get('/bebanteklapper4/{id}', [BantuanteknisController::class, 'bebanteklapper4'])->middleware('auth')->name('bebanteklapper4.show');
Route::get('/bebanteklapper4create/{id}', [BantuanteknisController::class, 'bebanteklapper4create'])->middleware('auth')->name('bebanteklapper4create.create');
Route::post('/bebanteklapper4createnew', [BantuanteknisController::class, 'bebanteklapper4createnew'])->middleware('auth')->name('create.bebanteklapper4create');
Route::delete('/bebanteklapper4delete/{id}', [BantuanteknisController::class, 'bebanteklapper4delete'])->middleware('auth')->name('delete.bebanteklapper4delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 5
Route::get('/bebanteklapper5/{id}', [BantuanteknisController::class, 'bebanteklapper5'])->middleware('auth')->name('bebanteklapper5.show');
Route::get('/bebanteklapper5create/{id}', [BantuanteknisController::class, 'bebanteklapper5create'])->middleware('auth')->name('bebanteklapper5create.create');
Route::post('/bebanteklapper5createnew', [BantuanteknisController::class, 'bebanteklapper5createnew'])->middleware('auth')->name('create.bebanteklapper5create');
Route::delete('/bebanteklapper5delete/{id}', [BantuanteknisController::class, 'bebanteklapper5delete'])->middleware('auth')->name('delete.bebanteklapper5delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 6
Route::get('/bebanteklapper6/{id}', [BantuanteknisController::class, 'bebanteklapper6'])->middleware('auth')->name('bebanteklapper6.show');
Route::get('/bebanteklapper6create/{id}', [BantuanteknisController::class, 'bebanteklapper6create'])->middleware('auth')->name('bebanteklapper6create.create');
Route::post('/bebanteklapper6createnew', [BantuanteknisController::class, 'bebanteklapper6createnew'])->middleware('auth')->name('create.bebanteklapper6create');
Route::delete('/bebanteklapper6delete/{id}', [BantuanteknisController::class, 'bebanteklapper6delete'])->middleware('auth')->name('delete.bebanteklapper6delete');

// UPLOAD CEK LAPANGAN KE SURAT KE 7
Route::get('/bebanteklapper7/{id}', [BantuanteknisController::class, 'bebanteklapper7'])->middleware('auth')->name('bebanteklapper7.show');
Route::get('/bebanteklapper7create/{id}', [BantuanteknisController::class, 'bebanteklapper7create'])->middleware('auth')->name('bebanteklapper7create.create');
Route::post('/bebanteklapper7createnew', [BantuanteknisController::class, 'bebanteklapper7createnew'])->middleware('auth')->name('create.bebanteklapper7create');
Route::delete('/bebanteklapper7delete/{id}', [BantuanteknisController::class, 'bebanteklapper7delete'])->middleware('auth')->name('delete.bebanteklapper7delete');
// SIGIT LAPANGAN

// UPLOAD CEK LAPANGAN KE SURAT KE 8
Route::get('/bebanteklapper8/{id}', [BantuanteknisController::class, 'bebanteklapper8'])->middleware('auth')->name('bebanteklapper8.show');
Route::get('/bebanteklapper8create/{id}', [BantuanteknisController::class, 'bebanteklapper8create'])->middleware('auth')->name('bebanteklapper8create.create');
Route::post('/bebanteklapper8createnew', [BantuanteknisController::class, 'bebanteklapper8createnew'])->middleware('auth')->name('create.bebanteklapper8create');
Route::delete('/bebanteklapper8delete/{id}', [BantuanteknisController::class, 'bebanteklapper8delete'])->middleware('auth')->name('delete.bebanteklapper8delete');



// VERIFIKASI DOKUMENTASI CEK LAPANGAN
Route::get('/bebantuanteknislapangan/{id}', [BantuanteknisController::class, 'bebantuanteknisceklapangan'])->middleware('auth')->name('bebantuanteknislapangan.show');
Route::get('/bebantuanteknislapangancreate/{id}', [BantuanteknisController::class, 'bebantuanteknislapangancreate'])->middleware('auth')->name('bebantuanteknislapangancreate.create');
Route::post('/bebantuanteknislapangancreate', [BantuanteknisController::class, 'bebantuanteknislapangancreatenew'])->middleware('auth')->name('create.ceklapanganbantektambah');

Route::delete('/bebantuanteknislapangandelete/{id}', [BantuanteknisController::class, 'bebantuanteknislapangandelete'])->middleware('auth')->name('delete.bebantuanteknislapangandelete');

Route::get('/bebantuanasistensilap/{id}', [BantuanteknisController::class, 'bebantuanasistensilap'])->middleware('auth')->name('bebantuanasistensilap.show');


Route::get('/bebantuanteknislapanganupload/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganuploadnew'])->middleware('auth')->name('bebantuanteknislapangan.uploadberkas');
Route::get('/bebantuanteknislapanganuploads/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganuploadnews'])->middleware('auth')->name('bebantuanteknislapangan.uploadberkasnew');


// UPLOAD SURAT BANTEK 2
Route::get('/bebantekupload2/{id}', [BantuanteknisController::class, 'bebantekupload2berkas'])->middleware('auth')->name('bebantuanteknislapangan.uploadberkasnew2');
Route::post('/bebantekupload2new/{id}', [BantuanteknisController::class, 'bebantekupload2new'])->middleware('auth')->name('upload.bebantekupload2new');

// UPLOAD SURAT BANTEK 3
Route::get('/bebantekupload3/{id}', [BantuanteknisController::class, 'bebantekupload3berkas'])->middleware('auth')->name('bebantek3.uploadberkasnew3');
Route::post('/bebantekupload3new/{id}', [BantuanteknisController::class, 'bebantekupload3new'])->middleware('auth')->name('upload.bebantekupload3new');

// UPLOAD SURAT BANTEK 4
Route::get('/bebantekupload4/{id}', [BantuanteknisController::class, 'bebantekupload4berkas'])->middleware('auth')->name('bebantek4.uploadberkasnew4');
Route::post('/bebantekupload4new/{id}', [BantuanteknisController::class, 'bebantekupload4new'])->middleware('auth')->name('upload.bebantekupload4new');

// UPLOAD SURAT BANTEK 5
Route::get('/bebantekupload5/{id}', [BantuanteknisController::class, 'bebantekupload5berkas'])->middleware('auth')->name('bebantek5.uploadberkasnew5');
Route::post('/bebantekupload5new/{id}', [BantuanteknisController::class, 'bebantekupload5new'])->middleware('auth')->name('upload.bebantekupload5new');

// UPLOAD SURAT BANTEK 6
Route::get('/bebantekupload6/{id}', [BantuanteknisController::class, 'bebantekupload6berkas'])->middleware('auth')->name('bebantek6.uploadberkasnew6');
Route::post('/bebantekupload6new/{id}', [BantuanteknisController::class, 'bebantekupload6new'])->middleware('auth')->name('upload.bebantekupload6new');

// UPLOAD SURAT BANTEK 7
Route::get('/bebantekupload7/{id}', [BantuanteknisController::class, 'bebantekupload7berkas'])->middleware('auth')->name('bebantek7.uploadberkasnew7');
Route::post('/bebantekupload7new/{id}', [BantuanteknisController::class, 'bebantekupload7new'])->middleware('auth')->name('upload.bebantekupload7new');

// UPLOAD SURAT BANTEK 8
Route::get('/bebantekupload8/{id}', [BantuanteknisController::class, 'bebantekupload8berkas'])->middleware('auth')->name('bebantek8.uploadberkasnew8');
Route::post('/bebantekupload7new/{id}', [BantuanteknisController::class, 'bebantekupload7new'])->middleware('auth')->name('upload.bebantekupload7new');


// BANTUAN TEKNIS TERBITKAN SERTIFIKAT
// Route::get('/bebantuanteknissertifikat/{id}', [BantuanteknisController::class, 'bebantuanteknislapangancreate'])->middleware('auth')->name('bebantuanteknissertifikat.upload');
Route::post('/bebantuanteknislapanganuploadnew/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganberkas'])->middleware('auth')->name('upload.bebantuanteknislapanganuploadnew');

// AKUN PEMOHON BANTEK
Route::get('/bebantekpemohondinas', [BantuanteknisController::class, 'bebantekpemohondinas'])->middleware('auth')->name('bebantekpemohondinasindex');
Route::get('/bebantekpemohonasistensi', [BantuanteknisController::class, 'bebantekpemohonasistensi'])->middleware('auth')->name('bebantekpemohonasistensiindex');
// PERBAIKAN DATA BERKAS

Route::get('/bebantekceklapangan/{id}', [BantuanteknisController::class, 'bebantekceklapangandok'])->middleware('auth')->name('bebantekceklapangan.show');

// AKUN DINAS BANTUAN TEKNIS
Route::get('/bebantekakundinas', [BantuanteknisController::class, 'bebantekakundinasistensi'])->middleware('auth')->name('bebantekakundinasindex');
Route::get('/bebantekakunkonsultan', [BantuanteknisController::class, 'bebantekakunkonsultan'])->middleware('auth')->name('bebantekakunkonsultanindex');


// SIGIT DINAS
Route::get('/bebantekdinasasistensi', [BantuanteknisController::class, 'bebantekdinasasistensi'])->middleware('auth')->name('bebantekdinasasistensiindex');
Route::get('/bebantekakundinasberkas', [BantuanteknisController::class, 'bebantekakundinasberkas'])->middleware('auth')->name('bebantekakundinasberkasindex');
Route::get('/bebantekdinaspenyusutan', [BantuanteknisController::class, 'bebantekdinaspenyusutan'])->middleware('auth')->name('bebantekdinaspenyusutanindex');
Route::get('/bebantekdinaskerusakan', [BantuanteknisController::class, 'bebantekdinaskerusakan'])->middleware('auth')->name('bebantekdinaskerusakanindex');
Route::get('/bebantekdinaspemeliharaan', [BantuanteknisController::class, 'bebantekdinaspemeliharaan'])->middleware('auth')->name('bebantekdinaspemeliharaanindex');
Route::get('/bebantekdinasperhibgn', [BantuanteknisController::class, 'bebantekdinasperhibgn'])->middleware('auth')->name('bebantekdinasperhibgnindex');
Route::get('/bebantekdinasserahterima', [BantuanteknisController::class, 'bebantekdinasserahterima'])->middleware('auth')->name('bebantekdinasserahterimaindex');
Route::get('/bebantekdinaspersonil', [BantuanteknisController::class, 'bebantekdinaspersonil'])->middleware('auth')->name('bebantekdinaspersonilindex');

Route::get('/datapermohonandinas', [AdminDashboardController::class, 'dashboarddinas']);
Route::get('/beakunkonsultanasistensi', [BantuanteknisController::class, 'bebantekkonsultandataakun'])->middleware('auth')->name('bebantekkonsultanindex');

// AKUN JASA KONSULTAN ASISTENSI

Route::get('/bebantekdaftarkonsultan', [BantuanteknisController::class, 'bebantekdaftarkonsultan'])->middleware('auth')->name('bebantekdaftarkonsultanindex');
Route::get('/bebantekdaftarkonsultapilih/{id}', [BantuanteknisController::class, 'bebantekdaftarkonsultapilih'])->middleware('auth')->name('bebantekdaftarkonsultapilih.show');

Route::post('/bebantekdaftarkonsultapilihnew/{id}', [BantuanteknisController::class, 'bebantekdaftarkonsultapilihnew'])->middleware('auth')->name('update.bebantekdaftarkonsultapilihnew');
Route::get('/bebantekdaftarkonsultanproses', [BantuanteknisController::class, 'bebantekdaftarkonsultanproses'])->middleware('auth')->name('bebantekdaftarkonsultanproses');

Route::get('/bebantekdaftarkonsultanproses', [BantuanteknisController::class, 'bebantekdaftarkonsultanproses'])->middleware('auth')->name('bebantekdaftarceklapangan');

Route::get('/bebantekkonsultan', [BantuanteknisController::class, 'bebantekkonsultandata'])->middleware('auth')->name('bebantekkonsultanindex');
Route::get('/bebantekkonsultannew', [BantuanteknisController::class, 'bebantekkonsultannew'])->middleware('auth')->name('bebantekkonsultannew.create');
Route::post('/bebantekkonsultannewjasa', [BantuanteknisController::class, 'bebantekkonsultannewjasa'])->middleware('auth')->name('create.bebantekkonsultannewjasa');

// ini bro

Route::get('/bebanteklapcekdokcreate/{id}', [BantuanteknisController::class, 'bebanteklapcekdokcreate'])->middleware('auth')->name('bebanteklapcekdokcreate.create');
Route::post('/bebanteklapcekdokcreatenew', [BantuanteknisController::class, 'bebanteklapcekdokcreatenew'])->middleware('auth')->name('create.bebanteklapcekdokcreate');
Route::delete('/bebanteklapcekdokcredelete/{id}', [BantuanteknisController::class, 'bebanteklapcekdokcredelete'])->middleware('auth')->name('delete.bebanteklapcekdokcredelete');


// MENU 06 KRK BACKEND

// saat ini
// Route::get('/portalberita', function ()
//     // return view('welcome');
//     return view('portalberita', [
    //         'title' => 'Portal Berita',
    //     ]);
    // });


Route::get('/404', function () {
    // return view('welcome');
    return view('404', [
        'title' => 'Under Constructions',
    ]);
});

Route::get('/bahan2', function () {
    // return view('welcome');
    return view('frontend.00_full.bahan2');
});


// -------------------------------------------------------------------------------------------------------------------------------------------
// MENU FRONTEND WEB ---------------------------------
// -------------------------------------------------------------------------------------------------------------------------------------------

// 04. MENU BANTUAN TEKNIS

Route::get('/febantuanteknis', [BantuanteknisController::class, 'index'])->middleware('auth');
Route::post('/febantuanteknis/create', [BantuanteknisController::class, 'febantuantekniscreatepermohonan'])->name('permohonan.bantekcreate');

Route::get('/infobantek', [BantuanteknisController::class, 'infobantek']);
Route::get('/infobanteklampiran', [BantuanteknisController::class, 'infobanteklampiran']);
Route::get('/infobantekpetunjuk', [BantuanteknisController::class, 'infobantekpetunjuk']);
Route::get('/infobantekasistensi', [BantuanteknisController::class, 'infobantekasistensi']);
Route::get('/infobantekpeneliti', [BantuanteknisController::class, 'infobantekpeneliti']);
Route::get('/infobantekperhitungan', [BantuanteknisController::class, 'infobantekperhitungan']);
Route::get('/infobantekpemeliharaan', [BantuanteknisController::class, 'infobantekpemeliharaan']);
Route::get('/infobantekpendampingan', [BantuanteknisController::class, 'infobantekpendampingan']);
Route::get('/infobantektimteknis', [BantuanteknisController::class, 'infobantektimteknis']);

// DATABASE ABG BLORA ---------------------------------------------
Route::get('/datagsbblora', [DatabaseAbgController::class, 'datagsbblora'])->middleware('auth')->name('datagsbbloraindex');
Route::delete('/bedatagsbbloradelete/{id}', [DatabaseAbgController::class, 'bedatagsbbloradelete'])->middleware('auth')->name('delete.bedatagsbbloradelete');

Route::get('/datagsbbloraupdate/{id}', [DatabaseAbgController::class, 'datagsbbloraupdate'])->middleware('auth')->name('datagsbbloraupdate.perbaikan');
Route::post('/datagsbbloraupdatenew/{id}', [DatabaseAbgController::class, 'datagsbbloraupdatenew'])->middleware('auth')->name('datagsbbloraupdatenew.update');

// DATA KECAMATAN DAN DESA
Route::get('/datakecblora', [DatabaseAbgController::class, 'datakecblora'])->middleware('auth')->name('datakecbloraindex');
Route::delete('/datakecbloradelete/{id}', [DatabaseAbgController::class, 'datakecbloradelete'])->middleware('auth')->name('delete.datakecbloradelete');

// Route::get('/datagsbbloraupdate/{id}', [DatabaseAbgController::class, 'datagsbbloraupdate'])->middleware('auth')->name('datagsbbloraupdate.perbaikan');
// Route::post('/datagsbbloraupdatenew/{id}', [DatabaseAbgController::class, 'datagsbbloraupdatenew'])->middleware('auth')->name('datagsbbloraupdatenew.update');

// MENU 07 PENILIK BANGUNAN
Route::get('/datanewpenilik', [PenilikbangunanController::class, 'datanewpenilik'])->middleware('auth')->name('datanewpenilik.create');
Route::post('/datanewpeniliknew', [PenilikbangunanController::class, 'datanewpeniliknew'])->middleware('auth')->name('datanewpeniliknew.create');

Route::get('/dataallpenilikbg', [PenilikbangunanController::class, 'dataallpenilikbg'])->name('dataallpenilikbg.index');

Route::get('/bedatadasarpenilik/{id}', [PenilikbangunanController::class, 'bedatadasarpenilik'])->middleware('auth')->name('bedatadasarpenilik.show');
// Route::get('/bedatadasarpenilikberkas/{id}', [PenilikbangunanController::class, 'bedatadasarpenilikberkas'])->middleware('auth')->name('bedatadasarpenilikberkas.show');

Route::get('/bedatapeniliksurvey/{id}', [PenilikbangunanController::class, 'bedatapeniliksurvey'])->middleware('auth')->name('bedatapeniliksurvey.show');

// MENU 10 BACKEND DANA BANTUAN HIBAH

Route::get('/datanewhibah', [BantuanhibahbgController::class, 'hibahdokcreate'])->middleware('auth')->name('hibahdok.create');
Route::post('/datanewhibahnew', [BantuanhibahbgController::class, 'datanewhibahnew'])->middleware('auth')->name('dokhibahnew.create');
Route::get('/dataallhibahbangunan', [BantuanhibahbgController::class, 'dataallhibahbangunan'])->name('dataallhibahbangunan.index');
Route::get('/banhibahpermohonan/{id}', [BantuanhibahbgController::class, 'banhibahpermohonan'])->middleware('auth')->name('banhibahpermohonan.show');

Route::put('/valhibahbantuan1/{id}', [BantuanhibahbgController::class, 'valhibahbantuan1'])->name('valhibahbantuan1.update');
Route::get('/dokhibahbantuanberkas/{id}', [BantuanhibahbgController::class, 'dokhibahbantuanberkas'])->middleware('auth')->name('dokhibahbantuanberkas.show');

Route::get('/dokberkashibah/{id}', [BantuanhibahbgController::class, 'dokberkashibah'])->middleware('auth')->name('dokberkashibah.create');
Route::post('/dokberkashibahcreatenew', [BantuanhibahbgController::class, 'dokberkashibahcreatenew'])->middleware('auth')->name('create.dokberkashibahcreatenew');

Route::delete('/dokberkashibahcreatedelete/{id}', [BantuanhibahbgController::class, 'dokberkashibahcreatedelete'])->middleware('auth')->name('delete.dokberkashibahcreatedelete');

Route::get('/doklapbanhibah/{id}', [BantuanhibahbgController::class, 'doklapbanhibah'])->middleware('auth')->name('doklapbanhibah.show');

Route::get('/doklapbanhibahcreate/{id}', [BantuanhibahbgController::class, 'doklapbanhibahcreate'])->middleware('auth')->name('doklapbanhibahcreate.create');
Route::post('/doklapbanhibahcreatenew', [BantuanhibahbgController::class, 'doklapbanhibahcreatenew'])->middleware('auth')->name('create.doklapbanhibahcreatenew');

Route::delete('/doklapbanhibahcreatenewdelete/{id}', [BantuanhibahbgController::class, 'doklapbanhibahcreatenewdelete'])->middleware('auth')->name('delete.doklapbanhibahcreatenewdelete');
Route::put('/valberkashibah2/{id}', [BantuanhibahbgController::class, 'valberkashibah2'])->name('valberkashibah2.update');

Route::get('/dokuploadskhibah/{id}', [BantuanhibahbgController::class, 'dokuploadskhibah'])->middleware('auth')->name('dokuploadskhibah.show');

Route::get('/dokuploadhibahskcreate/{id}', [BantuanhibahbgController::class, 'dokuploadhibahskcreate'])->middleware('auth')->name('dokuploadhibahskcreate.create');
Route::post('/dokuploadhibahskcreatenew', [BantuanhibahbgController::class, 'dokuploadhibahskcreatenew'])->middleware('auth')->name('create.dokuploadhibahskcreatenew');

Route::delete('/dokuploadhibahskcrdelete/{id}', [BantuanhibahbgController::class, 'dokuploadhibahskcrdelete'])->middleware('auth')->name('delete.dokuploadhibahskcrdelete');

Route::put('/valberkashibah3/{id}', [BantuanhibahbgController::class, 'valberkashibah3'])->name('valberkashibah3.update');
Route::put('/valberkashibah4/{id}', [BantuanhibahbgController::class, 'valberkashibah4'])->name('valberkashibah4.update');
// saat ini
Route::get('/bestatistikhibah', [BantuanhibahbgController::class, 'bestatistikhibah']);

Route::delete('/dokbebanhibahdelete/{id}', [BantuanhibahbgController::class, 'dokbebanhibahdelete'])->middleware('auth')->name('delete.dokbebanhibahdelete');

// Route::get('/bekrkusahaperbaikan/{id}', [KrkController::class, 'bekrkusahaperbaikan'])->middleware('auth')->name('bekrkusahaperbaikan.perbaikan');

// ================================================================================================================================================
// ================================================================================================================================================
// ================================================================================================================================================

// Route::get('/dashboard', [AdminDashboardController::class, 'index'])->middleware('auth');
Route::get('/dashboard', [AdminDashboardController::class, 'index']);

// ------------------- BACKEND QA PERTANYAAN ---------------------------

// KATEGORI ADMIN
Route::get('/qapertanyaan', [AdministratorController::class, 'qapertanyaan'])->middleware('auth');
Route::get('/qapertanyaancreate', [AdministratorController::class, 'createqapertanyaan'])->middleware('auth');
Route::post('/qapertanyaanstore', [AdministratorController::class, 'createstoreqapertanyaan'])->name('create.qapertanyaan');
Route::post('/qapertanyaan/{id}', [AdministratorController::class, 'deleteqapertanyaan'])
->middleware('auth')
->name('delete.qapertanyaan');

// ------------------- BACKEND BAGIAN HIMBAUAN DINAS ---------------------------

// KATEGORI HIMBAUAN DINAS
Route::get('/himbauandinas', [AdministratorController::class, 'himbauandinas'])->middleware('auth');
Route::get('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'himbauandinasshowbyname'])->middleware('auth');
Route::get('/himbauandinas/update/{nama_lengkap}', [AdministratorController::class, 'updatehimbauandinas'])->middleware('auth')->name('updateshow.himbauandinas');
Route::post('/himbauandinas/{nama_lengkap}', [AdministratorController::class, 'createupdatehimbauandinas'])->middleware('auth')->name('update.himbauandinas');

// Route::get('/$login', function () {
//     // return view('welcome');
//     return view('login.index',
//         'title' => 'Halaman Login'
//     ]);
// });

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/daftar', [LoginController::class, 'showRegisterForm']);
Route::post('/daftar', [LoginController::class, 'register']);

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

require __DIR__.'/auth.php';
