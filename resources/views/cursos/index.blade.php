@extends('layouts.plantilla')
@section('title', 'index')
@section('content')
    <h1>Soy curso index</h1>
    <a class="m-60" href="{{route('cursos.create')}}">Crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li>
                <a href="{{ route('cursos.show', $curso) }}">{{$curso->name}}</a>
            </li>
        @endforeach
    </ul>
    {{$cursos->links()}}
@endsection

