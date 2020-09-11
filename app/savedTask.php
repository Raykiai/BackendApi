<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class savedTask extends Model
{
    protected $table='interests';
    protected $fillable=[
        'task_id',
        'user_id',
       
    ];
}
