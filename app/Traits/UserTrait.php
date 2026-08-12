<?php

namespace App\Traits;

use App\Models\User;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait UserTrait
{
    /**
     * Get the user that created
     *
     * @return BelongsTo
     */
    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by_id')->select(['id', 'name']);
    }

    /**
     * Get the user that updated
     *
     * @return BelongsTo
     */
    public function lastUpdatedBy()
    {
        return $this->belongsTo(User::class, 'last_updated_by_id')->select(['id', 'name']);
    }

    /**
     * Get the user id
     *
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
