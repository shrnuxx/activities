<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {return view('loginPage');}) -> name('login');

Route::get('/register', function() {return view('registerPage');}) -> name('register');

Route::get('/dashboard', function() {return view('dashboardPage');}) -> name('dashboard');

Route::post('/register', 'App\Http\Controllers\accounts@store');

Route::post('/', 'App\Http\Controllers\loginController@store');
