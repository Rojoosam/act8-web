<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperheroeController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('superheroes/trashed', [SuperheroeController::class, 'trashed'])->name('superheroes.trashed');
Route::post('superheroes/{id}/restore', [SuperheroeController::class, 'restore'])->name('superheroes.restore');

Route::resource('superheroes', SuperheroeController::class);
