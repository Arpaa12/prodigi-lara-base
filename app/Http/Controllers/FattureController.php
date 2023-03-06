<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FattureController extends Controller
{
    public function fatture(){
    $elementi =['a','b','c'];
        return view('FattureView');
    }
}
