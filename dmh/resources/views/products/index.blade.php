@extends('layout')
@section('title', 'Products')
@section('content')
    <h1>Productos</h1>
    <ul>
        @forelse ($products as $product)
            <li><a href="{{ route('products.show', $product) }}">{{ $product->title }}</a></li>
        @empty
            <p>No hay productos para mostrar</p>
        @endforelse
        {{ $products->links() }}
    </ul>
@endsection