<?php

namespace App\Http\Livewire\Curriculo;

use App\Models\Curriculo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class Endereco extends Component
{
    public \App\Models\Endereco $endereco;

    public function render()
    {
        return view('livewire.curriculo.endereco');
    }

    public function rules()
    {
        return [
            'endereco.cep' => ['required', 'regex:/^[0-9]{8}$/'],
            'endereco.logradouro' => ['required', 'min:4', 'max: 100'],
            'endereco.bairro' => ['required'],
            'endereco.numero' => ['required','integer', 'max:100000'],
            'endereco.uf' => ['required', 'string', 'min:2', 'max:2'],
            'endereco.cidade' => ['required', 'string', 'min:3', 'max: 100'],
            'endereco.complemento' => ['nullable', 'string']
        ];
    }

    public function mount()
    {
        $user = Auth::user();
        if(!empty($curriculo = $user->curriculo) and !empty($endereco = $curriculo->endereco))
        {
            $this->endereco = $endereco;
        }
        else
        {
            $this->endereco = new \App\Models\Endereco();
        }
    }
    public function hydrated($propertyName)
    {
        $this->validateOnly($propertyName);
    }
    public function updated()
    {
        $validator = Validator::make(['endereco' => $this->endereco->attributesToArray()], $this->rules());
        if (!$validator->fails())
        {
            /**
             * @var Curriculo $curriculo
             */
             $curriculo = Auth::user()->curriculo;
            if(!empty($curriculo))
            {
                $curriculo->endereco()->save($this->endereco);
            }
        }
    }
    public function preencherFormulario()
    {
        $cep = $this->endereco->cep;
        $response = Http::get('https://viacep.com.br/ws/'.$cep.'/json');
        if($response->successful())
        {
            $enderecoResponse = $response->json();
            $this->endereco->logradouro = $enderecoResponse['logradouro'];
            $this->endereco->bairro = $enderecoResponse['bairro'];
            $this->endereco->cidade = $enderecoResponse['localidade'];
            $this->endereco->uf = $enderecoResponse['uf'];
            if(empty($this->endereco->complemento))
            {
                $this->endereco->complemento =  $enderecoResponse['complemento'];
            }
        }
        $this->clearValidation();
        $this->updated();
    }

}
