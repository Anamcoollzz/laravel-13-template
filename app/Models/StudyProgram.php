<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'name',
    'faculty_id',
    'created_by_id',
    'last_updated_by_id',
])]
class StudyProgram extends Model
{
    use HasFactory, UserTrait;

    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'checkbox' => 'array',
            'checkbox2' => 'array',
            'select2_multiple' => 'array',
        ];
    }

    /**
     * Get the faculty that owns the StudyProgram.
     */
    /**
     * Get the faculty that owns the StudyProgram.
     */
    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }

    /**
     * Get the students associated with the StudyProgram.
     */
    /**
     * Get the students associated with the StudyProgram.
     */
    public function students(): HasMany
    {
        return $this->hasMany(Student::class);
    }
}
