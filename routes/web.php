<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\home;
use App\Http\Controllers\blog;
use App\Http\Controllers\contact;
use App\Http\Controllers\masterController;


Route::get('/', [masterController::class, 'index']);

Route::get('/home', [home::class, 'index'])->name('home');

Route::get('/blog', [blog::class, 'index'])->name('blog');

Route::get('/contact', [contact::class, 'index'])->name('contact');
