<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DepartemenController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\TestimoniController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;

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


Route::get('/', [BarangController::class, 'barangFront'])->name('home');

Route::get('/staff', function () {
    return view('staff');
})->name('staff');

Route::get('/team', [StaffController::class, 'team'])->name('team');

Route::get('/testimonial', [TestimoniController::class, 'admin'])->name('testimonial.index');


Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('iniLogin');

Route::get('/dashboard', [BarangController::class, 'barang'])->name('dashboard')->middleware('iniLogin');

Route::resource('supplier', SupplierController::class)->parameters(['barang' => 'kode_barang']);
Route::resource('role', RoleController::class)->middleware('iniLogin');
Route::resource('ibarang', IbarangController::class)->middleware('iniLogin');
Route::resource('staff', StaffController::class)->parameters([
    'staff' => 'nip'
])->middleware('iniLogin');

Route::resource('barang', BarangController::class);

Route::get('barang/{id}/edit', [BarangController::class, 'edit'])->name('barang.edit');
Route::get('barang/{id}/tambah', [BarangController::class, 'tambah'])->name('barang.tambah');
Route::post('barang/{id}/updateTambah', [BarangController::class, 'updateTambah'])->name('barang.updateTambah');

Route::get('barang/{id}/kurang', [BarangController::class, 'kurang'])->name('barang.kurang');
Route::post('barang/{id}/updateKurang', [BarangController::class, 'updateKurang'])->name('barang.updateKurang');

// Route::get('/', [LoginController::class, 'index'])->name('sesi.login')->middleware('iniTamu');
Route::get('sesi/login', [LoginController::class, 'index'])->name('sesi.login')->middleware('iniTamu');
Route::post('/sesi/login', [LoginController::class, 'login'])->name('sesi.login')->middleware('iniTamu');

Route::get('sesi/register', [RegisterController::class, 'index'])->name('sesi.register')->middleware('iniTamu');
Route::post('/sesi/register', [RegisterController::class, 'store'])->name('sesi.register')->middleware('iniTamu');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::post('/kirim-testimoni', [TestimoniController::class, 'store'])->name('testimoni.store');

Route::post('/barang/updateTambahAjax/{id}', [BarangController::class, 'updateTambahAjax'])->name('barang.updateTambahAjax');
Route::post('/barang/updateKurang/{id}', [BarangController::class, 'updateKurang'])->name('barang.updateKurang');




