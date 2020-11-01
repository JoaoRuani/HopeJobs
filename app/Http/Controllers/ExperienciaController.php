<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class ExperienciaController extends Controller
{


    public function newExperiencia()
    {
        return view('newCurriculo');
    }

    public function storeExperiencia(Request $request)
    {
        $experiencia = new Experiencia();
        $experiencia->description = $request->description;
        $experiencia->occupation = $request->occupation;
        $experiencia->level = $request->level;
        $experiencia->area = $request->area;
        $experiencia->start = $request->start;
        $experiencia->end = $request->end;

        $experiencia->save();
        return redirect()->route('');
    }

    public function editExperiencia(Experiencia $experiencia)
    {
        return view('editCurriculo' , ['experiencia' => $experiencia]);
    }
    public function edit(Experiencia $experiencia, Request $request)
    {
        if(filter_var($request->description))
        {
            $experiencia->description = $request->description;
        }
        if(filter_var($request->occupation))
        {
            $experiencia->occupation = $request->occupation;
        }
        if(filter_var($request->level))
        {
            $experiencia->level = $request->level;
        }
        if(filter_var($request->area))
        {
            $experiencia->area = $request->area;
        }
        if(filter_var($request->start))
        {
            $experiencia->start = $request->start;
        }
        if(filter_var($request->end))
        {
            $experiencia->end = $request->end;
        }

        $experiencia->save();
        return redirect()->route('');
    }
}
