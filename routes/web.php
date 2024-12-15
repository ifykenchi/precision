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

Route::get('/services', function () {
    return view('services');
});

Route::get('/adminstaff', function () {
    return view('adminstaff');
});

Route::get('/staff', function () {
    return view('staff');
});

Route::get('/productlist', function () {
    return view('productlist');
});

Route::get('/productlogistics', function () {
    return view('productlogistics');
});

Route::get('/productadd', function () {
    return view('productadd');
});

Route::get('/addStaff', function () {
    return view('addStaff');
});

Route::get('/editStaff', function () {
    return view('editStaff');
});

Route::get('/productAddLocation', function () {
    return view('productAddLocation');
});

Route::get('/productEditLocation', function () {
    return view('productEditLocation');
});

Route::get('/transactionsSale', function () {
    return view('transactionsSale');
});

Route::get('/transactionsExpense', function () {
    return view('transactionsExpense');
});
