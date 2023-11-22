<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/user', [HomeController::class, 'index2'])->name('bungas.homeuser');

Route::middleware('auth')->group(function () {

    Route::get('/home', [HomeController::class, 'index1'])->name('bunga.home');
    Route::post('/admin', [HomeController::class, 'store']) ->name("bungas.store");
    Route::get('/admin/create', [HomeController::class, 'create'])->name('bunga.create');
    Route::get('/admin/{bungas}/edit', [HomeController::class, 'edit']) ->name("bunga.edit");
    Route::post('/admin/{bungas}', [HomeController::class, 'update']) ->name("bunga.update");
    Route::delete('/admin/{bungas}', [HomeController::class, 'destroy']) ->name("bunga.destroy");
});
