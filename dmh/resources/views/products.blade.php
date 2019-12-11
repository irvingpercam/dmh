@extends('layout')
@section('title', 'Products')
@section('content')
    <h1>Products</h1>
    <ul>
        @forelse ($products as $product)
            <li>{{ $product['title'] }}</li>
        @empty
            <p>No hay productos</p>
        @endforelse
    </ul>
@endsection