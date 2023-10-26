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

Route::get('/', function () {
    return view('pages.user');
});

//route resource


Auth::routes();
Route::get('/admina', [HomeController::class, 'index'])->name('home')->middleware('roleAkses:admin');
Route::middleware(['auth'])->group(function(){

    Route::resource('/posts',PostController::class)->middleware('roleAkses:admin');
    Route::get('/user', [HomeController::class, 'index_user'])->name('user')->middleware('roleAkses:user');
});


