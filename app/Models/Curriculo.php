<?php

namespace App\Models;

use App\Enums\Curriculo\CurriculoStatus;
use App\Enums\Curriculo\EstadosCivis;
use App\Enums\Curriculo\Generos;
use BenSampo\Enum\Traits\CastsEnums;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Curriculo extends Model
{
    use CastsEnums;
    protected $guarded = ['id'];

    protected $casts = [
        'status' => CurriculoStatus::class,
        'estado_civil' => EstadosCivis::class,
        'genero' => Generos::class
    ];
    /**
     * Relacionamento com o endereço
     * @return HasOne
     */
    public function endereco()
    {
        return $this->hasOne(Endereco::class);
    }
    /**
     * Relacionamento com a experiência
     * @return HasMany
     */
    public function experiencias()
    {
        return $this->hasMany(Experiencia::class);
    }
    /**
     * Relacionamento com a formação
     * @return HasMany
     */
    public function formacoes()
    {
        return $this->hasMany(Formacao::class);
    }
    /**
     * Relaciomanto com o idioma
     * @return HasMany
     */
    public function idiomas()
    {
        return $this->hasMany(Idioma::class);
    }
    /**
     * Relacionamento com o telefone
     * @return HasOne
     */
    public function telefone()
    {
        return $this->hasOne(Telefone::class);
    }
    /**
     * Relacionamento com deficiencias
     * @return HasMany
     */
    public function deficiencias()
    {
        return $this->hasMany(Deficiencia::class);
    }
    /**
     * Relacionamento inverso com o usuário
     * @return BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Nome completo nome+sobrenome
     * @return string
     */
    public function nomeCompleto()
    {
        return "{$this->nome} {$this->sobrenome}";
    }

    public function foto()
    {
        return $this->morphOne(Imagem::class, 'imageable');
    }

}
