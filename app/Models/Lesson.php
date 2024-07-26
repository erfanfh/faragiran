<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course_id',
        'price'
    ];
    public function Courses ()
    {
        return $this->belongsTo(Course::class);
    }
}
