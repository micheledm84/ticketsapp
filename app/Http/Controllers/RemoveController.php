<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TaskUser;
use App\User;

use App\Http\Resources\TaskUserResource;

class RemoveController extends Controller
{
    public function index($id)
    {
        $tasks_user = TaskUser::with(['user', 'task'])->get();

        $tasks_user = TaskUser::where('user_id', $id)->get();

        $tasks_user = TaskUserResource::collection($tasks_user);

        $dev = User::where('id', $id)->pluck('name')->first();

        return view('remove')->with(['tasks_user' => json_encode($tasks_user), 'dev' =>  $dev]);

    }
}
