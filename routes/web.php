<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


#login page
Route::get('/', function () {
    return view('login');
});

#login
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/register',[LoginController::class,'register'])->name('register');

Route::middleware(['auth'])->group(function (){
    Route::resource('/tasks',TaskController::class);
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
});
