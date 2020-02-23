@extends('layout')
@section('title', 'Tipos de Herramientas')
@section('content')
    <h1>Tipos de Productos</h1>
    @auth
        <a href="{{ route('types.create')}}">Registrar tipo de producto nuevo</a>
    @endauth
    <ul>
        @forelse ($types as $type)
            <li><a href="{{ route('types.show', $type) }}">{{ $type->name }}</a></li>
        @empty
            <p>No hay tipos para mostrar</p>
        @endforelse
        {{ $types->links() }}
    </ul>
@endsection