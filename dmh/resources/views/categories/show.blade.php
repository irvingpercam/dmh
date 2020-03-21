@extends('layout')
@section('title', 'Categorías | ' . $category->name)
@section('content')
    <h1>{{ $category->name }}</h1>
    @auth
        <a href="{{ route('categories.edit', $category)}}">Editar</a>
        <form method="POST" action="{{ route('categories.destroy', $category) }}">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth
    <p>{{ $category->created_at->diffForHumans() }}</p>
@endsection