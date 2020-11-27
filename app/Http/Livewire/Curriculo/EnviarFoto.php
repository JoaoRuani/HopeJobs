<?php

namespace App\Http\Livewire\Curriculo;

use App\Models\Curriculo;
use App\Models\Imagem;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class EnviarFoto extends Component
{
    use WithFileUploads;
    public Imagem $foto;
    public $tempImage;
    public function render()
    {
        return view('livewire.curriculo.enviar-foto');
    }

    public function mount()
    {
        $curriculo = Auth::user()->curriculo;
        if(isset($curriculo) && $curriculo->foto()->exists())
        {
            $this->foto = $curriculo->foto;
        }
    }
    public function save()
    {
        $this->validate([
            'tempImage' => ['image', 'max:2048']
        ]);
        /**
         * @var Curriculo $curriculo
         */
        $curriculo = Auth::user()->curriculo;
        if(isset($curriculo))
        {
            if ($curriculo->foto()->exists())
            {
                $fileToDelete = $curriculo->foto->url;
                Storage::delete($fileToDelete);
                $curriculo->foto()->delete();
            }
            $curriculo->foto()->create([
                'url' => $this->tempImage->store('public/curriculo')
            ]);
        }
    }

}
