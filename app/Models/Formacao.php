<?php

namespace App\Models;

use App\Enums\Curriculo\StatusFormacao;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Formacao extends Model
{
    protected $table = 'formacoes';
    protected $guarded = ['id', 'curriculo_id'];

    protected $casts = [
        'status' => StatusFormacao::class
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
