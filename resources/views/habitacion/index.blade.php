@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Habitaciones</h1>
    <a href="{{ route('habitacion.create') }}" class="btn btn-primary">Nueva Habitación</a>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Tipo</th>
                <th>Número</th>
                <th>Precio</th>
                <th>Fotografías</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($habitaciones as $habitacion) 
                <tr>
                    <td>{{ $habitacion->id }}</td>
                    <td>{{ $habitacion->tipo }}</td>
                    <td>{{ $habitacion->numero }}</td>
                    <td>{{ $habitacion->precio }}</td>
                    <td>
                        <img src="{{ asset('images/' . $habitacion->fotografias) }}" alt="Imagen de la habitación" height="70px" width="70px" class="img-thumbnail">
                    </td>
                    <td>
                        <form action="{{ route('habitacion.destroy', $habitacion->id) }}" method="POST">
                            <a href="{{ route('habitacion.show', $habitacion->id) }}" class="btn btn-info">Mostrar</a>
                            <a href="{{ route('habitacion.edit', $habitacion->id) }}" class="btn btn-primary">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
