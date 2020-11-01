<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Idioma;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class IdiomaController extends Controller
{

    public function newIdioma()
    {
        return view('newCurriculo');
    }

    public function storeIdioma(Request $request)
    {
        $idioma = new Idioma();
        $idioma->language = $request->language;
        $idioma->lvl = $request->lvl;
        
        $idioma->save();
        return redirect()->route('');
    }

    public function editIdioma(Idioma $idioma)
    {
        return view('editCurriculo' , ['idioma' => $idioma]);
    }
    public function edit(Idioma $idioma, Request $request)
    {
        if(filter_var($request->language))
        {
            $idioma->language = $request->language;
        }
        if(!empty($request->lvl))
        {
            $idioma->lvl = $request->lvl;
        }
        $idioma->save();
        return redirect()->route('');
    }
}
