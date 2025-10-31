<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
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

Route::get('/', [DashboardController::class, 'index']);
Route::get('/masuk', [LoginController::class, 'index']);
Route::get('/daftar', [LoginController::class, 'showRegisterForm']);

Route::post('/register', [LoginController::class, 'register'])->name('register.store');

// Route::get('/web', [DashboardController::class, 'web']);

// MENU 02 PERMOHONAN KRK USAHA
// Route::get('/permohonankrkusaha', [KrkController::class, 'permohonankrkusaha'])->name('permohonan.krkusaha');
// Route::post('/permohonankrkusaha/create', [KrkController::class, 'permohonankrkusahacreate'])->name('permohonan.krkusahacreate');
// Route::post('/berkasusaha/{id}/validate', [KrkController::class, 'validateBerkasusaha'])->name('berkasusaha.validate');
// Route::get('/permohonanpengesahanusaha/{id}', [KrkController::class, 'permohonanpengesahanusaha'])->name('permohonan.pengesahanusaha');
// Route::post('/permohonanpengesahanusahacreate/{id}', [KrkController::class, 'permohonanpengesahanusahacreate'])->name('permohonan.pengesahanusahacreate');
// Route::get('/permohonanpengesahanusahaber/{id}', [KrkController::class, 'permohonanpengesahanusahaber'])->name('permohonan.permohonanpengesahanusahaber');
// Route::delete('/krkusahasuratdelete/{id}', [KrkController::class, 'destroykrkusahasurat'])->name('krkusahasurat.destroy');

// // DAFTAR SURAT PERMOHONAN BERKAS 1
// Route::get('/bebantuanteknisassistensi', [BantuanteknisController::class, 'bebantuanteknisassistensi'])->middleware('auth')->name('bebantuanteknisassistensiindex');
// Route::get('/beasistensishow/{id}', [BantuanteknisController::class, 'beasistensishow'])->middleware('auth')->name('beasistensishowberkas1.show');
// Route::put('/validasidokumenbantek/{id}', [BantuanteknisController::class, 'validasidokumenberkasbantek'])->middleware('auth')->name('validasidokumenbantek');
// Route::get('/bebantekpemohondinasperbaikan/{id}', [BantuanteknisController::class, 'bebantekpemohondinasperbaikan'])->middleware('auth')->name('bebantekpemohondinasperbaikan.perbaikan');
// Route::post('/bebantekpemohondinasperbaikans/{id}', [BantuanteknisController::class, 'bebantuanteknislapanganberkasbaru'])->middleware('auth')->name('bebantekpemohondinasperbaikan.uploads');



require __DIR__.'/auth.php';
