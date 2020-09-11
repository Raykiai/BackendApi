<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class TasksController extends Controller
{

public function getAllTasks() {
    // logic to get all tasks goes here
$tasks = Task::get()->toJson(JSON_PRETTY_PRINT);
return response($tasks, 200);
// dd($tasks);
}


  }
    
    

