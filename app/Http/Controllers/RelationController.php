<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategory;


class RelationController extends Controller
{
    public function hasOne()
    {
        $data =  Category::find(1);
        return view('relation.has_one', compact('data'));
    }

    public function belongsTo()
    {
        $data = subcategory::find(1);

        return view('relation.belongs_to', compact('data'));
    }
}
