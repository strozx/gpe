<?php

namespace App\Http\Controllers;

use App\Models\Formula;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamsController extends Controller
{
    public function show()
    {
        return view('team',[
        'formulas' => Formula::latest()->get()
    ]);
    }
}
