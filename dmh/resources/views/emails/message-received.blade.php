<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje recibido</title>
</head>
<body>
    <p>Recibiste un mensaje de <strong>{{ $msg['name'] }} - <a href="mailto:{{ $msg['email'] }}">{{ $msg['email'] }}</a></strong></p>
    <p><strong>Asunto:</strong> {{ $msg['subject'] }}</p>
    <p><strong>Contenido:</strong> {{ $msg['content'] }}</p>
    <img src="http://dmh.webcindario.com/DMH/slide/Logo1.jpg" alt="Logo DMH" 
    style="max-width: 20vh;
    height: auto;
    margin: auto;
    display: block;
    margin-left: auto;
    margin-right: auto;">
    <p style="text-align:center"><strong>DMH Online</strong><br><a href="http://dmh.com.mx">Acceso</a></p>
</body>
</html>