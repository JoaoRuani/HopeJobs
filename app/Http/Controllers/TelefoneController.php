<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Telefone;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class TelefoneController extends Controller
{

    public function newTelefone()
    {
        return view('newCurriculo');
    }

    public function storeTelefone(Request $request)
    {
        $telefone = new Telefone();
        $telefone->photo = $request->photo;

        $telefone->save();
        return redirect()->route('');
    }

    public function editTelefone(Telefone $telefone)
    {
        return view('editCurriculo', ['telefone' => $telefone]);
    }
    public function edit(Telefone $telefone, Request $request)
    {
        if (filter_var($request->photo)) {
            $telefone->photo = $request->photo;
        }

        $telefone->save();
        return redirect()->route('');
    }
}
