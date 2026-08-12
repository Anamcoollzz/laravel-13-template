<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'name',
    'nim',
    'study_program_id',
    'user_id',
    'photo',
    'class_year',
    'student_status',
    'graduation_year',
    'work_id',
    // wajib
    'created_by_id',
    'last_updated_by_id',
])]
class Student extends Model
{
    use HasFactory, UserTrait;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Get the study program that the Student belongs to.
     *
     * @return BelongsTo
     */
    public function studyProgram()
    {
        return $this->belongsTo(StudyProgram::class);
    }

    /**
     * Get the work that the Student belongs to.
     *
     * @return BelongsTo
     */
    public function work()
    {
        return $this->belongsTo(Work::class);
    }
}
