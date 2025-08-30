<?php

use Illuminate\Support\Facades\Route;

// Home
Route::get('/', function () {
    return view('contents.home');
})->middleware(['auth'])->name('home');
Route::get('/home', function () {
    return view('contents.home');
})->middleware(['auth'])->name('home');

// Data
Route::get('/data', function () {
    return view('contents.data');
})->middleware(['auth'])->name('data');

Route::post('/logout', function (Request $request) {
    Auth::logout();
    return redirect('/login'); 
})->name('logout');
