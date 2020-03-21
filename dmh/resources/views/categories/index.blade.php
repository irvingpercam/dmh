@extends('layout')
@section('title', 'Categorias')
@section('content')
    <h1>Categorías</h1>
    @auth
        <a href="{{ route('categories.create')}}">Registrar categoría nueva</a>
    @endauth
    <ul>
        @forelse ($categories as $category)
            <li><a href="{{ route('categories.show', $category) }}">{{ $category->name }}</a></li>
        @empty
            <p>No hay categorías para mostrar</p>
        @endforelse
        {{ $categories->links() }}
    </ul>
@endsection