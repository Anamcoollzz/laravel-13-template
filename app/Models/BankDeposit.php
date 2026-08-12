<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable([
    'bank_id',
    'per_anum',
    'amount',
    'tax',
    'tax_percentage',
    'estimation',
    'time_period',
    'due_date',
    'status',
    'realization',
    'difference',
    'created_by_id',
    'last_updated_by_id',
])]
class BankDeposit extends Model
{
    use HasFactory, UserTrait;

    /**
     * Get the bank
     *
     * @return BelongsTo
     */
    public function bank()
    {
        return $this->belongsTo(Bank::class, 'bank_id');
    }
}
