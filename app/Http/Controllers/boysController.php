<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\boys;

class boysController extends Controller
{
    public function index()
    {   
        $boys = boys::paginate(10);
        return view('students.index', ['boys'=> $boys]);
    }
}
