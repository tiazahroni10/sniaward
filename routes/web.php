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
use App\Http\Controllers\PersyaratanController;
use App\Http\Controllers\SertifikatController;
use App\Models\DokumenBerita;
use App\Models\Evaluator;
use App\Models\Faq;
use App\Models\Kontak;
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
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/pertanyaan',[PertanyaanController::class,'index']);
Route::post('/pertanyaan',[PertanyaanController::class,'pertanyaan']);


//peserta
Route::get('/peserta',[PesertaController::class,'profil'])->middleware('auth')->name('peserta.profil');

Route::resource('/peserta/profil', PesertaController::class)->middleware('auth');
Route::resource('/peserta/kontak', KontakController::class)->middleware('auth');

// bagian admin
Route::get('/admin/peserta',[PesertaController::class,'index'])->middleware('auth');
Route::get('/admin/evaluator',[EvaluatorController::class,'index'])->middleware('auth');
Route::get('/admin/evaluator/data',[EvaluatorController::class,'dataTables'])->name('dataevaluator')->middleware('auth');


Route::get('/admin/tambahevaluator',[EvaluatorController::class,'tambahEvaluator'])->middleware('auth');
Route::get('/admin/profil',[SekretariatController::class,'profil'])->middleware('auth');
Route::resource('/admin/masterpertanyaan', MasterPertanyaanController::class)->middleware('auth');
Route::resource('/admin/masterdokumen', MasterDokumenController::class)->middleware('auth');
Route::resource('/admin/evaluator', EvaluatorController::class)->middleware('auth');
Route::resource('/admin/capacitybuilding', CapacityBuildingController::class)->middleware('auth');
Route::resource('/admin/persyaratan', PersyaratanController::class)->middleware('auth');
Route::resource('/admin/dokumentasi', DokumentasiController::class)->middleware('auth');
Route::resource('/admin/berita', BeritaController::class)->middleware('auth');
Route::resource('/admin/faq', FaqController::class)->middleware('auth');






// bagian evaluator
Route::get('/evaluator/download',[DownloadController::class,'index'])->middleware('auth');
Route::get('/evaluator/profil',[EvaluatorController::class,'profil'])->middleware('auth')->name('evaluator.profil');
Route::resource('/evaluator/pekerjaan', PekerjaanController::class)->middleware('auth');
Route::resource('/evaluator/sertifikat', SertifikatController::class)->middleware('auth');
Route::resource('/evaluator/pendidikan', SertifikatController::class)->middleware('auth');
// Route::get('/evaluator/editprofil',[EvaluatorController::class,'editProfil'])->middleware('auth');
// Route::get('/evaluator/tambahpendidikan',[EvaluatorController::class,'tambahPendidikan'])->middleware('auth');
// Route::get('/evaluator/tambahpekerjaan',[EvaluatorController::class,'tambahPekerjaan'])->middleware('auth');
// Route::get('/evaluator/tambahsertifikat',[EvaluatorController::class,'tambahSertifikat'])->middleware('auth');




