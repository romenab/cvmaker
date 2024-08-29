<?php

use App\Http\Controllers\CreateCVController;
use App\Http\Controllers\DeleteCVController;
use App\Http\Controllers\EditCVController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShowCVController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ShowCVController::class, 'show'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/create', [CreateCVController::class, 'create']);
    Route::post('/store', [CreateCVController::class, 'store']);

    Route::get('/cv/{id}', [ShowCVController::class, 'display'])->name('cv.display');
    Route::post('/cv/{id}', [DeleteCVController::class, 'destroy'])->name('cv.destroy');

    Route::get('/cv/{id}/update', [EditCVController::class, 'edit'])->name('cv.update');
    Route::post('/cv/{id}/update', [EditCVController::class, 'update'])->name('cv.update');
});


require __DIR__.'/auth.php';
