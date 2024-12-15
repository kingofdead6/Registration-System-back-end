<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TeamResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'teamName' => $this->team_name,
            'teamLeader',
            'accepted' => $this->accepted,

        ];
    }
}

//$table->id();
//$table->string('team_name', 100);
//$table->foreignId('team_leader_id')->constrained('users')->onDelete('cascade');
//$table->foreignId('event_id')->constrained('events')->onDelete('cascade');
//$table->boolean('accepted');
//$table->timestamps();
