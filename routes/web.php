<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('signup');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/flogin', function () {
    return view('forgotpassword');
});

Route::get('/vlogin', function () {
    return view('loginverification');
});


Route::get('/dashboard', function () {
    return view('dashboard');
});
