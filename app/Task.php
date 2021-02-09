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
        return $this->belongsToMany('App\User')->withTimestamps();
    }
}
