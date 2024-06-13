@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Editar Habitación</h1>

    <form action="{{ route('habitacion.update', $habitacion->id) }}" method="POST">

        @csrf

        @method('PUT')

        <div class="form-group">

            <label for="tipo">Tipo:</label>

            <input type="text" name="tipo" class="form-control" value="{{ $habitacion->tipo }}" required>

        </div>

        <div class="form-group">

            <label for="numero">Número:</label>

            <input type="number" name="numero" class="form-control" value="{{ $habitacion->numero }}" required>

        </div>

        <div class="form-group">

            <label for="precio">Precio:</label>

            <input type="number" step="0.01" name="precio" class="form-control" value="{{ $habitacion->precio }}" required>

        </div>

        <div class="form-group">

            <label for="fotografias">Fotografías:</label>

            <input type="file" name="fotografias" class="form-control" value="{{ $habitacion->fotografias }}" required>

        </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>

    </form>

</div>

@endsection
