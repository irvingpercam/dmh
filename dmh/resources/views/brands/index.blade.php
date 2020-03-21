@extends('layout')
@section('title', 'Marcas')
@section('content')
    <h1>Marcas</h1>
    @auth
        <a href="{{ route('brands.create')}}">Registrar marca nueva</a>
    @endauth
    <ul>
        @forelse ($brands as $brand)
            <li><a href="{{ route('brands.show', $brand) }}">{{ $brand->title }}</a></li>
        @empty
            <p>No hay marcas para mostrar</p>
        @endforelse
        {{ $brands->links() }}
    </ul>
@endsection