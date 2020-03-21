@extends('layout')
@section('title', 'Registrar tipo de producto')
@section('content')
    <h1>Registrar nuevo tipo de producto</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('types.store') }}">
        @include('types._form', ['btnText' => 'Guardar'])
    </form>
@endsection