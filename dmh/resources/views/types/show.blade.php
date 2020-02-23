@extends('layout')
@section('title', 'Tipos | ' . $type->name)
@section('content')
    <h1>{{ $type->name }}</h1>
    @auth
        <a href="{{ route('types.edit', $type)}}">Editar</a>
        <form method="POST" action="{{ route('types.destroy', $type) }}">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth
    <p>{{ $type->created_at->diffForHumans() }}</p>
@endsection