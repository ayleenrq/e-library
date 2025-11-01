<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Session;

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

Route::get('/login', fn() => view('pages.auth.login'))->name('login')->withoutMiddleware('auth');
Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', fn() => view('pages.auth.register'))->name('register')->withoutMiddleware('auth');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['auth'])->group(function () { // artinya semua route di dalam group ini harus login dulu
    Route::get('/', function () {
        $role = strtolower(Session::get('role'));
        if (!in_array($role, ['admin', 'user'])) return Redirect::route('logout');
        return Redirect::route("{$role}.dashboard");
    });

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::middleware(['authorize:ADMIN'])->prefix('admin')->group(function () {
        Route::get('/dashboard', fn() => view('pages.admin.dashboard'))->name('admin.dashboard');
    });

    Route::middleware(['authorize:USER'])->prefix('user')->group(function () {
        Route::get('/dashboard', fn() => view('pages.user.dashboard'))->name('user.dashboard');
    });
});