<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\CharacterController;


Route::get('/random', [CharacterController::class, 'randomCharacter'])->name('randomCharacter');
Route::get('/random-ten', [CharacterController::class, 'randomTenCharacters'])->name('randomTenCharacters');
Route::get('/pull-characters', [CharacterController::class, 'pullCharacters']);
