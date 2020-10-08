<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Formula;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact',[
            'formulas' => Formula::latest()->get(),
        ]);
    }
}
