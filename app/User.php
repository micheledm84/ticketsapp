<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;

    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /*public function tasks()
    {
        return $this->hasManyThrough('App\Task', 'App\Project');
    }*/

    /*public function tasks()
    {
        return $this->hasMany('App\Task');
    }*/

    public function tasks()
    {
        return $this->belongsToMany('App\Task')->withTimestamps();
    }

    public function projects()
    {
        return $this->hasMany('App\Project');
    }

    public function commits()
    {
        return $this->hasMany('App\Commit');
    }

    public function team()
    {
        return $this->belongsTo('App\Team');
    }

    public function role()
    {
        return $this->belongsTo('App\Role');
    }

    public function badge()
    {
        return $this->belongsTo('App\Badge');
    }
}
