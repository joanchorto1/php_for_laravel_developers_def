<?php

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
    $task1= new stdClass();
    $task1->id=1;
    $task1->title="Fesd";
    $task1->description="sdfdafd";
    $task1->completed=0;
    $task2= new stdClass();
    $task2->id=1;
    $task2->title="Fesd";
    $task2->description="sdfdafd";
    $task2->completed=0;
    $tasks = [
        $task1,
        $task2
    ];
    return view('tasks',['tasks' => $tasks]);
});
Route::get('/tasks', function () {
    return view('tasks',['tasks' => $tasks]);
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
