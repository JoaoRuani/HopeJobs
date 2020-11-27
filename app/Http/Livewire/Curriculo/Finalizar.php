<?php

namespace App\Http\Livewire\Curriculo;

use App\Enums\Curriculo\CurriculoStatus;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Finalizar extends Component
{

    public bool $erro = false;
    public function render()
    {
        return view('livewire.curriculo.finalizar');
    }

    public function finalizar()
    {
        /**
         * @var Curriculo $curriculo
         */
        $curriculo = Auth::user()->curriculo;
        if(!empty($curriculo) && $curriculo->endereco()->exists()) {
            $curriculo->status = CurriculoStatus::Completo;
            $curriculo->save();
            $this->redirect(route('curriculo.index'));
        }
        else {
            $this->erro = true;
        }
    }

}
