<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Database\Eloquent\SoftDeletes;

class TaskUser extends Model
{
    protected $table = 'task_user';

    use SoftDeletes;
}
