<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::view('/','pages.index')->name('welcome');
Route::view('resume','pages.resume')->name('pages.resume');
Route::view('contact','pages.contact')->name('pages.contact');
Route::view('about','pages.about')->name('pages.about');
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
