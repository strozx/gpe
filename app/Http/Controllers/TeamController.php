<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Formula;
use App\Models\Subdepartment;
use App\Models\Team;

class TeamController extends Controller
{
    public function show()
    {
        $departments=Department::all();
        $formulas = Formula::latest()->get();
        return view('team',compact('departments','formulas'));
    }
}
