<?php
namespace App\Http\Controllers;

// use App\UsersModel;
use App\GetInterests;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class UsersController extends Controller
{
   
  //display interests
  public function getAllUsers() {
   
    $users = User::get()->toJson(JSON_PRETTY_PRINT);
    return response($users, 200);
    // dd($users);
    
    }

    public function getTasks($id)
    {
        // $task = \App\Task::where('task_id', $id)->get();
        // dd($task);
        $user = User::where('user_id', $id)->first();
        // dd($user);
        $userTasks = $user->tasks;
        dd($userTasks);
    }
}
