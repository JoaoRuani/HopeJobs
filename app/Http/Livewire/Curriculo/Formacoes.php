<?php

namespace App\Http\Livewire\Curriculo;

use App\Enums\Curriculo\NivelIdioma;
use App\Enums\Curriculo\StatusFormacao;
use App\Models\Curriculo;
use App\Models\Formacao;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Formacoes extends Component
{

    public Collection $formacoes;

    public function rules()
    {
        return [
            'formacoes.*.nivel' => ['required'],
            'formacoes.*.status' => ['required', Rule::in(StatusFormacao::getValues())],
            'formacoes.*.instituicao' => ['required'],
            'formacoes.*.curso' => ['required'],
            'formacoes.*.inicio' => ['required', 'date'],
            'formacoes.*.previsao_fim' => ['nullable', 'date'],
            'formacoes.*.campus' => ['nullable', 'string'],
            'formacoes.*.turno' => ['nullable', 'string'],
        ];
    }

    public function mount()
    {
        $user = Auth::user();
        $this->formacoes = new Collection();
        if(!empty($curriculo = $user->curriculo) and ($formacoes = $curriculo->formacoes)->count() > 0)
        {
            $this->formacoes = new Collection();

            foreach ($formacoes as $formacao)
            {
                $formacao->inicio = Carbon::createFromFormat('Y-m-d', $formacao->inicio)->format('Y-m');

                if(isset($formacao->previsao_fim))
                {
                    $formacao->previsao_fim = Carbon::createFromFormat('Y-m-d', $formacao->previsao_fim)->format('Y-m');
                }
                $this->formacoes->add($formacao);
            }
        }
        else
        {
            $this->adicionarFormacao();
        }
    }

    public function updated()
    {
        $this->refazerFormacoes();
        $this->validate();
        /**
         * @var Curriculo $curriculo
         */
        $curriculo = Auth::user()->curriculo;
        if(!empty($curriculo)) {
            $curriculo->formacoes()->delete();
            foreach ($this->formacoes as $formacao)
            {
                $formacao->inicio = Carbon::createFromFormat('Y-m', $formacao->inicio);

                if(isset($formacao->previsao_fim))
                {
                    $formacao->previsao_fim = Carbon::createFromFormat('Y-m', $formacao->previsao_fim);
                }
                $curriculo->formacoes()->save($formacao);
            }
        }
        $this->refazerFormacoes();

    }
    public function adicionarFormacao()
    {
        $formacao = [
            'status' => NivelIdioma::Fluente,
            'idioma' => 'Português',
            'turno' => 'Noturno'
        ];
        $this->formacoes->add($formacao);
        $this->refazerFormacoes();
    }
    public function refazerFormacoes()
    {
        $aux = $this->formacoes->toArray();
        $this->formacoes = new Collection();

        foreach ($aux as $auxForm)
        {
            $formacao = new Formacao($auxForm);
            if(is_a($formacao->inicio, Carbon::class))
            {
                $formacao->inicio  = $formacao->inicio->format('Y-m');
            }
            if(is_a($formacao->previsao_fim, Carbon::class))
            {
                $formacao->previsao_fim  = $formacao->previsao_fim->format('Y-m');
            }
            $this->formacoes->add($formacao);
        }
    }
    public function removerFormacao()
    {
        $this->formacoes->pop();
        $this->updated();
    }


    public function render()
    {
        return view('livewire.curriculo.formacoes');
    }
}
