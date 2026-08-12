<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
class LogRequest extends Model
{
    use HasFactory;

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'roles' => 'array',
        'request_data' => 'array',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
