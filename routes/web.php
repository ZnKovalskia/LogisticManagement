<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DepartemenController;

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

Route::get('/tables', function () {
    return view('tables');
})->name('tables');

Route::get('/profile', function () {
    return view('profile'); // Ganti dengan halaman profilmu
})->name('profile');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard')->middleware('iniLogin');

Route::resource('departemen', DepartemenController::class)->middleware('iniLogin');

Route::get('/', [LoginController::class, 'index'])->name('sesi.login')->middleware('iniTamu');
Route::get('sesi/login', [LoginController::class, 'index'])->name('sesi.login')->middleware('iniTamu');
Route::post('/sesi/login', [LoginController::class, 'login'])->name('sesi.login')->middleware('iniTamu');

Route::get('sesi/register', [RegisterController::class, 'index'])->name('sesi.register')->middleware('iniTamu');
Route::post('/sesi/register', [RegisterController::class, 'store'])->name('sesi.register')->middleware('iniTamu');

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
