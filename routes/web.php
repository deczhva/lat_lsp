<?php

use App\Http\Controllers\PesanController;
use App\Models\Peminjaman;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Role;

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
    return view('welcome');
});

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('user')->middleware('auth', 'role:user')->group(function() {
    
    Route::get('/dashboard', [\App\Http\Controllers\User\DashboardController::class, 'index'])->name('user.dashboard');
    
    Route::controller(\App\Http\Controllers\User\PeminjamanController::class)->prefix('/peminjaman')->group(function(){
        Route::get('/', 'index')->name('user.peminjaman.riwayat');
        Route::get('/form_peminjaman', 'indexForm')->name('user.peminjaman.form');
        Route::post('/form_peminjaman', 'form')->name('user.form.peminjaman');
        Route::post('/submit', 'store')->name('user.submit.peminjaman');
    });
    
    Route::controller(\App\Http\Controllers\User\PengembalianController::class)->prefix('/pengembalian')->group(function(){
        Route::get('/', 'index')->name('user.pengembalian.form');
        Route::get('/riwayat', 'riwayat')->name('user.pengembalian.riwayat');
        Route::post('/submit', 'store')->name('user.submit.pengembalian');
    });

    Route::controller(\App\Http\Controllers\user\PesanController::class)->prefix('/pesan')->group(function(){
        Route::get('/', 'index')->name('user.pesan');
    });
    
    Route::controller(\App\Http\Controllers\user\ProfileController::class)->prefix('/profile')->group(function(){
        Route::get('/', 'index')->name('user.profile');
        Route::put('/update', 'update')->name('user.profile.update');
    });
});



Route::prefix('admin')->middleware('auth', 'role:admin')->group(function() {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('admin.dashboard');

    Route::controller(\App\Http\Controllers\admin\PeminjamanController::class)->prefix('/peminjaman')->group(function(){
        Route::get('/', 'index')->name('admin.peminjaman.form');
    });

    Route::controller(\App\Http\Controllers\admin\PengembalianController::class)->prefix('/pengembalian')->group(function(){
        Route::get('/', 'index')->name('admin.pengembalian.form');
    });
});