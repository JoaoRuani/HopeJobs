<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Deficiencia extends Model
{
    protected $table = 'deficiencias';
    
    public function setDeficiencyAttribute($value)
    {
        $this->attributes['deficiency'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
