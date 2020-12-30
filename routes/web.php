<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MembersController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/membros', [MembersController::class, 'index'])->name('membros');

Auth::routes();
