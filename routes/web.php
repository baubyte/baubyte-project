<?php

use Baubyte\Routing\Route;
use App\Controllers\HomeController;
use Baubyte\Auth\Auth;

Auth::routes();

Route::get('/', fn () => redirect('/home'));
Route::get('/home', [HomeController::class, 'index']);