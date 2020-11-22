<?php

namespace App\Http\Livewire\Curriculo;

use App\Enums\Curriculo\TiposDeficiencia;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Deficiencias extends Component
{
    public $deficienciasSelecionadas = [];
    public string $possuiDeficiencia = 'false';

    public function mount()
    {
        $user = Auth::user();
        if(!empty($curriculo = $user->curriculo) and ($deficiencias = $curriculo->deficiencias)->count())
        {
            $this->possuiDeficiencia = 'true';
            foreach ($deficiencias as $deficiencia)
            {
                $this->deficienciasSelecionadas[] = $deficiencia->tipo;
            }
        }
    }
    public function render()
    {
        return view('livewire.curriculo.deficiencias');
    }
    public function updatedDeficienciasSelecionadas()
    {
        /**
         * @var Curriculo $curriculo
         */
        $curriculo = Auth::user()->curriculo;
        if(!empty($curriculo))
        {
            $curriculo->deficiencias()->delete();
            foreach ($this->deficienciasSelecionadas as $deficiencia)
            {
                $curriculo->deficiencias()->create(['tipo' => $deficiencia]);
            }
        }
    }
    public function updatedPossuiDeficiencia()
    {
        if($this->possuiDeficiencia == 'false')
        {
            /**
             * @var Curriculo $curriculo
             */
            $curriculo = Auth::user()->curriculo;
            if(!empty($curriculo))
            {
                $curriculo->deficiencias()->delete();
                $this->deficiencias = [];
            }
        }

    }
}
