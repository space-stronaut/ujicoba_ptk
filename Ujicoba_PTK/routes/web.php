<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InputagendaController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KegpendidikController;
use App\Http\Controllers\KegtambahanController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LevelControlle;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\PendidikController;
use App\Http\Controllers\TapelController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\KepsekController;
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
    return view('welcome');
});

Route::get('/register', [RegisterController::class]);
Route::get('/masuk', [LoginController::class, "show"]);

Route::get('/dashboard', [DashboardController::class, 'index'])->name('Dashboard');

// Route Data Master
Route::resource('/datajurusan', JurusanController::class);
Route::get('/laporan', [KepsekController::class, 'index']);
Route::get('/buat', [KegpendidikController::class, 'cari']);
Route::get('/cari', [KegpendidikController::class, 'search']);
Route::put('/laporan/update/{id}', [KepsekController::class, 'update']);
Route::resource('/datakelas', KelasController::class);
Route::resource('/datamapel', MapelController::class);
Route::resource('/datalevel', LevelControlle::class);
// Route Data PTK
Route::resource('/datapendidik', PendidikController::class);
Route::resource('/datatendik', TendikController::class);
// Manage Kegiatan
Route::resource('/kegiatanpendidik', KegpendidikController::class);
Route::resource('/kegiatantambahan', KegtambahanController::class);



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
