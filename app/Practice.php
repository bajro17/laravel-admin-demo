<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    protected $guarded = [];
    public function employees() {
        return $this->hasOne(Employee::class);
    }

    public function fields() {
        return $this->belongsToMany(Field::class, 'field_practice');
    }
}
