<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KontinensekController;
use App\Http\Controllers\OrszagokController;

Route::view('/', 'welcome');
Route::get('/kontinens/{id}', [KontinensekController::class, 'Kontinens']);
Route::get('/orszagok/{id}', [OrszagokController::class, 'Orszagok']);
