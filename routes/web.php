<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ContactController::class,'index']);
Route::resource('/contacts',ContactController::class);
Route::post('/search',[ContactController::class,'serarcedata']);
Route::get('/shortbyname',[ContactController::class,'shortbyname']);
Route::get('/shortbydate',[ContactController::class,'shortbydate']);