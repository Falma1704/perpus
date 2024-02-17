
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\KategoriBukuController;
use App\Http\Controllers\KategoriBukuRelasiController;
use App\Http\Controllers\KoleksiPribadiController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\UlasanBukuController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\EditController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('layout.main');
});

Route::get('Login', [LoginController::class, 'index']);
Route::post('Login-proses', [LoginController::class, 'login_proses']);

Route::get('/buku', [BukuController::class, 'index'])->name('buku.index');
Route::get('/buku/create', [BukuController::class, 'create'])->name('buku.create');
Route::post('/buku', [BukuController::class, 'store'])->name('buku.store');
Route::get('/buku/{id}', [BukuController::class, 'show'])->name('buku.show');
Route::get('/buku/{id}/edit', [BukuController::class, 'edit'])->name('buku.edit');
Route::put('/buku/{id}', [BukuController::class, 'update'])->name('buku.update');
Route::delete('/buku/{id}', [BukuController::class, 'destroy'])->name('buku.destroy');


Route::get('/ulasanbuku', [UlasanBukuController::class, 'index']);

route::get('/peminjaman', [PeminjamanController::class, 'index']);

route::get('/kategoribuku', [KoleksiPribadiController::class, 'index']);

route::get('/kategoribuku_relasi', [KategoriBukuController::class, 'index']);

route::get('/koleksipribadi', [KategoriBukuRelasiController::class, 'index']);
