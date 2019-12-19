@extends('layout')
@section('title', 'Productos | ' . $product->title)
@section('content')
    <h1>{{ $product->title }}</h1>
    <p>{{ $product->description }}</p>
    <p>{{ $product->created_at->diffForHumans() }}</p>
@endsection