<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EasyController;
Route::get('/',[EasyController::class,'home']);
Route::get('/hnavbar',[EasyController::class,'hnavbar']);
Route::get('/footer',[EasyController::class,'footer']);