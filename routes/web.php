<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DateController;

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
/*

*/


Route::resource('/date', DateController::class);
Route::post("search",[DateController::class,'search']);
#Route::post("search",[DateController::class,'validate']);
Route::get('/date',[DateController::class,'view']);



//Route::post('report')