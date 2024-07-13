<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


#login page
Route::redirect('/','/login');

#login
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [LoginController::class,'loginPage']);
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::post('/register', [LoginController::class, 'register'])->name('register');
});
Route::middleware(['auth'])->group(function (){
    Route::resource('/tasks',TaskController::class);
    Route::post('/logout',[LoginController::class,'logout'])->name('logout');
});
