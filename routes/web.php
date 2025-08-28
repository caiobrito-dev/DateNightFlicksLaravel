<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AdminFilmesController;
use App\Http\Controllers\SorteioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'show']);
Route::get('/sortear-todos', [SorteioController::class, 'sortearTodos']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/filmes/create', [AdminFilmesController::class, 'create'])->name('admin.filmes.create');
    Route::post('/admin/filmes/store', [AdminFilmesController::class, 'store'])->name('admin.filmes.store');
});

require __DIR__.'/auth.php';
