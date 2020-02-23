@extends('layout')
@section('title', 'Tipos de Herramientas')
@section('content')
    <h1>Tipos de Productos</h1>
    @auth
        <a href="{{ route('types.create')}}">Registrar tipo de producto nuevo</a>
    @endauth
    <ul>
        <h3>Herramientas</h3>
        @forelse ($typesH as $type)  
            <li><a href="{{ route('types.show', $type) }}">{{ $type->name }}</a></li>
        @empty
            <p>No hay tipos para mostrar</p>
        @endforelse
        {{ $typesH->links() }}
        <h3>Maquinaria</h3>
        @forelse ($typesM as $type)  
            <li><a href="{{ route('types.show', $type) }}">{{ $type->name }}</a></li>
        @empty
            <p>No hay tipos para mostrar</p>
        @endforelse
        {{ $typesM->links() }}
    </ul>
@endsection