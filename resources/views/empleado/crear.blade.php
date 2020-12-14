@extends('layouts.app')

@section('content')
    <h1>Creación de un producto</h1>

    <form method="POST" action="{{ route('empleados.almacenar') }}">
        @csrf
        <div class="form-row">
            <label>Primer apellido</label>
            <input class="form-control" type="text" max="20" pattern="[A-Za-z]{1,20}" name="primer_apellido" value="{{ old('primer_apellido') }}" required>
        </div>
        <div class="form-row">
            <label>Segundo apellido</label>
            <input class="form-control" type="text" max="20" pattern="[A-Za-z]{1,20}" name="segundo_apellido" value="{{ old('segundo_apellido') }}" required>
        </div>
        <div class="form-row">
            <label>Primer nombre</label>
            <input class="form-control" type="text" max="20" pattern="[A-Za-z]{1,20}" name="primer_nombre" value="{{ old('primer_nombre') }}" required>
        </div>
        <div class="form-row">
            <label>Otros nombres</label>
            <input class="form-control" type="text" max="50" pattern="[A-Za-z ]{1,50}" name="otro_nombre" value="{{ old('otro_nombre') }}" >
        </div>
        <div class="form-row">
            <label>Tipo de identificación</label>
            <select class="custom-select" name="tipo_identificacion_id" required>
                <option>Seleccione</option>
                @foreach ($tipoIdentificaciones as $tipoIdentificacion)
                    <option value="{{ $tipoIdentificacion->id }}">{{ $tipoIdentificacion->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <label>Número de identificación</label>
            <input class="form-control" type="text" max="20" name="numero_identificacion" value="{{ old('numero_identificacion') }}" required>
        </div>
        <div class="form-row">
            <label>País</label>
            <select class="custom-select" name="pais_id" required>
                <option>Seleccione</option>
                @foreach ($paises as $pais)
                    <option value="{{ $pais->id }}">{{ $pais->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <label>Área</label>
            <select class="custom-select" name="area_id" required>
                <option>Seleccione</option>
                @foreach ($areas as $area)
                    <option value="{{ $area->id }}">{{ $area->nombre }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-row">
            <label for="fecha_ingreso">Fecha ingreso</label>
            <input type="date" class="form-control datepicker" name="fecha_ingreso" required>
        </div>
        <div class="form-row">
            <label>Fecha registro</label>
            <input class="form-control" type="text" name="fecha_registro" value="{{ $fechaRegistro }}" disabled>
        </div>
        <div class="form-row mt-3">
            <button type="submit" class="btn btn-primary btn-lg">Almacenar</button>
        </div>
    </form>
@endsection