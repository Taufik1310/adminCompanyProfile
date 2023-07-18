<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApresiasiController;
use App\Http\Controllers\BudayaController;
use App\Http\Controllers\JabatanController;
use App\Http\Controllers\DireksiController;
use App\Http\Controllers\KomisarisController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndustriController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\KlienController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlatformController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\PosisiController;
use App\Http\Controllers\PrinsipController;
use App\Http\Controllers\TeknologiController;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function() {
    $namaPerusahaan = DB::table('tb_profil_perusahaan')->select('nama_perusahaan')->first();
    return view('index', compact('namaPerusahaan'));
});

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/login', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::delete('/login', [LoginController::class, 'logout']);

Route::get('portofolio/print', [PortofolioController::class, 'print']);
Route::resource('portofolio', PortofolioController::class);

Route::get('komisaris/print', [KomisarisController::class, 'print']);
Route::resource('komisaris', KomisarisController::class);

Route::get('direksi/print', [DireksiController::class, 'print']);
Route::resource('direksi', DireksiController::class);

Route::get('karyawan/print', [KaryawanController::class, 'print']);
Route::resource('karyawan', KaryawanController::class);

Route::resource('jabatan', JabatanController::class);

Route::resource('departemen', DepartemenController::class);

Route::resource('posisi', PosisiController::class);

Route::get('teknologi/print', [TeknologiController::class, 'print']);
Route::resource('teknologi', TeknologiController::class);

Route::get('platform/print', [PlatformController::class, 'print']);
Route::resource('platform', PlatformController::class);

Route::get('klien/print', [KlienController::class, 'print']);
Route::resource('klien', KlienController::class);

Route::get('industri/print', [IndustriController::class, 'print']);
Route::resource('industri', IndustriController::class);

Route::get('layanan/print', [LayananController::class, 'print']);
Route::resource('layanan', LayananController::class);

Route::get('apresiasi/print', [ApresiasiController::class, 'print']);
Route::resource('apresiasi', ApresiasiController::class);

Route::get('budaya/print', [BudayaController::class, 'print']);
Route::resource('budaya', BudayaController::class);

Route::get('prinsip/print', [PrinsipController::class, 'print']);
Route::resource('prinsip', PrinsipController::class);

Route::get('fasilitas/print', [FasilitasController::class, 'print']);
Route::resource('fasilitas', FasilitasController::class);
