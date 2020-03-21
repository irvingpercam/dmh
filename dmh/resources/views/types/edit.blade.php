@extends('layout')
@section('title', 'Editar tipo de producto')
@section('content')
    <h1>Editar tipo de producto</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('types.update', $type) }}">
        @method('PATCH')
        @include('types._form', ['btnText' => 'Actualizar'])
    </form>
@endsection