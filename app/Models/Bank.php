<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'name',
    'bank_type',
    'created_by_id',
    'last_updated_by_id',
])]
class Bank extends Model
{
    use HasFactory, UserTrait;
}
