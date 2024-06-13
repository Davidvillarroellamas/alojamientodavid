@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalles de la Habitación</h1>
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <td>{{ $habitacion->id }}</td>
        </tr>
        <tr>
            <th>Tipo</th>
            <td>{{ $habitacion->tipo }}</td>
        </tr>
        <tr>
            <th>Número</th>
            <td>{{ $habitacion->numero }}</td>
        </tr>
        <tr>
            <th>Precio</th>
            <td>{{ $habitacion->precio }}</td>
        </tr>
        <tr>
            <th>Fotografías</th>
            <td>
                        <img src="{{ asset('images/' . $habitacion->fotografias) }}" alt="Imagen de la habitación" height="70px" width="70px" class="img-thumbnail">
                    </td>
        </tr>
    </table>
    <a href="{{ route('habitacion.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection
