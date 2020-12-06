<?php

namespace App\Http\Controllers\Empresarial;

use App\Enums\Curriculo\CurriculoStatus;
use App\Http\Controllers\Controller;
use App\Models\Candidatura;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;

class VagasController extends Controller
{
    public function index()
    {
        $resposta = Http::get(config('hje.hje_url').'api/jobs');
        if($resposta->successful())
        {
            $vagas = $resposta->json();
            $user = Auth::user();
            return view('vagas.index', ['vagas' => $vagas, 'candidaturas' => $user ? $user->candidaturas : new Collection()]);
        }
        return redirect()->back()->with('error', 'Não foi possível buscar as vagas, tente novamente mais tarde!');
    }
    public function aplicar(int $vaga_id)
    {
        $user = Auth::user();
        if(!empty($curriculo = $user->curriculo) || $curriculo->status->is(CurriculoStatus::Completo))
        {
            if($user->candidaturas()->where('vaga_id', $vaga_id)->exists())
            {
                return redirect()->back();
            }
            $response = Http::post(config('hje.hje_url').'api/jobs/apply', [
                'job_id' => $vaga_id,
                'applicant_reference' => Auth::id()
            ]);
            if(!$response->successful())
            {
                return redirect()->back()->with('error', 'Não foi possível se candidatar à vaga');
            }
            $user->candidaturas()->create([
                'vaga_id' => $vaga_id
            ]);
            return redirect()->back()->with('success', 'Você se candidatou à vaga!');
        }
        return redirect()->route('curriculo.create');
    }

}
