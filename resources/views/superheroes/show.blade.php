@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detalle del Superhéroe</h1>
    <p><strong>Nombre Real:</strong> {{ $superheroe->nombre_real ?? 'No disponible' }}</p>
<p><strong>Nombre de Héroe:</strong> {{ $superheroe->nombre_heroe ?? 'No disponible' }}</p>
    @if($superheroe->foto)
        <p><img src="{{ $superheroe->foto }}" alt="{{ $superheroe->nombre_heroe }}" style="max-width:200px;"></p>
    @endif
    <p><strong>Información:</strong> {{ $superheroe->informacion }}</p>
    <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Volver</a>
</div>
@endsection
