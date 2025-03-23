@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="mb-4">Superhéroes Eliminados</h1>

    @if ($superheroes->isEmpty())
        <div class="alert alert-warning">No hay superhéroes eliminados.</div>
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
                            <form action="{{ route('superheroes.restore', $superheroe->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                <button type="submit" class="btn btn-success btn-sm" onclick="return confirm('¿Desea restaurar a {{ $superheroe->nombre_heroe }}?')">Restaurar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Volver al listado</a>
</div>
@endsection
