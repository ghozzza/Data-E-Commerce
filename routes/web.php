<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\adminController;
use App\Http\Controllers\adminKabupatenController;
use App\Http\Controllers\adminKecamatanController;
use App\Http\Controllers\adminPaketController;
use App\Http\Controllers\adminProfilUserController;
use App\Http\Controllers\adminProvinsiController;
use App\Http\Controllers\adminRiwayatDataDapodikController;
use App\Http\Controllers\adminRiwayatKamarController;
use App\Http\Controllers\adminRiwayatOrderController;
use App\Http\Controllers\adminRumahSakitController;
use App\Http\Controllers\adminSekolahController;
use App\Http\Controllers\adminUserController;
use App\Http\Controllers\loginController;


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

Route::get('/admin-dashboard', [adminController::class, "index"]);
Route::get('/admin-dashboard/kabupaten', [adminKabupatenController::class, "index"]);
Route::get('/admin-dashboard/kecamatan', [adminKecamatanController::class, "index"]);
Route::get('/admin-dashboard/paket', [adminPaketController::class, "index"]);
Route::get('/admin-dashboard/profil-user', [adminProfilUserController::class, "index"]);
Route::get('/admin-dashboard/provinsi', [adminProvinsiController::class, "index"]);
Route::get('/admin-dashboard/riwayat-data-dapodik', [adminRiwayatDataDapodikController::class, "index"]);
Route::get('/admin-dashboard/riwayat-kamar', [adminRiwayatKamarController::class, "index"]);
Route::get('/admin-dashboard/riwayat-order', [adminRiwayatOrderController::class, "index"]);

// admin rumah sakit
Route::get('/admin-dashboard/rumah-sakit', [adminRumahSakitController::class, "index"]);
Route::get('/admin-dashboard/rumah-sakit/create', [adminRumahSakitController::class, "create"]);
Route::post('/admin-dashboard/rumah-sakit/store', [adminRumahSakitController::class, "store"]);
Route::get('/admin-dashboard/rumah-sakit/edit/{id}', [adminRumahSakitController::class, "edit"]);
Route::put('/admin-dashboard/rumah-sakit/update/{id}', [adminRumahSakitController::class, 'update']);
Route::delete('/admin-dashboard/rumah-sakit/delete/{id}', [adminRumahSakitController::class, 'delete']);

Route::get('/admin-dashboard/sekolah', [adminSekolahController::class, "index"]);
Route::get('/admin-dashboard/user', [adminUserController::class, "index"]);

Route::get('/sign-in', [loginController::class, "index"]);