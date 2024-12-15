<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EventResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'name' => $this->name,
            'description' => $this->description,
            'imageURL' => $this->imageURL,
            'isActive' => $this->active
        ];
    }
}

//$table->id();
//$table->string('name', 50);
//$table->text('description')->nullable();
//$table->text('imageURL')->nullable();
//$table->date('start_date');
//$table->date('end_date');
//$table->boolean('active');
//$table->timestamps();
