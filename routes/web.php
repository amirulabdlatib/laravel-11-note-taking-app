<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[AuthController::class,'getLoginPage'])->name('login.page');
Route::get('/register',[AuthController::class,'getRegisterPage'])->name('register.page');
Route::resource('notes',NoteController::class);