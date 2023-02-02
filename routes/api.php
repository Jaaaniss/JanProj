<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VansController;
use App\Http\Controllers\NikeController;
use App\Http\Controllers\AdidasController;






Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/vanssize/{size}',[VansController::class,'index']);

Route::get('/nikesize/{size}',[NikeController::class,'index']);

Route::get('/adidassize/{size}',[AdidasController::class,'index']);