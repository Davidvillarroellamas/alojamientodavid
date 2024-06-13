@extends('layouts.app')

@section('content')

<div class="container">

    <h1>Crear Nueva Habitación</h1>

    <form action="{{ route('habitacion.store') }}" method="POST">

        @csrf

        <div class="form-group">

            <label for="tipo">Tipo:</label>

            <input type="text" name="tipo" class="form-control" required>

        </div>

        <div class="form-group">

            <label for="numero">Número:</label>

            <input type="number" name="numero" class="form-control" required>

        </div>

        <div class="form-group">

            <label for="precio">Precio:</label>

            <input type="number" step="0.01" name="precio" class="form-control" required>

        </div>

        <div class="form-group">

            <label for="fotografias">Fotografías:</label>

            <input type="file" name="fotografias" class="form-control" required>

        </div>

        <button type="submit" class="btn btn-primary">Crear</button>

    </form>

</div>

@endsection
