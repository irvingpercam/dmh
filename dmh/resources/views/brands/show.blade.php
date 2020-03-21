@extends('layout')
@section('title', 'Marcas | ' . $brand->title)
@section('content')
    <h1>{{ $brand->title }}</h1>
    @auth
        <a href="{{ route('brands.edit', $brand)}}">Editar</a>
        <form method="POST" action="{{ route('brands.destroy', $brand) }}">
            @csrf @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth
    <p>{{ $brand->created_at->diffForHumans() }}</p>
@endsection