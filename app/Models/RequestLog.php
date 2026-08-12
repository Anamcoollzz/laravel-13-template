<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'uri',
    'query_string',
    'method',
    'request_data',
    'ip',
    'user_agent',
    'user_id',
    'roles',
    'browser',
    'platform',
    'device',
    'is_ajax',
])]
#[Table('log_requests')]
class RequestLog extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'roles' => 'array',
        ];
    }

    /**
     * Get the user that owns the request log.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
