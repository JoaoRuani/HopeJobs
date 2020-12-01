<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    protected $guarded = ['id', 'imageable_id', 'imageable_type'];
    public function imageable()
    {
        return $this->morphTo();
    }
}
