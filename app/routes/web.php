<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\PostController;


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
    return view('likes.index');
});
Route::get('/', [LikeController::class, 'index'])->name('home');
// Route::get('/', [LikeController::class, 'index'])->nmae('houme');
Route::resource('tasks', LikeController::class);
Route::resource('tasks', PostController::class);
