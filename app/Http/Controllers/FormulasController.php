<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormulasController extends Controller
{
    public function show($car)
    {
        $formula = Formula::where('official_name',$car )->first();
        $formulas = Formula::latest()->get();
        return view('formula',compact('formula','formulas'));
    }
}
