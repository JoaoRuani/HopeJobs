<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curriculo;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class CurriculoController extends Controller
{
    public function listAllCurriculos()
    {
        $curriculos = Curriculo::all();

        return view('listAllcurriculos',['curriculos' => $curriculos]);
    }

    public function listCurriculos(Curriculo $curriculo)
    {
        return view('listCurriculo' , ['curriculo'=>$curriculo]);
    }

    public function newCurriculo()
    {
        return view('newCurriculo');
    }
    public function storeCurriculo(Request $request)
    {
        $curriculo = new Curriculo();
        $curriculo->photo = $request->photo;
        $curriculo->name = $request->name;
        $curriculo->status = $request->status;
        $curriculo->gender = $request->gender;
        $curriculo->naturalness = $request->naturalness;
        $curriculo->save();

        return redirect()->route('');
    }

    public function editCurriculo(Curriculo $curriculo)
    {
        return view('editCurriculo' , ['curriculo' => $curriculo]);
    }
    public function edit(Curriculo $curriculo, Request $request)
    {
        if(filter_var($request->photo))
        {
            $curriculo->photo = $request->photo;
        }
        if(filter_var($request->name))
        {
            $curriculo->name = $request->name;
        }
        if(filter_var($request->status))
        {
            $curriculo->status = $request->status;
        }
        if(filter_var($request->gender))
        {
            $curriculo->gender = $request->gender;
        }
        if(filter_var($request->naturalness))
        {
            $curriculo->naturalness = $request->naturalness;
        }
        $curriculo->save();
        return redirect()->route('');
    }
}

