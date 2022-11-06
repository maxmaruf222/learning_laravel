<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\boys;

class boysController extends Controller
{
    public function index()
    {
        $boys = boys::all();
        return response()->json($boys);
    }
}
