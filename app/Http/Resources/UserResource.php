<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

use App\User;

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
            'pm_name' => User::where('team_id', $this->team_id)->where('role_id', 2)->pluck('name')->first(),
        ];
    }
}
