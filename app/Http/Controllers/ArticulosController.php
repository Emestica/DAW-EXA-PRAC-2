<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticulosController extends Controller
{
    public function showView(){
        return view('articulos', ['pageName' => 'Articulos']);
    }
}
