<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Experiencia extends Model
{
    protected $table = 'experiencias';
    
    public function setOccupationeAttribute($value)
    {
        $this->attributes['occupation'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
