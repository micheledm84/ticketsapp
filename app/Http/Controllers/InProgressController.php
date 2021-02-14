<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Task;
use App\User;

use App\Http\Resources\TaskResource;

class InProgressController extends Controller
{
    public function index($id)
    {

        $user_tasks = User::find($id)->tasks->where('status_id', 2);

        $tasks = TaskResource::collection($user_tasks);

        $dev = User::where('id', $id)->pluck('name')->first();

        return view('in_progress')->with(['tasks'=>json_encode($tasks), 'dev' => $dev]);

    }
}
