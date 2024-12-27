<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\ProfilSekolahController;
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
    Route::get('/guest/detail/{id}', [GuestController::class, 'show'])->name('guest.show');
});


Route::get('/home', function(){
    return redirect('/');
});

Route::prefix('admin')->middleware(['auth'])->name('admin.')->group(function () {
    Route::resource('Profil', ProfilSekolahController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->middleware('userAkses:admin');
    Route::get('/admin/profil', [ProfilSekolahController::class, 'index'])->middleware('userAkses:admin')->name('profil-sekolah.index');
    Route::get('/admin/profil/edit', [ProfilSekolahController::class, 'edit'])->middleware('userAkses:admin');
    Route::get('/admin/profil/create', [ProfilSekolahController::class, 'create'])->middleware('userAkses:admin')->name('profil-sekolah.create');
    Route::post('/admin/profil/create', [ProfilSekolahController::class, 'store'])->middleware('userAkses:admin')->name('profil-sekolah.store');
    Route::post('/admin/profil/create', [ProfilSekolahController::class, 'show'])->middleware('userAkses:admin')->name('profil-sekolah.show');
    Route::post('/admin/profil/create', [ProfilSekolahController::class, 'edit'])->middleware('userAkses:admin')->name('profil-sekolah.edit');
    Route::get('profil-sekolah/{id}', [ProfilSekolahController::class, 'show'])->name('profil-sekolah.show');
    Route::delete('/profil-sekolah/{id}', [ProfilSekolahController::class, 'destroy'])->name('profil-sekolah.destroy');
    Route::resource('profil-sekolah', ProfilSekolahController::class);




 Route::get('/logout', [GuestController::class, 'logout']);   
 });

