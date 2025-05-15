<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class CategoryResource extends JsonResource
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
            'name' => strtoupper($this->name),
            'permalink' => $this->slug,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'updated_at' => $this->updated_at,
        ];
    }

}
