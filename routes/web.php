<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SorteioController;

Route::get('/', [MainController::class, 'show']); 
Route::get('/sortear-todos', [SorteioController::class, 'sortearTodos']); 
