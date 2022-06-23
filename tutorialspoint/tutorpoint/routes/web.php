<?php

use App\Http\Controllers\TerminateController;
use App\Http\Controllers\TestController;
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

Route::get('/', function () {
    return view('welcome');
});

// Access to http://localhost:8000/role
Route::get('role', [TestController::class, 'role'])->middleware('role:editor');

// Access to http://localhost:8000/terminate
Route::get('terminate', [TerminateController::class, 'index'])->middleware('terminate');