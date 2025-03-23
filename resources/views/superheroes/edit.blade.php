@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Editar Superhéroe</h1>
    <form action="{{ route('superheroes.update', $superheroe) }}" method="POST" enctype="multipart/form-data">
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
            <label>Foto</label>
            <input type="file" name="foto" class="form-control-file">
        </div>
        @if($superheroe->foto)
            <div class="form-group">
                <label>Imagen Actual:</label>
                <br>
                <img src="{{ asset('storage/' . $superheroe->foto) }}" alt="{{ $superheroe->nombre_heroe }}" style="max-width:200px;">
            </div>
        @endif
        <div class="form-group">
            <label>Información Adicional</label>
            <textarea name="informacion" class="form-control">{{ $superheroe->informacion }}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Actualizar</button>
    </form>
</div>
@endsection
