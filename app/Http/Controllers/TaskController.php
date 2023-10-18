<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    //CRUD:
    //CREATE->
    //LIST SOWH ->
    public function index()
    {
        return view('tasks',['tasks' => Task::all()]);
    }
    //UPDATE ->
    //DELETE ->

}
