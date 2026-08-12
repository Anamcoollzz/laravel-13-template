<?php

namespace App\Models;

use App\Traits\UserTrait;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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

    'year_name',
    'created_by_id',
    'last_updated_by_id',
    'deleted_at',
])]
class SchoolYear extends Model
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
}
