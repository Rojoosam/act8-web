@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes.update', $superheroe) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label>Nombre Real</label>
            <input type="text" name="nombre_real" class="form-control" value="{{ $superheroe->nombre_real }}" required>
        </div>
        <div class="form-group">
            <label>Nombre de Héroe</label>
            <input type="text" name="nombre_heroe" class="form-control" value="{{ $superheroe->nombre_heroe }}" required>
        </div>
        <div class="form-group">
            <label>URL de la Foto</label>
            <input type="url" name="foto" class="form-control" value="{{ $superheroe->foto }}">
        </div>
        <div class="form-group">
            <label>Información Adicional</label>
            <textarea name="informacion" class="form-control">{{ $superheroe->informacion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
