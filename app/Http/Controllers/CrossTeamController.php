<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\User;

use App\Http\Resources\ProjectResource;

class CrossTeamController extends Controller
{
    public function index()
    {

        $projects = Project::select('projects.id as id', 'projects.name as name', 'projects.user_id as pm', 'teams.name as team_name')
            ->leftJoin('tasks', 'projects.id', '=', 'tasks.project_id')
            ->join('task_user', 'tasks.id', '=', 'task_user.task_id')
            ->join('users', 'task_user.user_id', '=', 'users.id')
            ->join('teams', 'users.team_id', '=', 'teams.id')
            ->orderBy('projects.id')
            ->distinct()
            ->get();

        foreach ($projects as $key => $value) {
            $projects_length = $projects->where('id', $value['id'])->count();
            if($projects_length === 1) {
                unset($projects[$key]);
            }
        }

        $projects = collect($projects)->groupBy('id')->map(function($data, $id) {
            return [
                'id' => $id,
                'name' => $data[0]['name'],
                'pm' => User::find($data[0]['pm'])->name,
                'team_names' => $data->pluck('team_name')->toArray()
            ];
        })->values()->toArray();

        return view('cross_team')->with(['projects'=>json_encode($projects)]);

    }
}
