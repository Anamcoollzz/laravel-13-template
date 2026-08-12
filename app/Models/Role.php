<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Spatie\Permission\Models\Role as SpatieRole;

#[Fillable([
    'name',
    'guard_name',
    'is_locked',
    'created_by_id',
    'last_updated_by_id',
])]
class Role extends SpatieRole
{
    use HasFactory;

    /**
     * Get the user that created the role.
     *
     * @return BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by_id');
    }

    /**
     * Get the user that last updated the role.
     *
     * @return BelongsTo
     */
    public function lastUpdatedBy()
    {
        return $this->belongsTo(User::class, 'last_updated_by_id');
    }
}
