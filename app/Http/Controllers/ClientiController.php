<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientiController extends Controller
{
    public function clienti(){
    $elementi =['a','b','c'];
        return view('ClientiView');
    }
}
