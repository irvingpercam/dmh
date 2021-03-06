@extends('layout')
@section('title', 'Registrar producto')
@section('content')
    <h1>Editar producto</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('products.update', $product) }}">
        @method('PATCH')
        @include('products._form', ['btnText' => 'Actualizar'])
    </form>
@endsection