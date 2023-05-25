<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\test;
use App\Http\Controllers\ageController;
use App\Http\Controllers\YearVerificationController;

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



Route::post('char', [ageController::class, 'AgeView']);
Route::get('char', [ageController::class, 'AgeView']);

Route::get('discuss', [App\Http\Controllers\YearVerificationController::class, 'yearCheck'])->middleware('check-year');


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('test', [test::class, 'test']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->age('home');



