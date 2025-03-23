@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Agregar Superhéroe</h1>
    <form action="{{ route('superheroes.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label>Nombre Real</label>
            <input type="text" name="nombre_real" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Nombre de Héroe</label>
            <input type="text" name="nombre_heroe" class="form-control" required>
        </div>
        <div class="form-group">
            <label>Foto (imagen)</label>
            <input type="file" name="foto" class="form-control-file">
        </div>
        <div class="form-group">
            <label>Información Adicional</label>
            <textarea name="informacion" class="form-control"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Guardar</button>
    </form>
</div>
@endsection
