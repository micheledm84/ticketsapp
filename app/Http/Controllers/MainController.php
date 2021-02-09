<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class MainController extends Controller
{
    public function index()
    {
        $devs = User::where('role_id', 3)->select('id', 'name')->get();

        return view('main')->with(['devs'=>json_encode($devs)]);

        /*$projects = Project::all();

        $tasks = Task::all();

        $tasks_users = TaskUserResource::collection(TaskUser::all());*/

        //$users = UserResource::collection(User::all()); 

        /*return view('home')->with(['task_user'=>json_encode($tasks_users), 'tasks'=>$tasks, 'projects'=>$projects, 'users'=>json_encode($users)]);*/
    }
}
