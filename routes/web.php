<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;
use App\Http\Controllers\DrinkController;

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
    return view('main');
})->name('main');

Route::get('foods', [FoodController::class,'index'])->name('foods');
Route::post('foods/new', [FoodController::class,'store'])->name('newFood');

Route::get('drinks', function () {
    return view('drinks.index');
})->name('drinks');
