<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KuisionerController;
use App\Http\Controllers\PelaporanController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('layouts.dashboard.master');
// });
Route::get('/home', [DashboardController::class, 'index']) -> name('dashboard');

Route::get('/kuisioner', [KuisionerController::class, 'index']) -> name('kuisioner');
Route::post('/kuisioner', [KuisionerController::class, 'store']) -> name('kuisioner.store');

Route::get('/pelaporan', [PelaporanController::class, 'index']) -> name('pelaporan');
Route::post('/savePelaporan', [PelaporanController::class, 'update']) -> name('pelaporan.update');

Route::get('/login', [AuthController::class, 'login']) -> name('login');
Route::post('/login', [AuthController::class, 'post_login']) -> name('login.post');
Route::get('/register', [AuthController::class, 'register']) -> name('register');
Route::post('/register', [AuthController::class, 'post_register']) -> name('register.post');
Route::get('/logout', [AuthController::class, 'logout']) -> name('logout');
