@extends('layouts.plantilla')
@section('title', 'Cursos edit')
@section('content')
    <h1>En esta pagina podras editar un curso</h1>
    <form action="{{ route('cursos.update', $curso) }}" method="POST">
        @csrf
        @method('put')
        <br>
        <label>Nombre:
            <input type="text" name="name" value="{{old('name', $curso->name)}}">
        </label>
        @error('name')
            <br><small>*{{$message}}</small><br>
        @enderror

        <label>
            Descripcion:
            <textarea name="descripcion" rows="5" >{{old('descripcion', $curso->descripcion)}}</textarea>
        </label>
        @error('descripcion')
            <br><small>*{{$message}}</small><br>
        @enderror

        <label>
            Categoria:
            <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
        </label>
        @error('categoria')
            <br><small>*{{$message}}</small><br>
        @enderror

        <button type="submit">Actualizar curso</button>
    </form>
@endsection