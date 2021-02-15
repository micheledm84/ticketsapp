<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\User;
use App\TaskUser;

use App\Http\Resources\TaskUserResource;

class InProgressController extends Controller
{
    public function index($id)
    {
        $tasks = TaskUser::join('tasks', 'task_user.task_id', 'tasks.id')
            ->where('task_user.user_id', $id)
            ->where('tasks.status_id', 2)
            ->get();

        $tasks = TaskUserResource::collection($tasks);

        $dev = User::where('id', $id)->pluck('name')->first();

        return view('in_progress')->with(['tasks'=>json_encode($tasks), 'dev' => $dev]);

    }
}
