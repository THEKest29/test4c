<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LearnController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegistrateController;

Route::get('/learn', [LearnController::class, 'show']);
Route::post('/learn', [LearnController::class, 'share'])->name('learn.share');
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/registrate', [RegistrateController::class, 'create'])->name('registrate');
Route::post('/registrate', [RegistrateController::class, 'store']);