<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Task;
use App\TaskUser;

class AllocateController extends Controller
{
    public function index($id)
    {

        $userRelatedTasksQuery = TaskUser::select('task_id')
            ->where('user_id', $id);

        $tasks = Task::select('tasks.id as id', 'tasks.name as name', 'tasks.description as description')
            ->join('task_user', 'tasks.id', '=', 'task_user.task_id')
            ->where('tasks.status_id', '!=', 3)
            ->whereNotIn('task_user.task_id', $userRelatedTasksQuery)
            ->distinct()
            ->get();

        $dev = User::where('role_id', 3)->select('id', 'name')->first();

        $dev = User::find($id);

        return view('allocate')->with(['dev'=>$dev, 'tasks'=>$tasks]);

    }
}
