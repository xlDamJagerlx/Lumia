@extends('layouts.HeaderFooter')
@section('content')
<div class="container">

    <link href="{{ asset('css/styleseleccioncomputadora.css') }}" rel="stylesheet">
    <div class="card">
        <h4 class="card-title text-center"><b>Computadoras Ensambladas</b></h4>
        <img class="card-img-top" src="{{asset('img/Categorias/seleccion_pc_ensamblada.jpg')}}">
        <div class="card-footer">
            <a class="btn btn-primary" href="{{ url('contenidoweb/categorias/seleccion-computadora/computadora-ensamblada') }}">Seleccionar</a>
        </div>
    </div>
    <div class="card">
        <h4 class="card-title text-center"><b>Ensambla tu computadora</b></h4>
        <img class="card-img-top" src="{{asset('img/Categorias/seleccion_pc_construirla.jpg')}}">
        <div class="card-footer">
            <a class="btn btn-primary" href="{{ url('contenidoweb/categorias/seleccion-computadora/construye-tu-computadora') }}">Seleccionar</a>
        </div>
    </div>


</div>

@endsection