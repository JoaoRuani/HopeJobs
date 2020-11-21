<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
    public function imageable()
    {
        return $this->morphTo();
    }
}
