<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;

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

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/submit-registration', [RegistrationController::class, 'store'])->name('submit.registration');
Route::get('/registration-confirmation', [RegistrationController::class, 'showConfirmation'])->name('registration.confirmation');

//Route::controller(HomeController::class)->group(function(){
//    Route::get('/index', 'home')->name('homepage.home');
//});

//Route::get('/home', [HomeController::class, "home"])->name("homepage.home");
