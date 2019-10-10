<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    protected $guarded = [];
    public function practice() {
        return $this->belongsToMany(Practice::class, 'field_practice');
    }
}
