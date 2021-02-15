<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class MainController extends Controller
{
    public function index()
    {
        $devs = User::where('role_id', 3)->select('id', 'name')->orderBy('name')->get();

        return view('main')->with(['devs'=>json_encode($devs)]);

    }
}
