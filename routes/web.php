<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[AuthController::class,'getLoginPage'])->name('login.page');
Route::post('/login',[AuthController::class,'login'])->name('post.login');


Route::get('/register',[AuthController::class,'getRegisterPage'])->name('register.page');
Route::resource('notes',NoteController::class);