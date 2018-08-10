<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ApplicationResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'full_name' => $this->full_name,
            'email' => $this->email,
            'specialization' => SpecializationResource::make($this->whenLoaded('specialization')),
            'degree' => DegreeResource::make($this->whenLoaded('degree')),
            'description' => $this->description,
            'reception_at' => $this->reception_at->toDateTimeString(),
            'is_paid' => $this->is_paid,
        ];
    }
}
