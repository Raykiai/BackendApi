<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table='tasks';
    protected $fillable = ['title', 'category','payment','location','workHours','description','vacancies'];


 /**
     * Get the comments for the blog post.
     */
    public function savedInterests()
    {
        return $this->hasMany('App\GetInterests');
    }
  
   public function users()
   {
       return $this->belongsToMany(User::class, 'task_user', 'task_id', 'user_id');
   }
}
