<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->middleware(['auth'])->name('home');
Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');
Route::post('/logout', function (Request $request) {
    Auth::logout();
    return redirect('/login'); 
})->name('logout');
