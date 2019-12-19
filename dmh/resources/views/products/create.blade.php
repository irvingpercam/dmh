@extends('layout')
@section('title', 'Registrar producto')
@section('content')
    <h1>Registrar nuevo producto</h1>
    <form action="">
        <label for="title">
            Nombre del Producto<br>
            <input type="text" name="title" id="title">
        </label>
        <label for="description">
            Ficha Técnica<br>
            <input type="text" name="description" id="description">
        </label>
        <label for="category">
            Categoría<br>
            <input type="number" name="category" id="category">
        </label>
        <label for="type">
            Tipo<br>
            <input type="number" name="type" id="type">
        </label>
        <label for="brand">
            Marca<br>
            <input type="number" name="brand" id="brand">
        </label>
        <label for="img">
            Imagen<br>
            <input type="text" name="img" id="img">
        </label>
    </form>
@endsection