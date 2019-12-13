<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'DMH')</title>
    <style>
    .active a{
        color: red;
        text-decoration: none;
    }
    </style>
</head>
<body>
    @include('partials._nav')
    @yield('content')
</body>
</html>