@extends('layout')
@section('title', 'Registrar producto')
@section('content')
    <h1>Registrar nuevo producto</h1>
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="title">
            Nombre del Producto<br>
            <input type="text" name="title" id="title">
        </label>
        <br>
        <label for="url">
            URL<br>
            <input type="text" name="url" id="url">
        </label>
        <br>
        <label for="description">
            Ficha Técnica<br>
            <textarea name="description" id="description" cols="30" rows="10"></textarea>
        </label>
        <br>
        <label for="category">
            Categoría<br>
            <input type="number" name="category" id="category">
        </label>
        <br>
        <label for="type">
            Tipo<br>
            <input type="number" name="type" id="type">
        </label>
        <br>
        <label for="brand">
            Marca<br>
            <input type="number" name="brand" id="brand">
        </label>
        <br>
        <label for="img">
            Imagen<br>
            <input type="text" name="img" id="img">
        </label>
        <br>
        <button>Guardar</button>
    </form>
@endsection