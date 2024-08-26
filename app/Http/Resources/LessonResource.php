<?php

namespace App\Http\Resources;

use App\Models\Lesson;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class LessonResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return with($this->resource, fn(Lesson $resource) => [
            'id' => $resource->id,
            'name' => $resource->name,
            'price' => new PriceResource($resource->price),
            "course" => [
                'id' => $resource->course->id,
                'name' => $resource->course->name,
                'price' => $resource->course->price->amount,
            ]
        ]);
    }
}
