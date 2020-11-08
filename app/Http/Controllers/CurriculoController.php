<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class CurriculoController extends Controller
{
    public function store(Request $request)
    {
        Curriculo::create($request->all());
        return redirect()->route('');
    }

    public function create()
    {
        return view('curriculo.form_curriculo');
    }
}

