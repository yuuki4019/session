<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Session用
Route::get('/sessions','SessionTestController@create');
Route::post('/sessions','SessionTestController@store');
Route::get('/sessions/detail','SessionTestController@detail');
Route::get('/sessions/logout','SessionTestController@logout');

//Route::get('/sessions', [PostController::class, 'index']);
