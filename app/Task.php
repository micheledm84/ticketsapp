<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class Task extends Model
{
    use SoftDeletes;

    /*public function user()
    {
        return $this->belongsTo('App\User');
    }*/

    public function users()
    {
        return $this->belongsToMany('App\User')->withPivot('user_id', 'task_id')->withTimestamps();
    }

    public function project()
    {
        return $this->belongsTo('App\Project');
    }

    public function status()
    {
        return $this->belongsTo('App\Status');
    }

    public function commits()
    {
        return $this->hasMany('App\Commit');
    }
}
