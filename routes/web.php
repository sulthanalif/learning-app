<?php

use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Landingpage\BlogController;
use App\Http\Controllers\Landingpage\HomeController;
use App\Http\Controllers\Landingpage\AboutController;
use App\Http\Controllers\Landingpage\ContactController;


//landingpage
Route::get('/', HomeController::class)->name('home');
Route::get('/blogs', BlogController::class)->name('blogs');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');

//blog
Route::get('/blogs/{post:slug}', [BlogController::class, 'show'])->name('blogs.show');

//login
Route::get('/login', LoginController::class)->name('login');