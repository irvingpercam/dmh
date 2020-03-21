@extends('layout')
@section('title', 'Editar categoría')
@section('content')
    <h1>Editar categoría</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('categories.update', $category) }}">
        @method('PATCH')
        @include('categories._form', ['btnText' => 'Actualizar'])
    </form>
@endsection