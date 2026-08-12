<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable([
    'group_name',
])]
class MenuGroup extends Model
{
    use HasFactory;

    /**
     * Default with relationship
     *
     * @var array
     */
    protected $with = [
        'menus',
    ];

    public function menus()
    {
        return $this->hasMany(Menu::class, 'menu_group_id')->whereNull('parent_menu_id');
    }
}
