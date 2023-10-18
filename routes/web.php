<?php

use App\Models\TaskP;
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


Route::get('/', function () {
//    $task1= TaskP::create([
//        'title' => 'Tasca1',
//        'description' => 'Realitzar tasca1',
//        'completed' => 0
//    ]);
//    $task2= TaskP::create([
//        'title' => 'Tasca2',
//        'description' => 'Realitzar tasca2',
//        'completed' => 1
//    ]);
//    $tasks = [
//        $task1,
//        $task2
//    ];
    return view('tasks',['tasks' => Task::all()]);
});

Route::get('/users', function () {
    return view('users');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
