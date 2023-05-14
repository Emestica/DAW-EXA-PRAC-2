@extends('layouts.layout')

@section('contenido')
    <hr>
    <h1 class="text-center">Bienvenido: {{ $name }} {{ $lastName }}, del grupo: {{ $group }}</h1>

@endsection