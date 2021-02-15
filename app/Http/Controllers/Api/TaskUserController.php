<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\TaskUser;
use App\User;

use App\Rules\AlreadyAssignedTask;

use App\Http\Resources\TaskUserResource;

use Validator;

class TaskUserController extends Controller
{
    public function index(Request $request) {

        $validator = Validator::make($request->all(), [
            'id' => 'required|exists:task_user,id'
        ]);
        
        if ($validator->fails()) {
            return response($validator->errors()); 
        } 

        $task_user_id = $request->id;

        $user_id = TaskUser::where('id', $task_user_id)->pluck('user_id')->first();

        $tasks_user = TaskUser::where('user_id', $user_id)->get();

        $tasks_user = TaskUserResource::collection($tasks_user);

        $message = "The resources have been got";

        return response($message);
    }

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
        $task_user->save();

        $message = "The task has been assigned";

        return response($message);
    }

    public function remove(Request $request) {

        $validator = Validator::make($request->all(), [
            'task_id' => 'required|exists:tasks,id',
            'user_id' => 'required|exists:users,id'
        ]);
        
        if ($validator->fails()) {
            return response($validator->errors()); 
        } 

        $task_id = $request->task_id;
        $user_id = $request->user_id;

        TaskUser::where('task_id', $task_id)->where('user_id', $user_id)->delete();

        $message = "The resource has been deleted";

        return response($message);
    }
}
