<?php

namespace App\Http\Resources;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CourseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return with($this->resource, fn(Course $resource) => [
            'id' => $resource->id,
            'name' => $resource->name,
            'price' => new PriceResource($resource->price),
        ]);
    }
}
