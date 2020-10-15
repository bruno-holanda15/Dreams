<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DreamController;


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

Route::get('/home',[DreamController::class, 'home']);
Route::get('/create',[DreamController::class, 'create']);
Route::get('/list',[DreamController::class, 'list']);
Route::post('/store',[DreamController::class, 'store']);

