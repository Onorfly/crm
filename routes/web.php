<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MainController::class, 'index']);

Route::post('post', [MainController::class, 'testPost']);

Route::put('/', [MainController::class, 'testPut']);

Route::get('html', [MainController::class, 'html']);

Route::any('test', [MainController::class, 'testAny']);
