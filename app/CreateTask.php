<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CreateTask extends Model
{
    //

    //public $timestamps=false;
    protected $table='tasks';
    protected $fillable=[
        'id',
        'title',
        'payment',
        'location',
        'workHours',
        'description',
        'vacancies',
        'contact',
        'email'
        
    ];
}

