<?php

namespace App\Http\Livewire\Curriculo;

use App\Enums\Curriculo\CurriculoStatus;
use App\Enums\Curriculo\EstadosCivis;
use App\Enums\Curriculo\Generos;
use App\Enums\Curriculo\TiposDeficiencia;
use App\Http\Requests\Telefone;
use App\Models\Curriculo;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Livewire\Component;

class DadosBasicos extends Component
{
    public \App\Models\Telefone $telefone;
    public Curriculo $curriculo;
    /**
     * @var User $user
     */
    public $user;
    public function rules()
    {
        return [
            'curriculo.nome' => ['required', 'string', 'min:3'],
            'curriculo.sobrenome' => ['required', 'string', 'min:3'],
            'curriculo.estado_civil' => ['required', Rule::in(EstadosCivis::getValues())],
            'curriculo.genero' => ['required', Rule::in(Generos::getValues())],
            'curriculo.nacionalidade' => ['required', 'string', 'min:3'],
            'curriculo.data_nascimento' => ['required', 'date', 'before_or_equal:'.Carbon::now()->subYears(16)],
            'telefone.ddd' => ['required', 'string', 'max:3', 'min:2'],
            'telefone.numero' => ['required', 'string', 'min:8', 'max: 9'],
        ];
    }
    public function mount()
    {
        $this->user = Auth::user();
        $curriculo = $this->user->curriculo;
        if (!empty($curriculo))
        {
            $this->curriculo = $curriculo;
            if(!empty($curriculo->telefone))
            {
                $this->telefone = $curriculo->telefone;
            }
            else
            {
                $this->telefone = new \App\Models\Telefone();
            }
        }
        else
        {
            $this->curriculo = new Curriculo();
            $this->telefone = new \App\Models\Telefone();
            $this->curriculo->nacionalidade = "Brasil";
            $this->curriculo->genero = Generos::Homem;
            $this->curriculo->estado_civil = EstadosCivis::Solteiro;
        }
    }
    public function updated()
    {
        $this->validate();
        $this->curriculo->status = CurriculoStatus::Construcao;
        $this->user->curriculo()->save($this->curriculo);
        $this->curriculo->telefone()->save($this->telefone);
    }
    public function render()
    {
        return view('livewire.curriculo.dados-basicos');
    }
}
