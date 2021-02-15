<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\Task;
use App\User;

use App\Http\Resources\UserResource;
use App\Http\Resources\CommitResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'description' => $this->description,
            'deadline' => $this->deadline,
            'closed_at' => $this->deadline,
            'status' => $this->status->name,
            'project' => $this->project->name,
            'devs' => UserResource::collection($this->whenLoaded('users')),
            'commits' => CommitResource::collection($this->whenLoaded('commits')),
            'created_at' => $this->created_at->format('Y-m-d'),
        ];
    }
}
