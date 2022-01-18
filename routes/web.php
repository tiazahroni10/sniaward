<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\EvaluatorController;
use App\Http\Controllers\PertanyaanController;
use App\Http\Controllers\PesertaController;
use App\Http\Controllers\ProfilController;
use App\Models\Berita;
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

Route::get('/', function () {
    return view('home');
});
Route::get('/welcome', function () {
    return view('welcome');
});


Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'login']);
Route::post('/logout', [LoginController::class,'logout']);
Route::get('/register', [RegisterController::class,'index'])->middleware('guest');
Route::post('/register', [RegisterController::class,'simpanData']);
Route::get('/dashboard',[DashboardController::class, 'index'])->middleware('auth');
Route::get('/pertanyaan',[PertanyaanController::class,'index']);
Route::post('/pertanyaan',[PertanyaanController::class,'pertanyaan']);
Route::get('/profil',[ProfilController::class,'index'])->middleware('auth');
Route::get('/admin/peserta',[PesertaController::class,'index'])->middleware('auth');
Route::get('/admin/evaluator',[EvaluatorController::class,'index'])->middleware('auth');
Route::get('/admin/berita',[BeritaController::class,'index'])->middleware('auth');




