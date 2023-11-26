<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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



//Route::controller(HomeController::class)->group(function(){
//    Route::get('/index', 'home')->name('homepage.home');
//});

//Route::get('/home', [HomeController::class, "home"])->name("homepage.home");
