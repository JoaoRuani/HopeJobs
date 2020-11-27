<?php

namespace App\Http\Controllers;

use App\Enums\Curriculo\CurriculoStatus;
use Illuminate\Http\Request;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Auth;

class CurriculoController extends Controller
{
    public function store(Request $request)
    {
        Curriculo::create($request->all());
        return redirect()->route('');
    }

    public function index()
    {
        $curriculo = Auth::user()->curriculo;
        if(empty($curriculo) || $curriculo->status->is(CurriculoStatus::Construcao))
        {
            return redirect()->route('curriculo.create');
        }
        return view('curriculo.index', ['curriculo' => $curriculo, 'user' => Auth::user()]);
    }
    public function create()
    {
        return view('curriculo.create');
    }
}

