<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home')
    ->middleware('auth');

Route::get('/admin/home', [App\Http\Controllers\AdminController::class, 'index'])
    ->name('admin.home')
    ->middleware('is_admin');

Route::get('/admin/books', [App\Http\Controllers\AdminController::class, 'books'])
    ->name('admin.books')
    ->middleware('is_admin');
