<?php
use App\Http\Controllers\VansController;
use App\Http\Controllers\NikeController;
use App\Http\Controllers\AdidasController;
use App\Http\Controllers\NBController;
use App\Http\Controllers\SizeController;
use Illuminate\Routing\Route;
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


Route::get('/next',[VansController::class,'vans']);
Route::get('/select',[VansController::class,'vans2']);

// Route::view('/home','home')->middleware('auth');



Route::get('/vanssize/{size}',[VansController::class,'index']);

Route::get('/nikesize/{size}',[NikeController::class,'index']);

Route::get('/adidassize/{size}',[AdidasController::class,'index']);

Route::get('/nbsize/{size}',[NBController::class,'index']);


Route::POST('/select',[SizeController::class,'insert']);


Route::get('view-records','StudViewController@index');





// Route::get('/next', function () {
//     return view('next');
// });