<?php

use App\Http\Controllers\Gaji;
use App\Http\Controllers\Home;
use App\Http\Controllers\Jabatan;
use App\Http\Controllers\Presensi;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [Home::class, 'index']);
Route::get('/gaji', [Gaji::class, 'index']);
Route::get('/jabatan', [Jabatan::class, 'index']);
Route::get('/presensi', [Presensi::class, 'index']);
