@extends('layouts.layout')

@section('contenido')
<hr>

<div class="card">
    <form method="POST" action="/guardar-cliente">
        @csrf
        <div class="card-header">
            Clientes
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ipt_name">Nombre</label>
                        <input id="ipt_name" class="form-control" name="nombre" type="text" maxlength="50">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ipt_last_name">Apellido</label>
                        <input id="ipt_last_name" class="form-control" name="apellido" type="text" maxlength="50">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ipt_birth_date">Fecha Nacimiento</label>
                        <input id="ipt_birth_date" class="form-control" name="fecha_nacimiento" type="text" placeholder="yyyy-MM-dd">
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-outline-primary">Guardar</button>
        </div>
    </form>
</div>

<hr>
<div class="row">
    <div class="col-md-12">
        <div class="table-responsive-md">
            <table class="table table-sm table-hover">
                <thead class="thead-dark text-center">
                    <tr>
                       <th>#</th>
                       <th>Nombre</th>
                       <th>Apellido</th>
                       <th>Fecha Nacimiento</th> 
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach($listado as $objeto)
                    <tr>
                        <td>{{$objeto['id_cliente']}}</td>
                        <td>{{$objeto['nombre']}}</td>
                        <td>{{$objeto['apellido']}}</td>
                        <td>{{$objeto['fecha_nacimiento']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection