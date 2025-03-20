<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('superheroes', 'App\Http\Controllers\SuperheroeController');

