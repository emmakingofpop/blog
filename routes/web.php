<?php

use App\Http\Controllers\VideoController;
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

Route::get('/', [VideoController::class, 'home']);
Route::get('/admin', [VideoController::class, 'admin']);
Route::get('/insert', [VideoController::class, 'insertvideo']);
Route::get('/listevideo', [VideoController::class, 'listevideo']);
Route::get('/edit/{id}', [VideoController::class, 'edit']);
Route::put('/update/{id}', [VideoController::class, 'update']);
Route::get('/delete/{id}', [VideoController::class, 'delete']);