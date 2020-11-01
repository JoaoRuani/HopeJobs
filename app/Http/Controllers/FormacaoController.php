<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Formacao;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class FormacaoController extends Controller
{

    public function newCFormacao()
    {
        return view('newCurriculo');
    }

    public function storeFormacao(Request $request)
    {
        $formacao = new Formacao();
        $formacao->course = $request->course;
        $formacao->company = $request->company;
        $formacao->level = $request->level;
        $formacao->situation = $request->situation;
        $formacao->start = $request->start;
        $formacao->end = $request->end;
        $formacao->save();
        return redirect()->route('');
    }

    public function editFormacao(Formacao $formacao)
    {
        return view('editCurriculo' , ['formacao' => $formacao]);
    }
    public function edit(Formacao $formacao, Request $request)
    {
        if(filter_var($request->course))
        {
            $formacao->course = $request->course;
        }
        if(filter_var($request->company))
        {
            $formacao->company = $request->company;
        }
        if(filter_var($request->level))
        {
            $formacao->level = $request->level;
        }
        if(filter_var($request->situation))
        {
            $formacao->situation = $request->situation;
        }
        if(filter_var($request->start))
        {
            $formacao->start = $request->start;
        }
        if(filter_var($request->end))
        {
            $formacao->end = $request->end;
        }
        $formacao->save();
        return redirect()->route('');
    }
}
