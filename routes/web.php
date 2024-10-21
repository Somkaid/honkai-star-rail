<?php

use App\Http\Controllers\CharacterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/random', [CharacterController::class, 'randomCharacter'])->name('randomCharacter');
Route::get('/random-ten', [CharacterController::class, 'randomTenCharacters'])->name('randomTenCharacters');

use App\Http\Controllers\CharacterController2;

Route::get('/home2/random2', [CharacterController2::class, 'randomCharacter'])->name('randomCharacter2');
Route::get('/home2/random-ten2', [CharacterController2::class, 'randomTenCharacters'])->name('randomTenCharacters2');

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/home2', function () {
    return view('home2');
})->name('home2');

Route::get('/home3', function () {
    return view('home3');
})->name('home3');
