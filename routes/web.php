<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
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




Route::middleware(['guest'])->group(function () {
    Route::get('/', [GuestController::class, 'index']);
    Route::get('/login', [GuestController::class, 'log'])->name('login');
    Route::post('/login', [GuestController::class, 'login']);
    Route::get('/guest', [GuestController::class, 'guest']);

});


Route::get('/home', function(){
    return redirect('/');
});


Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
 Route::get('/logout', [GuestController::class, 'logout']);   
 });

