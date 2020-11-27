<?php

namespace App\Http\Livewire\Curriculo;

use App\Models\Imagem;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class EnviarFoto extends Component
{
    use WithFileUploads;
    public $foto;

    public function render()
    {
        return view('livewire.curriculo.enviar-foto');
    }
    public function save()
    {
        $this->validate([
            'foto' => ['image', 'max:2048']
        ]);

    }

}
