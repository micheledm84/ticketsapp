<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Resources\TaskResource;

use App\Task;
use App\TaskUser;
use App\User;

class TaskController extends Controller
{
    public function get_delayed_tasks() {

        $tasks = Task::with(['users', 'commits'])
            ->select('id', 'name', 'description', 'deadline', 'closed_at', 'status_id', 'project_id', 'created_at')
            ->whereRaw('closed_at > deadline')
            ->get();

        $tasks = TaskResource::collection($tasks);

        $tasks_length = $tasks->count();

        if ($tasks_length > 0) {
            return $tasks;
        } else {
            $message = "No task is in delay";
            return response($message);
        }
        
    }
}
