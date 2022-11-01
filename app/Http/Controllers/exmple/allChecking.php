<?php

namespace App\Http\Controllers\exmple;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class allChecking extends Controller
{
    public function details($id){
       $id = Crypt::decryptString($id);
        return $id;
    }
}
