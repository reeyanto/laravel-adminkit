<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.signin');
})->name('auth.signin');

Route::get('/signup', function() {
    return view('auth.signup');
})->name('auth.signup');

Route::get('/dashboard', function() {
    return view('admin.blank.index');
})->name('admin.dashboard');