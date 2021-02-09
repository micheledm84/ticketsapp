<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Project;
use App\Task;
use App\TaskUser;

use App\Http\Resources\UserResource;
use App\Http\Resources\TaskUserResource;

class HomeController extends Controller
{
    public function index()
    {
        $projects = Project::all();

        $tasks = Task::all();

        $tasks_users = TaskUserResource::collection(TaskUser::all());

        $users = UserResource::collection(User::all()); //this is the query

        return view('home')->with(['task_user'=>json_encode($tasks_users), 'tasks'=>$tasks, 'projects'=>$projects, 'users'=>json_encode($users)]);
    }
}
