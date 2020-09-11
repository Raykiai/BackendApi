<?php

namespace App\Http\Controllers;
use App\displayInterests;
use App\GetInterests;
use App\Users;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class displayInterestsController extends Controller
{


  //display interests
  public function getAllInterests() {
   
$interests = GetInterests::get()->toJson(JSON_PRETTY_PRINT);
return response($interests, 200);

}
}