<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'role_id' => $this->role_id,
            'badge_id' => $this->badge_id,
            'team_id' => $this->team_id,
            /*'tasks_id' => $this->tasks()->pluck('tasks.id'),
            'tasks_name' => $this->tasks()->pluck('tasks.name'),*/
        ];
    }
}
