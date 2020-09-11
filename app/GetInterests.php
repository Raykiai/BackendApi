<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class GetInterests extends Model
{
    protected $table='task_user';
    protected $fillable = ['user_id', 'task_id'];


    
    /**
     * The roles that belong to the task.
     */
    public function users()
    {
        return $this->belongsToMany('App\Users');
    }

}
