<?php

namespace App\Http\Livewire\Curriculo;

use App\Models\Curriculo;
use Carbon\Carbon;
use App\Models\Experiencia;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Experiencias extends Component
{
    public Collection $experiencias;

    public bool $naoPossuiExperiencia = false;

    public function rules()
    {
        return [
            'naoPossuiExperiencia' => ['required'],
            'experiencias.*.descricao' => ['required'],
            'experiencias.*.cargo' => ['required'],
            'experiencias.*.empresa' => ['required'],
            'experiencias.*.nivel' => ['required'],
            'experiencias.*.area' => ['nullable'],
            'experiencias.*.inicio' => ['required', 'date'],
            'experiencias.*.saida' => ['nullable', 'date'],
            'experiencias.*.cargo_atual' => ['nullable', 'bool'],
            'experiencias.*.ehAtual' => ['bool']
        ];
    }

    public function mount()
    {
        $user = Auth::user();
        $this->experiencias = new Collection();
        if(!empty($curriculo = $user->curriculo) and ($experiencias = $curriculo->experiencias)->count() > 0)
        {
            $this->experiencias = new Collection();

            foreach ($experiencias as $experiencia)
            {
                $experiencia->inicio = Carbon::createFromFormat('Y-m-d', $experiencia->inicio)->format('Y-m');

                if(isset($experiencia->saida))
                {
                    $experiencia->saida = Carbon::createFromFormat('Y-m-d', $experiencia->saida)->format('Y-m');
                }
                $this->experiencias->add($experiencia);
            }
        }
        else
        {
            $this->adicionarExperiencia();
        }
    }

    public function updated()
    {
        $this->refazerExperiencias();
        $this->validate();
        /**
         * @var Curriculo $curriculo
         */
        $curriculo = Auth::user()->curriculo;
        if(!empty($curriculo)) {
            $curriculo->experiencias()->delete();
            foreach ($this->experiencias as $experiencia)
            {
                $experiencia->inicio = Carbon::createFromFormat('Y-m', $experiencia->inicio);

                if(isset($experiencia->saida))
                {
                    $experiencia->saida = Carbon::createFromFormat('Y-m', $experiencia->saida);
                }
                $curriculo->experiencias()->save($experiencia);
            }
        }
        $this->refazerExperiencias();

    }
    public function adicionarExperiencia()
    {
        $experiencia = [
            'nivel' => 'assistente',
            'area' => 'administrativo',
            'ehAtual' => false
        ];
        $this->experiencias->add($experiencia);
        $this->refazerExperiencias();
    }
    public function refazerExperiencias()
    {
        $aux = $this->experiencias->toArray();
        $this->experiencias = new Collection();

        foreach ($aux as $auxForm)
        {
            $experiencia = new Experiencia($auxForm);
            if(is_a($experiencia->inicio, Carbon::class))
            {
                $experiencia->inicio  = $experiencia->inicio->format('Y-m');
            }
            if(is_a($experiencia->saida, Carbon::class))
            {
                $experiencia->saida  = $experiencia->saida->format('Y-m');
            }
            $this->experiencias->add($experiencia);
        }
    }
    public function removerExperiencia()
    {
        $this->experiencias->pop();
        $this->updated();
    }


    public function render()
    {
        return view('livewire.curriculo.experiencias');
    }
}
