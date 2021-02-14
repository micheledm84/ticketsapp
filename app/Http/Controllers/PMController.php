<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Http\Resources\UserResource;

class PMController extends Controller
{
    public function index($id)
    {

        $user = new UserResource(User::find($id));

        return view('pm')->with(['user'=>json_encode($user)]);

    }
}
