<?php

namespace App\Http\Livewire\Curriculo;

use App\Enums\Curriculo\TiposDeficiencia;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Deficiencias extends Component
{

    public $deficiencias = [];
    public string $possuiDeficiencia = 'false';
    public function rules()
    {
        return [
            'deficiencias.*.tipo' => ['required', Rule::in(TiposDeficiencia::getValues())]
        ];
    }
    public function mount()
    {
        $user = Auth::user();
        if(!empty($curriculo = $user->curriculo) and ($deficiencias = $curriculo->deficiencias)->count())
        {
            $this->possuiDeficiencia = 'true';
            $this->deficiencias = $deficiencias;
        }
    }
    public function render()
    {
        return view('livewire.curriculo.deficiencias');
    }
    public function updatedDeficiencias()
    {
        $this->validate();
        /**
         * @var Curriculo $curriculo
         */
        $curriculo = Auth::user()->curriculo;
        if(!empty($curriculo))
        {
            $curriculo->deficiencias()->createMany($this->deficiencias);
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
            }
        }

    }
}
