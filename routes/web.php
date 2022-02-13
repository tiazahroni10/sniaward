<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\CapacityBuildingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DokumenCapacityBuildingController;
use App\Http\Controllers\DokumenPersyaratanController;
use App\Http\Controllers\DownloadController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\SekretariatController;
use App\Http\Controllers\MasterPertanyaanController;
use App\Http\Controllers\MasterDokumenController;
use App\Http\Controllers\DokumentasiController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\FrontpageController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PendidikanController;
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\SertifikatController;
use App\Http\Controllers\UnggahLampiranController;
use App\Models\Berita;
use App\Models\DokumenBerita;
use App\Models\DokumenPeserta;
use App\Models\Evaluator;
use App\Models\Faq;
use App\Models\Kontak;
use Illuminate\Support\Facades\DB;
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
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('/pertanyaan',[PertanyaanController::class,'index'])->name('pertanyaan');
Route::post('/pertanyaan',[PertanyaanController::class,'pertanyaan'])->name('showPertanyaan');

Route::get('/{slug}',[BeritaController::class,'detailBerita'])->middleware('guest')->name('detailBerita');

Route::get('/kumpulanberita', function () {
    return view('kumpulanberita');
});

//peserta
Route::get('/peserta/profil',[PesertaController::class,'profil'])->middleware('auth')->name('profilpeserta');
Route::resource('/peserta/profilpeserta', PesertaController::class,)->middleware('auth')->except(['create','show','store','destroy']);
Route::resource('/peserta/kontak', KontakController::class)->middleware('auth');
Route::resource('/peserta/lampiran', UnggahLampiranController::class)->middleware('auth');

// bagian admin
Route::get('/admin/peserta',[PesertaController::class,'index'])->middleware('auth');
Route::get('/admin/evaluator/data',[EvaluatorController::class,'dataTables'])->name('dataevaluator')->middleware('auth');
Route::get('/admin/peserta/data',[PesertaController::class,'dataTables'])->name('datapeserta')->middleware('auth');
Route::get('/admin/berita/data',[BeritaController::class,'dataTables'])->name('databerita')->middleware('auth');

Route::get('/admin/peserta',[PesertaController::class,'showDataPeserta'])->name('showDataPeserta')->middleware('auth');

Route::get('/admin/evaluator/create',[EvaluatorController::class,'createEvaluator'])->name('createEvaluator')->middleware('auth');
Route::post('/admin/evaluator/store',[EvaluatorController::class,'storeEvaluator'])->name('storeEvaluator')->middleware('auth');
Route::get('/admin/evaluator/',[EvaluatorController::class,'showDataEvaluator'])->name('showDataEvaluator')->middleware('auth');

Route::get('/admin/profil',[SekretariatController::class,'profil'])->middleware('auth')->name('adminProfil');
Route::resource('/admin/masterpertanyaan', MasterPertanyaanController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/masterdokumen', MasterDokumenController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/capacitybuilding', CapacityBuildingController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/persyaratan', PersyaratanController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/dokumentasi', DokumentasiController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/berita', BeritaController::class)->middleware('auth')->except(['show']);
Route::resource('/admin/faq', FaqController::class)->middleware('auth')->except(['show']);






// bagian evaluator
Route::resource('/evaluator/profilevaluator', EvaluatorController::class)->middleware('auth')->except(['create','show','destroy', 'store']);
Route::get('/evaluator/download',[CapacityBuildingController::class,'showCapacityBuildingDownload'])->middleware('auth')->name('showCapacityBuildingDownload');
Route::resource('/evaluator/pekerjaan', PekerjaanController::class)->middleware('auth');
Route::resource('/evaluator/sertifikat', SertifikatController::class)->middleware('auth');
Route::resource('/evaluator/pendidikan', PendidikanController::class)->middleware('auth');




