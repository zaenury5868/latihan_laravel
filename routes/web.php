<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\SiswaController;
// use Auth;

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
Route::get('/beranda', [MenuController::class, 'home']);
Route::get('/info-kegiatan', [MenuController::class, 'info_kegiatan']);
Route::get('/data-siswa', [MenuController::class, 'data_siswa']);
Route::get('/', function () {
    return view('welcome');
});
Auth::routes();
Route::resource('siswa', SiswaController::class);
Route::resource('siswa', SiswaController::class)
->middleware('can:isAdmin');
Route::resource('siswa', SiswaController::class)
->only('show')->middleware('can:isAdmin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');