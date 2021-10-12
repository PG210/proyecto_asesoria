<!--Imprime la vista que se enviara al correo-->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Solicitud de: {{$details ['asunto']}}</title>
</head>
<body>
    <p>Hola! Tienes una solicitud de contacto de {{ $details ['nombre']}}.</p>
    <p>Mensaje</p>
    <p>{{$details ['mensaje']}}</p>
    <p>Usuario remitente</p>
    <ul>
        <li>Nombre: {{$details ['nombre'] }}</li>
        <li>Correo: {{$details ['correo'] }}</li>
    </ul>
</body>
</html>
