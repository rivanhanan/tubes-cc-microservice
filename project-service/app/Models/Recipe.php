<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'menu_id',
        'ingredients',
        'instructions'
    ];

    public function menu()
    {
        return $this->belongsTo(Menu::class);
    }
}