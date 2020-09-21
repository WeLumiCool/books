<?php

use App\Http\Controllers\BasketController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\TypeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});
//Для корзины
Route::get('/basket', [BasketController::class, 'index']);
Route::get('/change_basket',[BasketController::class], 'change_basket');


Route::get('/get_books',[BookController::class, 'index']);
Route::get('/get_types',[TypeController::class, 'index']);
Route::get('/get_genres',[GenreController::class, 'index']);