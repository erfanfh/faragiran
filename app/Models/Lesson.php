<?php

namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Support\Carbon;

/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property int $course_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Course|null $courses
 * @property-read Price|null $price
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson query()
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereCourseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Lesson whereUpdatedAt($value)
 * @property Course $course
 * @mixin Eloquent
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

    protected function setCourseAttribute(Course $course): void
    {
        $this->course()->associate($course);
    }

    public function setPrice(int $amount): void
    {
        $this->price()->create([
            'amount' => $amount,
        ]);
    }
}