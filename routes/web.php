<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index']);

Auth::routes();
Route::middleware(['auth'])->group(function(){
    Route::resource('/crud',PostController::class)->middleware('roleAkses:admin');
    Route::get('/dashboard_admin', [PostController::class, 'create'])->name('home')->middleware('roleAkses:admin');
});


