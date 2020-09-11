<?php

namespace App\Http\Controllers;
use App\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class savedTaskController extends Controller
{
  
  //save task which user is interested in
  public function jobSave(Request $request){
    $interests= savedTask::create($request->all());
    return response()->json($interests, 200);
}

    
    
}
