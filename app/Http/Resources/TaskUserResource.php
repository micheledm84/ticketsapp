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
            'task_id' => $this->task_id,
            'user_id' => $this->user_id,
            'task_name' => Task::where('id', $this->task_id)->pluck('name')->first(),
            'user_name' => User::where('id', $this->user_id)->pluck('name')->first(),
        ];
    }
}
