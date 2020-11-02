<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Telefone extends Model
{
    protected $guarded = ['id', 'curriculo_id'];
    /**
     * Relacionamento inverso com o currículo
     * @return BelongsTo
     */
    public function curriculo()
    {
        return $this->belongsTo(Curriculo::class);
    }
}
