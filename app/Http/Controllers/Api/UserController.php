<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\User;

use Validator;

use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function store_dev(Request $request) {

        $validator = Validator::make($request->all(), [
            'name' => 'required|min:8|max:40',
            'role_id' => [
                'required',
                'numeric',
                Rule::in(['3']),
            ],
            'team_id' => 'required|numeric|exists:teams,id',
            'badge_id' => 'required|exists:badges,id|unique:users,badge_id|numeric'
        ]);
        
        if ($validator->fails()) {
            return response($validator->errors());
        }

        $name = $request->name;
        $role_id = $request->role_id;
        $team_id = $request->team_id;
        $badge_id = $request->badge_id;

        $dev = new User();
        $dev->name = $name;
        $dev->role_id = $role_id;
        $dev->team_id = $team_id;
        $dev->badge_id = $badge_id;
        $dev->save();

        $message = "Dev " . $name . " has been created";

        return response($message);
    }
}
