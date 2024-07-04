<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('pesan/{id}', [App\Http\Controllers\pesanController::class, 'index'])->name('home');
Route::post('pesan/{id}', [App\Http\Controllers\pesanController::class, 'pesan'])->name('home');

Route::get('check-out', [App\Http\Controllers\pesanController::class, 'check_out'])->name('home');
Route::delete('check-out/{id}', [App\Http\Controllers\pesanController::class, 'delete'])->name('home');
Route::get('konfirmasi-check-out', [App\Http\Controllers\pesanController::class, 'konfirmasi'])->name('home');

Route::get('profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('home');
Route::post('profile', [App\Http\Controllers\ProfileController::class, 'update'])->name('home');

Route::get('history', [App\Http\Controllers\HistoryController::class, 'index'])->name('home');
Route::get('history/{id}', [App\Http\Controllers\HistoryController::class, 'detail'])->name('home');