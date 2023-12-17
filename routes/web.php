<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;

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

// ... (other routes)

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

Route::post('/submit-registration', [RegistrationController::class, 'store'])->name('submit.registration');
Route::get('/registration-confirmation', [RegistrationController::class, 'showConfirmation'])->name('registration.confirmation');

// Allow access to the admin dashboard without authentication
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    // Add other admin routes here
    Route::put('/make-admin/{userId}', [AdminController::class, 'makeAdmin'])->name('admin.make-admin');
});

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

// Existing routes...
