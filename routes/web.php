<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\BerkasLampiranPesertaController;
use App\Http\Controllers\CapacityBuildingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SekretariatController;
use App\Http\Controllers\MasterPertanyaanController;
use App\Http\Controllers\MasterDokumenController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\GantiPasswordController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\UnggahLampiranController;
use Illuminate\Support\Facades\Route;

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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [FrontPageController::class,'showFrontpage'])->middleware('guest')->name('showFrontpage');
Route::resource('/frontpage', FrontpageController::class)->middleware('auth');
Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'simpanData']);
Route::get('/pertanyaan',[PertanyaanController::class,'index'])->name('pertanyaan');
Route::post('/pertanyaan',[PertanyaanController::class,'pertanyaan'])->name('showPertanyaan');

Route::get('/berita/{slug}',[BeritaController::class,'detailBerita'])->middleware('guest')->name('detailBerita');

// Route::get('/semuaacara', function () {
//     return view('semuaacara');
// });
Route::get('/semuaacara',[FrontpageController::class,'semuaAcara'])->middleware('guest');
Route::get('/detailacara', function () {
    return view('detailacara');
});
Route::get('/kumpulanberita',[BeritaController::class,'kumpulanBerita'])->name('kumpulanBerita')->middleware('guest');



Route::get('/gantipassword',[GantiPasswordController::class,'index'])->name('gantiPassword')->middleware('auth');
Route::post('/simpanpasswordbaru/{id}',[GantiPasswordController::class,'simpanPasswordBaru'])->name('simpanPasswordBaru')->middleware('auth');

Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('is_verified')->name('dashboard');

//bagian peserta
Route::middleware(['is_verified','peserta'])->group(function(){
    Route::resource('/peserta/profilpeserta', PesertaController::class,)->except(['create','show','store','destroy']);
    Route::resource('/peserta/kontak', KontakController::class);
    Route::resource('/peserta/lampiran', UnggahLampiranController::class)->except(['show','edit','update','destroy']);
    Route::get('/peserta/persyaratan',[PersyaratanController::class,'persyaratanSniAward'])->name('persyaratanSniAward');
});


// bagian admin
// Route::get('/admin/peserta',[PesertaController::class,'index'])->middleware('admin');e
Route::middleware(['is_verified','admin'])->group(function () {
    Route::get('/admin/evaluator/data',[EvaluatorController::class,'dataTables'])->name('dataevaluator');
    Route::get('/admin/peserta/data',[PesertaController::class,'dataTables'])->name('datapeserta');
    Route::get('/admin/berita/data',[BeritaController::class,'dataTables'])->name('databerita');

    Route::get('/admin/peserta',[PesertaController::class,'showDataPeserta'])->name('showDataPeserta');

    Route::get('/admin/evaluator/create',[EvaluatorController::class,'createEvaluator'])->name('createEvaluator');
    Route::post('/admin/evaluator/store',[EvaluatorController::class,'storeEvaluator'])->name('storeEvaluator');
    Route::get('/admin/evaluator/',[EvaluatorController::class,'showDataEvaluator'])->name('showDataEvaluator');
    Route::get('/admin/evaluator/detailevaluator/{user_id}',[EvaluatorController::class,'detailEvaluator'])->name('detailEvaluator');
    Route::post('/admin/evaluator/verifikasiEvaluator/{user_id}',[EvaluatorController::class,'verifikasiEvaluator'])->name('verifikasiEvaluator');

    Route::get('/admin/profil',[SekretariatController::class,'profil'])->name('adminProfil');
    Route::resource('/admin/masterpertanyaan', MasterPertanyaanController::class)->except(['show']);
    Route::resource('/admin/masterdokumen', MasterDokumenController::class)->except(['show']);
    Route::resource('/admin/capacitybuilding', CapacityBuildingController::class)->except(['show']);
    Route::resource('/admin/persyaratan', PersyaratanController::class)->except(['show']);
    Route::resource('/admin/dokumentasi', DokumentasiController::class)->except(['show']);
    Route::resource('/admin/berita', BeritaController::class)->except(['show']);
    Route::resource('/admin/faq', FaqController::class)->except(['show']);
});







// bagian evaluator
Route::middleware(['is_verified','evaluator'])->group(function () {
    Route::resource('/evaluator/profilevaluator', EvaluatorController::class)->except(['create','show','destroy', 'store']);
    Route::get('/evaluator/download',[CapacityBuildingController::class,'showCapacityBuildingDownload'])->name('showCapacityBuildingDownload');
    Route::resource('/evaluator/pekerjaan', PekerjaanController::class);
    Route::resource('/evaluator/sertifikat', SertifikatController::class);
    Route::resource('/evaluator/pendidikan', PendidikanController::class);
    Route::get('/evaluator/berkas',[BerkasLampiranPesertaController::class,'index'])->name('berkasDokumen');
});






