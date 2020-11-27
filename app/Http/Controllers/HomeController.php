<?php

namespace App\Http\Controllers;

use App\Enums\Curriculo\CurriculoStatus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $curriculo = Auth::user()->curriculo;
        if(isset($curriculo))
        {
            return redirect()->route('curriculo.index');
        }
        return view('home');
    }
}
