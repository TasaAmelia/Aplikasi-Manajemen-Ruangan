<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;

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

Route::get('/', [AdminController::class, 'read']);
Route::get('/adminDelete/{id}', [AdminController::class, 'delete'] );

Route::get('/adminEdit/{id}', [AdminController::class, 'edit'] );
Route::post('/adminUpdate/{id}', [AdminController::class, 'update'] );

Route::get('/adminAdd', [AdminController::class, 'add']);
Route::post('/adminAdd', [AdminController::class, 'store']);

Route::get('/login', [LoginController::class, 'indexLogin']);
Route::post('/login', [LoginController::class, 'authLogin']);

