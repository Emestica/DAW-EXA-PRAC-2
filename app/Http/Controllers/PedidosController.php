<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidosController extends Controller
{
    public function showView(){
        return view('pedidos', ['pageName' => 'Pedidos']);
    }
}
