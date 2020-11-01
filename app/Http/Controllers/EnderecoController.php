<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Endereco;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class EnderecoController extends Controller
{
    public function newEndereco()
    {
        return view('newCurriculo');
    }

    public function storeEndereco(Request $request)
    {
        $endereco = new Endereco();
        $endereco->cep = $request->cep;
        $endereco->rua = $request->rua;
        $endereco->number = $request->number;
        $endereco->city = $request->city;
        $endereco->states = $request->states;

        $endereco->save();
        return redirect()->route('');
    }

    public function editEndereco(Endereco $endereco)
    {
        return view('editCurriculo' , ['endereco' => $endereco]);
    }
    public function edit(Endereco $endereco, Request $request)
    {
        if(filter_var($request->cep))
        {
            $endereco->cep = $request->cep;
        }
        if(filter_var($request->rua))
        {
            $endereco->rua = $request->rua;
        }
        if(filter_var($request->number))
        {
            $endereco->number = $request->number;
        }
        if(filter_var($request->city))
        {
            $endereco->city = $request->city;
        }
        if(filter_var($request->states))
        {
            $endereco->states = $request->states;
        }
        $endereco->save();
        return redirect()->route('');
    }
}
