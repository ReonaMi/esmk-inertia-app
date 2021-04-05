<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Home\HomeController as Home;
use App\Http\Controllers\Auth\AuthPengelolaController as AuthPengelola;
use App\Http\Controllers\Auth\AuthSiswaController as AuthSiswa;
use App\Http\Controllers\Superadmin\SuperadminController as Superadmin;
use App\Http\Controllers\Kesiswaan\KesiswaanController as Kesiswaan;
use App\Http\Controllers\Toolman\ToolmanController as Toolman;
use App\Http\Controllers\Siswa\SiswaController as Siswa;

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

Route::middleware('guest')->group(function () {
    // routing home
    Route::get('/', [Home::class, 'index'])->name('get.home');
    // routing login pengelola
    Route::get('/login-pengelola', [AuthPengelola::class, 'login'])->name('get.loginPengelola');
    Route::post('/login-pengelola', [AuthPengelola::class, 'login'])->name('post.loginPengelola');
    // routing login siswa
    Route::get('/login-siswa', [AuthSiswa::class, 'login'])->name('get.loginSiswa');
    Route::post('/login-siswa', [AuthSiswa::class, 'login'])->name('post.loginSiswa');
});

Route::middleware('auth:pengelola', 'role:superadmin')->group(function () {
    Route::get('/dashboard/superadmin', [Superadmin::class, 'index'])->name('get.indexSuperadmin');
    Route::get('/dashboard/superadmin/logout', [AuthPengelola::class, 'logout'])->name('get.logoutSuperadmin');
});

Route::middleware('auth:pengelola', 'role:kesiswaan')->group(function () {
    Route::get('/dashboard/kesiswaan', [Kesiswaan::class, 'index'])->name('get.indexKesiswaan');
    Route::get('/dashboard/kesiswaan/logout', [AuthPengelola::class, 'logout'])->name('get.logoutKesiswaan');
});

Route::middleware('auth:pengelola', 'role:toolman')->group(function () {
    Route::get('/dashboard/toolman', [Toolman::class, 'index'])->name('get.indexToolman');
    Route::get('/dashboard/toolman/logout', [AuthPengelola::class, 'logout'])->name('get.logoutToolman');
});

Route::middleware('auth:siswa')->group(function () {
    Route::get('/dashboard/siswa', [Siswa::class, 'index'])->name('get.indexSiswa');
    Route::get('/dashboard/siswa/logout', [AuthSiswa::class, 'logout'])->name('get.logoutSiswa');
});