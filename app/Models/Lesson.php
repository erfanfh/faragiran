<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Price;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
    ];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    public function price()
    {
        return $this->morphOne(Price::class, 'priceable');
    }

}