<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'user_id',
    'faculty_id',
    'created_by_id',
    'last_updated_by_id',
])]
class FacultyLeader extends Model
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
     * Get the faculty that owns the FacultyLeader.
     */
    public function faculty(): BelongsTo
    {
        return $this->belongsTo(Faculty::class);
    }
}
