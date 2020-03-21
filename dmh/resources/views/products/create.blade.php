@extends('layout')
@section('title', 'Registrar producto')
@section('content')
    <h1>Registrar nuevo producto</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('products.store') }}">
        @include('products._form', ['btnText' => 'Guardar'])
    </form>
@endsection