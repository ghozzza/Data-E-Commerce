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
use App\Http\Controllers\adminOrderController;
use App\Http\Controllers\adminUserController;
use App\Http\Controllers\adminScrappingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\registerController;


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

Route::get('/admin-dashboard', [adminController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/kabupaten', [adminKabupatenController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/kecamatan', [adminKecamatanController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/profil-user', [adminProfilUserController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/provinsi', [adminProvinsiController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/riwayat-data-dapodik', [adminRiwayatDataDapodikController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/riwayat-kamar', [adminRiwayatKamarController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/riwayat-order', [adminRiwayatOrderController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/order', [adminOrderController::class, "index"])->middleware('auth', 'auth.role:1');

// admin rumah sakit
Route::get('/admin-dashboard/rumah-sakit', [adminRumahSakitController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/rumah-sakit/create', [adminRumahSakitController::class, "create"])->middleware('auth', 'auth.role:1');
Route::post('/admin-dashboard/rumah-sakit/store', [adminRumahSakitController::class, "store"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/rumah-sakit/edit/{id}', [adminRumahSakitController::class, "edit"])->middleware('auth', 'auth.role:1');
Route::put('/admin-dashboard/rumah-sakit/update/{id}', [adminRumahSakitController::class, 'update'])->middleware('auth', 'auth.role:1');
Route::delete('/admin-dashboard/rumah-sakit/delete/{id}', [adminRumahSakitController::class, 'delete'])->middleware('auth', 'auth.role:1');

Route::get('/admin-dashboard/sekolah', [adminSekolahController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/user', [adminUserController::class, "index"])->middleware('auth', 'auth.role:1');

// admin paket test
Route::get('/admin-dashboard/paket', [adminPaketController::class, "index"])->middleware('auth', 'auth.role:1');
Route::get('/admin-dashboard/paket/details/{id}', [adminPaketController::class, "details"])->middleware('auth', 'auth.role:1');
Route::post('/admin-dashboard/paket/details/{id}', [adminPaketController::class, "payment_post"])->middleware('auth', 'auth.role:1');

// scrapping 
Route::get('/admin-dashboard/scrapping', [adminScrappingController::class, "index"])->middleware('auth', 'auth.role:1');
// Route::get('/admin-dashboard/scrapping/details?index={i}', [adminScrappingController::class, "details"])->middleware('auth', 'auth.role:1');
 Route::post('/admin-dashboard/scrapping/details', [adminScrappingController::class, "details"])->middleware('auth', 'auth.role:1');



Route::get('/sign-in', [loginController::class, "index"]);
Route::post('/sign-in', [LoginController::class, "login"]);
Route::post('/logout', [LoginController::class, "logout"]);

Route::get('/sign-up', [registerController::class, "index"]);
Route::post('/sign-up/store', [registerController::class, "store"]);