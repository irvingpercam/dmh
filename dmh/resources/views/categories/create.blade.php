@extends('layout')
@section('title', 'Registrar categoría')
@section('content')
    <h1>Registrar nueva categoría</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('categories.store') }}">
        @include('categories._form', ['btnText' => 'Guardar'])
    </form>
@endsection