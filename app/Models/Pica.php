<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

#[Fillable([
    // ini bisa dicomment kalau gak dipakai
    'text',
    'email',
    'number',
    'currency',
    'currency_idr',
    'select',
    'select2',
    'select2_multiple',
    'textarea',
    'radio',
    'checkbox',
    'checkbox2',
    'tags',
    'file',
    'image',
    'date',
    'time',
    'color',
    'summernote_simple',
    'summernote',
    'barcode',
    'qr_code',
    'name',
    'phone_number',
    'birthdate',
    'address',
    'avatar',
    'password',
    'tinymce',
    'ckeditor',
    'is_active',

    // ini hasil generate dari create:module command

    'title',
    'notes',
    'function_id',
    'category_id',
    'work_field_id',
    'deadline',
    'kpi_related',
    'assigned_to',
    'created_date',
    'problem_identification',
    'corrective_action',
    'attachment',
    'evidence',
    'status_id',
    'created_by_id',
    'last_updated_by_id',
    'deleted_at',
    'revision_notes',
])]
class Pica extends Model
{
    use HasFactory, UserTrait;

    // softdeletes

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
     * Get the function that owns the Pica.
     */
    public function pocarifunction(): BelongsTo
    {
        return $this->belongsTo(PocariFunction::class, 'function_id');
    }

    /**
     * Get the category that owns the Pica.
     */
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    /**
     * Get the work field that owns the Pica.
     */
    public function workfield(): BelongsTo
    {
        return $this->belongsTo(WorkField::class, 'work_field_id');
    }

    /**
     * Get the status that owns the Pica.
     */
    public function status(): BelongsTo
    {
        return $this->belongsTo(Status::class, 'status_id');
    }

    /**
     * Get the assigned user for the Pica.
     */
    public function assignedto(): BelongsTo
    {
        return $this->belongsTo(User::class, 'assigned_to');
    }
}
