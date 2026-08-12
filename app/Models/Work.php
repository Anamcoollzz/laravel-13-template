<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'job_name',
    'department',
    'created_by_id',
    'last_updated_by_id',
])]
class Work extends Model
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
}
