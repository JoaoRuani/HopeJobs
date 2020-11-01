<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Idioma extends Model
{
    protected $table = 'idiomas';
    
    public function setlanguageAttribute($value)
    {
        $this->attributes['language'] = $value;
        $this->attributes['slug'] = Str::slug($value);
    }
}
