<?php

namespace App\Http\Controllers\Empresarial;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class VagasController extends Controller
{
    public function index()
    {
        $resposta = Http::get(config('hje.hje_url').'api/jobs');
        if($resposta->successful())
        {
            $vagas = $resposta->json()['data'];
            return view('vagas.index', ['vagas' => $vagas]);
        }
        Session::put('error', 'Não foi possível buscar as vagas, tente novamente mais tarde!');
        return redirect()->back();
    }

}
