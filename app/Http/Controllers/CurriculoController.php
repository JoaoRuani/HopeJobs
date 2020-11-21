<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curriculo;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
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
        if(empty($curriculo))
        {
            return redirect()->route('curriculo.create');
        }
        return view('curriculo.index', ['curriculo' => $curriculo, 'user' => Auth::user()]);
    }
    public function create()
    {
        $curriculo = Auth::user()->curriculo;
        if(!empty($curriculo))
        {
            return redirect()->route('curriculo.index');
        }
        return view('curriculo.create');
    }
}

