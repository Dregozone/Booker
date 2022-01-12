<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Auth\LogoutController;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/events', [PagesController::class, 'events'])->name('events');
Route::get('/profile', [PagesController::class, 'profile'])->name('profile');

Route::get('/logout', [LogoutController::class, 'index'])->name('logout');
