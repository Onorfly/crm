<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\RolesController;
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

Route::post('roles', [RolesController::class, 'create']);

Route::get('index', [RolesController::class, 'index']);

Route::get('roles/{role}', [RolesController::class, 'show']);

Route::get('roles/{role}/users', [RolesController::class, 'users']);

/*Route::get('roles/1', function () {
    dd('test');
});*/

