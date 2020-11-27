<?php

namespace App\Models;

use App\Enums\Curriculo\NivelIdioma;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Idioma extends Model
{
    protected $guarded = ['id', 'curriculo_id'];

    protected $casts = [
        'nivel' => NivelIdioma::class
    ];

    /**
     * Relacionamento inverso com o currículo
     * @return BelongsTo
     */
    public function curriculo()
    {
        return $this->belongsTo(Curriculo::class);
    }
}
