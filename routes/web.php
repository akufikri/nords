<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JelajahController;
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

Route::get('/sign', [AuthController::class, 'login'])->name('login');
Route::post('/login/proccess', [AuthController::class, 'proccess_login']);
Route::get('/logout', [AuthController::class, 'logout']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [BerandaController::class, 'index']);
    Route::get('/jelajah', [JelajahController::class, 'index']);
});