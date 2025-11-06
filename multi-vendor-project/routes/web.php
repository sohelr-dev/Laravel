<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.pages.welcome');
});
Route::view('/vendor-dashboard','admin.pages.vandors.dashboard')->name('vendor.dashboard');
Route::view('/admin-dashboard','admin.pages.dashboard')->name('admin.dashboard');
