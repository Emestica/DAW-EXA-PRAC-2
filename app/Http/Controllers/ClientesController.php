<?php

namespace App\Http\Controllers;

use App\Models\ClientesModel;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function showView(){
        $datos = ClientesModel::all();
        return view('clientes', [
            'pageName' => 'Clientes',
            'listado' => $datos
        ]);
    }

    public function getAllClientes(){
        return ClientesModel::all();
    }

    public function saveCliente(Request $peticion){
        $modelo = new ClientesModel($peticion->input());
        $modelo->saveOrFail();
        return redirect()->to('/clientes');
    }
}
