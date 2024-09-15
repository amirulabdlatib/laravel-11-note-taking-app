<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/login',[AuthController::class,'getLoginPage'])->name('login.page');
Route::post('/login',[AuthController::class,'login'])->name('post.login');
Route::post('/logout',[AuthController::class,'logout'])->name('post.logout');
Route::get('/register',[AuthController::class,'getRegisterPage'])->name('register.page');
Route::post('/register',[AuthController::class,'register'])->name('post.register');

Route::resource('notes',NoteController::class);