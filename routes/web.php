<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('auths.login');
})->name('login');

Route::get('/dashboard', function () {
    return view('welcome');
})->name('dashboard');

Route::get('/submenu3.1.1', function () {
    return view('menus.submenu3_1_1');
})->name('submenu3_1_1');

Route::get('/manage_user', function () {
    return view('crud.user');
})->name('manage_user');
