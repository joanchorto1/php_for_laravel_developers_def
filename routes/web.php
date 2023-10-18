<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\UserController;
use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

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


Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);
Route::get('/home', [TaskController::class, 'index']);

Route::get('/users', [UserController::class,'index']) ;
Route::get('/about', [PagesController::class,'about'] );
Route::get('/contact', [PagesController::class,'contact']);
