<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientesModel extends Model
{
    
    use HasFactory;

    protected $table = "clientes";

    protected $primaryKey = "id_cliente";

    protected $fillable = ['nombre','apellido','fecha_nacimiento'];

    public $timestamps = false;

    public function getAllClintes(){
        $data = ClientesModel::all();
    }

}
