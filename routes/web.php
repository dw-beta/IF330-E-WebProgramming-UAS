<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\FasilitasController;

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
    return redirect()->to('/home');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/kegiatan', function () {
    return view('kegiatan');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/ppdb', function () {
    return view('ppdb');
});
Route::get('/kontak', function () {
    return view('kontak');
});

// ... (other routes)

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::post('/submit-registration', [RegistrationController::class, 'store'])->name('submit.registration');
Route::get('/registration-confirmation', [RegistrationController::class, 'showConfirmation'])->name('registration.confirmation');

// Allow access to the admin dashboard without authentication
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

Route::resource('/dashboard/berita', BeritaController::class)->middleware('auth');
Route::resource('/dashboard/kegiatan', KegiatanController::class)->middleware('auth');
Route::resource('/dashboard/fasilitas', FasilitasController::class)->middleware('auth');

// Existing routes...
