<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


#login page
Route::get('/', function () {
    return view('login');
});

#login
Route::post('/login',[LoginController::class,'login'])->name('login');
Route::post('/register',[LoginController::class,'register'])->name('register');
Route::post('/logout',[LoginController::class,'logout'])->name('logout');
Route::middleware(['auth'])->group(function (){
    Route::view('/dashboard','dashboard')->name('dashboard');
});
