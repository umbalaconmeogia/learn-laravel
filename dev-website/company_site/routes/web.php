<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\TopPageController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', 'App\Http\Controllers\TopPageController@show');
Route::get('/', [TopPageController::class, 'show']);

Route::get('/about', [AboutPageController::class, 'show']);