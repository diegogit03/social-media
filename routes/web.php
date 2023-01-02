<?php

use Illuminate\Support\Facades\Route;

Route::name('auth.')->group(function () {
    Route::view('/login', 'login')->name('login');
    Route::view('/register', 'register')->name('register');
    Route::view('/forgot', 'forgot')->name('forgot');
});
