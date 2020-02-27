@extends('layout')
@section('title', $titulo)

@section('content')
        <h1>{{$titulo}}</h1>
        <hr>
        <ul>
            @empty($users)
                <li>No hay usuarios registrados</li>
            @else
            @foreach($users as $user)
                    <li>{{$user}}</li>
                @endforeach
            @endempty
        </ul>

@endsection

@section('sidebar')
@parent
    <h2>Barra lateral personalizada</h2>
    <hr>
@endsection
