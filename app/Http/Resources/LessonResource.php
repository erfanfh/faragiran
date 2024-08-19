<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use phpDocumentor\Reflection\Types\Parent_;

class LessonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'data' => [
                'id' => $this->id,
                'name' => $this->name,
                'price' => $this->price->amount,
                "course" => [
                    'id' => $this->course->id,
                    'name' => $this->course->name,
                    'price' => $this->course->price->amount,
                ]
            ]
        ];
    }
}
