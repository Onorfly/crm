<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MainController::class, 'index']);

Route::post('post', [MainController::class, 'testPost']);

Route::put('/', [MainController::class, 'testPut']);

Route::get('html', [MainController::class, 'html']);

Route::any('test', [MainController::class, 'testAny']);
