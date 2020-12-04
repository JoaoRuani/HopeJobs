<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Candidatura extends Model
{
    public $guarded = ['id'];

    /**
     * Representa o relacionamente inverso com o usuário
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }
}
