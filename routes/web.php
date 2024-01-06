<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\JelajahController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\LikesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FollowController;
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

Route::get('/signup', [AuthController::class, 'registration']);
Route::post('/signup', [AuthController::class, 'proccess_registration']);

Route::middleware(['auth'])->group(function () {
    Route::get('/', [BerandaController::class, 'index']);
    Route::get('/jelajah', [JelajahController::class, 'index']);
    Route::post('/posts', [PostsController::class, 'posts']);
    Route::post('/posts/{post}like', [LikesController::class, 'likePost'])->name('posts.like');;
    Route::get('/profile', [ProfileController::class, 'index']);

    Route::get('/user/{name}', [BerandaController::class,'detail_user']);
    Route::post('/follow/{user}', [FollowController::class, 'follow'])->name('follow');
});
