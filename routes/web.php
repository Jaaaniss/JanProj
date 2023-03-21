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



// Route::get('/select', function () {
//     return view('select');
// });

Route::get('/manage', [VansController::class, 'vans3']);
Route::get('/next',[VansController::class,'vans']);
Route::get('/select',[VansController::class,'vans2']);

// Route::view('/home','home')->middleware('auth');

Route::get('/add', [AddController::class, 'create']);

Route::post('/add', [AddController::class, 'store']);

Route::get('edit/{id}', [EditController::class, 'editt_vans']);

// Route::get('edit/{id}', [EditController::class, 'editt_nike']);

// Route::get('edit/{id}', [EditController::class, 'editt_adidas']);

// Route::get('edit/{id}', [EditController::class, 'editt_newbalance']);

Route::put('update/{id}', [UpdateController::class, 'updatee_vans']);

// Route::put('update/{id}', [UpdateController::class, 'updatee_nike']);

// Route::put('update/{id}', [UpdateController::class, 'updatee_adidas']);

// Route::put('update/{id}', [UpdateController::class, 'updatee_newbalance']);

Route::delete('delete/{id}', [DestroyController::class, 'destroy']);


Route::get('/vanssize/{size}',[VansController::class,'index']);

Route::get('/nikesize/{size}',[NikeController::class,'index']);

Route::get('/adidassize/{size}',[AdidasController::class,'index']);

Route::get('/nbsize/{size}',[NBController::class,'index']);


Route::POST('/select',[SizeController::class,'insert']);


Route::get('view-records','StudViewController@index');





// Route::get('/next', function () {
//     return view('next');
// });
