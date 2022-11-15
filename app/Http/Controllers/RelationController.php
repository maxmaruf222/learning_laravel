<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\subcategories;


class RelationController extends Controller
{
    public function hasOne()
    {
        $data =  Category::find(46);
        return view('relation.has_one', compact('data'));
    }

    public function belongsTo()
    {
        $data = subcategories::find(7);

        return view('relation.belongs_to', compact('data'));
    }
}
