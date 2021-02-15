<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\User;
use App\Task;

class TaskUserResource extends JsonResource
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
            'status' => $this->task->status->name, 
            'project' => $this->task->project->name,
            'created_at' => $this->created_at->format('Y-m-d'),  
            'deadline' => $this->deadline,
            'pm' => $this->task->project->user->name,
        ];
    }
}
