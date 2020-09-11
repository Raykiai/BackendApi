<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class displayInterests extends Model
{
    protected $table='interests';
    protected $fillable = ['user_id', 'task_id'];


}
