<?php

namespace App\Http\Controllers;
use App\CreateTask;
use Illuminate\Http\Request;

class CreateTaskController extends Controller
{
    //

    public function jobSave(Request $request){
        $job=CreateTask::create($request->all());
        return response()->json($job,201);
    
    }
    
}

