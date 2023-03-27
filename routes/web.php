<?php

use App\Http\Controllers\AddController;
use App\Http\Controllers\VansController;
use App\Http\Controllers\NikeController;
use App\Http\Controllers\AdidasController;
use App\Http\Controllers\DestroyController;
use App\Http\Controllers\EditController;
use App\Http\Controllers\NBController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\UpdateController;
// use Illuminate\Routing\Route;
use Illuminate\Support\Facades\DB;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('sakums');
});

Route::get('/editsize', function () {
    return view('editsize');
});


Route::get('/manage_vans', [VansController::class, 'vans3']);
Route::get('/manage_nike', [VansController::class, 'nike3']);
Route::get('/manage_adidas', [VansController::class, 'adidas3']);
Route::get('/manage_nb', [VansController::class, 'newbalance3']);
Route::get('/manage_users', [VansController::class, 'users3']);


Route::get('/next',[VansController::class,'vans']);

Route::get('/select',[VansController::class,'vans2']);


Route::get('/add', [AddController::class, 'create']);
Route::post('/add', [AddController::class, 'storeAnything']);


Route::get('edit/{id}/{company}', [EditController::class, 'editAnything']);
Route::get('edit_users/{id}', [EditController::class, 'edit_user']);


Route::put('update/{id}/{company}', [UpdateController::class, 'updateAnything']);
Route::put('update/{id}', [UpdateController::class, 'update_user']);


Route::delete('delete/{id}/{company}', [DestroyController::class, 'destroyAnything']);
Route::delete('delete/{id}', [DestroyController::class, 'destroy_user']);


Route::get('/vanssize/{size}',[VansController::class,'index']);
Route::get('/nikesize/{size}',[NikeController::class,'index']);
Route::get('/adidassize/{size}',[AdidasController::class,'index']);
Route::get('/nbsize/{size}',[NBController::class,'index']);


Route::POST('/select',[SizeController::class,'insert']);


Route::get('view-records','StudViewController@index');
