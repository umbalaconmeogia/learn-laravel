<?php

use App\Http\Controllers\UserEntryController;
use App\Models\User;
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

Route::get('/user_entry', [UserEntryController::class, 'index']);

Route::get('/user_entry/{id}', [UserEntryController::class, 'detail']);

Route::get('/user', function () {
    // 3件だけデータを取得
    $users = User::limit(3)->get()->toArray();
    dd($users);
});