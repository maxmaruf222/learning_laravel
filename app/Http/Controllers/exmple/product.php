<?php

namespace App\Http\Controllers\exmple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class product extends Controller
{
    //
    public function product_list(){
        return 'millions of product listed hare';
    }

    public function product_add(){
        return 'new product listed hare';
    }

    public function product_drop(){
        return 'product deleted';
    }
}
