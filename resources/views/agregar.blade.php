@extends('layout.main')
@section('contenido')
    <h1>Agregar Nueva Persona</h1>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="{{ route('personas.store')}}" method="POST" class="form-control" autocomplete="off">
                    @csrf
                    <label for="apellidoP">Apellido Paterno</label>
                    <input type="text" class="form-control" name="apellidoP" id="apellidoP" autofocus>
            
                    <label for="apellidoM">Apellido Materno</label>
                    <input type="text" class="form-control" name="apellidoM" id="apellidoM">
            
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre">
            
                    <button class="btn btn-primary mt-3">Guardar</button>
                    <a href="{{ route('personas.index')}}" class="btn btn-info mt-3">Regresar</a>
                </form>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
@endsection