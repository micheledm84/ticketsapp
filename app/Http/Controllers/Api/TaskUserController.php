<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\TaskUser;

use App\Rules\AlreadyAssignedTask;

use Validator;

class TaskUserController extends Controller
{
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'user_id' => ['required', new AlreadyAssignedTask($request->task_id, $request->user_id)],
            'task_id' => 'required'
        ]);
        
        if ($validator->fails()) {
            return response($validator->errors());
        } 

        $task_user = new TaskUser();
        $task_user->task_id = $request->task_id;
        $task_user->user_id = $request->user_id;
        /*$user->email = $request->email;
        $user->password = $request->password;
        $user->permission_id = $request->permissionId;*/
        $task_user->save();
    }
}
