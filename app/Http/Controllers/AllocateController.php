<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Task;

class AllocateController extends Controller
{
    public function index($id)
    {
        $tasks = Task::select('id', 'name', 'description')->get();

        $dev = User::where('role_id', 3)->select('id', 'name')->first();

        return view('allocate')->with(['dev'=>$dev, 'tasks'=>$tasks]);

    }
}
