<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\User;

//use App\Http\Resources\CommitResource;

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
            'role_id' => $this->role->name,
            'badge_id' => $this->badge->code,
            'team_id' => $this->team->name,
            'pm_name' => User::where('team_id', $this->team_id)->where('role_id', 2)->pluck('name')->first(),
        ];
    }
}
