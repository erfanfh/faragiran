<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $course_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Course|null $courses
 * @property-read \App\Models\Price|null $price
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereUpdatedAt($value)
 * @property \App\Models\Course $course
 * @mixin \Eloquent
 */
class Lesson extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'course',
        'price',
    ];

    protected $hidden = [
        'created_at',
    ];

    public function course(): BelongsTo
    {
        return $this->belongsTo(Course::class);
    }

    public function price(): MorphOne
    {
        return $this->morphOne(Price::class, 'priceable');
    }

    protected function setCourseAttribute(Course $course)
    {
        $this->course()->associate($course);
    }

    public function setPrice(int $amount)
    {
        $this->price()->create([
            'amount' => $amount,
        ]);
    }
}