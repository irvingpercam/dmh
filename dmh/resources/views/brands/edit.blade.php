@extends('layout')
@section('title', 'Editar marca')
@section('content')
    <h1>Editar marca</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('brands.update', $brand) }}">
        @method('PATCH')
        @include('brands._form', ['btnText' => 'Actualizar'])
    </form>
@endsection