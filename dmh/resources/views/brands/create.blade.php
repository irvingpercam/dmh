@extends('layout')
@section('title', 'Registrar marca')
@section('content')
    <h1>Registrar nueva marca</h1>
    @include('partials.validation-errors')
    <form method="POST" action="{{ route('brands.store') }}">
        @include('brands._form', ['btnText' => 'Guardar'])
    </form>
@endsection