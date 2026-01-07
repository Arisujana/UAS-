<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakananController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| PUBLIC (GUEST & USER)
|--------------------------------------------------------------------------
*/

Route::get('/', [MakananController::class, 'index'])->name('home');
Route::get('/makanan/{id}', [MakananController::class, 'show'])->whereNumber('id')->name('makanan.show');

/*
|--------------------------------------------------------------------------
| ADMIN (LOGIN REQUIRED)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/makanan/create', [MakananController::class, 'create'])->name('makanan.create');
    Route::post('/makanan', [MakananController::class, 'store'])->name('makanan.store');
    Route::get('/makanan/{id}/edit', [MakananController::class, 'edit'])->name('makanan.edit');
    Route::put('/makanan/{id}', [MakananController::class, 'update'])->name('makanan.update');
    Route::delete('/makanan/{id}', [MakananController::class, 'destroy'])->name('makanan.destroy');
});


/*
|--------------------------------------------------------------------------
| PROFILE (BREEZE DEFAULT)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

/*
|--------------------------------------------------------------------------
| AUTH ROUTES (LOGIN / REGISTER)
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| DASHBOARD (AFTER LOGIN)
|--------------------------------------------------------------------------
*/

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::resource('makanan', MakananController::class);
});


require __DIR__.'/auth.php';
