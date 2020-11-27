<?php

namespace App\Http\Livewire\Curriculo;

use App\Enums\Curriculo\NivelIdioma;
use App\Models\Curriculo;
use App\Models\Idioma;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class Idiomas extends Component
{
    public Collection $idiomas;

    public function rules()
    {
        return [
            'idiomas.*.nivel' => ['required', Rule::in(NivelIdioma::getValues())],
            'idiomas.*.idioma' => ['required'],
        ];
    }

    public function updated()
    {
        $this->refazerIdiomas();
        $this->validate();
        /**
         * @var Curriculo $curriculo
         */
        $curriculo = Auth::user()->curriculo;
        if(!empty($curriculo)) {
            $curriculo->idiomas()->delete();
            $curriculo->formacoes()->saveMany($this->idiomas);
        }
        $this->refazerIdiomas();
    }

    public function mount()
    {
        $user = Auth::user();
        $this->idiomas = new Collection();
        if(!empty($curriculo = $user->curriculo) and ($idiomas = $curriculo->idiomas)->count() > 0)
        {
            $this->idiomas = new Collection($this->idiomas->toArray());
        }
        else
        {
            $this->adicionarIdioma();
        }
    }


    public function render()
    {
        return view('livewire.curriculo.idiomas');
    }

    public function adicionarIdioma()
    {
        $idioma = [
            'nivel' => NivelIdioma::Fluente,
            'idioma' => 'Português'
        ];
        $this->idiomas->add($idioma);
        $this->refazerIdiomas();
    }

    private function refazerIdiomas()
    {
        $aux = $this->idiomas->toArray();
        $this->idiomas = new Collection();

        foreach ($aux as $auxForm)
        {
            $idioma = new Idioma($auxForm);
            $this->idiomas->add($idioma);
        }
    }

    public function removerIdioma()
    {
        $this->idiomas->pop();
        $this->updated();
    }
}
