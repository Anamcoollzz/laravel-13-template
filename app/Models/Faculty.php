<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

#[Fillable([
    'name',
    'created_by_id',
    'last_updated_by_id',
])]
class Faculty extends Model
{
    use HasFactory, UserTrait;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'checkbox' => 'array',
        'checkbox2' => 'array',
        'select2_multiple' => 'array',
    ];

    /**
     * Get the programs associated with the Faculty.
     *
     * @return HasMany
     */
    public function programs()
    {
        return $this->hasMany(StudyProgram::class);
    }
}
