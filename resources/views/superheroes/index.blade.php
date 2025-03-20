@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Listado de Superhéroes</h1>

    <a href="{{ route('superheroes.create') }}" class="btn btn-primary mb-3">Agregar Nuevo Superhéroe</a>

    @if ($superheroes->isEmpty())
        <div class="alert alert-warning">No hay superhéroes registrados.</div>
    @else
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>Nombre Real</th>
                    <th>Nombre de Héroe</th>
                    <th class="text-center">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($superheroes as $superheroe)
                    <tr>
                        <td>{{ $superheroe->nombre_real }}</td>
                        <td>{{ $superheroe->nombre_heroe }}</td>
                        <td class="text-center">
                            <a href="{{ route('superheroes.show', $superheroe) }}" class="btn btn-info btn-sm">Ver</a>
                            <a href="{{ route('superheroes.edit', $superheroe) }}" class="btn btn-warning btn-sm">Editar</a>
                            <form action="{{ route('superheroes.destroy', $superheroe) }}" method="POST" class="d-inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro de eliminar a {{ $superheroe->nombre_heroe }}?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
