<!--Imprime la vista que se enviara al correo-->
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0">
    <title>Solicitud de asesorias</title>
</head>
<body>
    <p>Hola! Tienes una solicitud de asesoria de: {{ $dat ['nom']}}.</p>
    <p>Mensaje</p>
    <p>{{$dat ['msj']}}</p>
    <p>Horas Solicitadas: Horas: {{$dat ['hora'] }}</p>
    <p>Usuario remitente</p>
    <ul>
        <li>{{$dat ['sel']}}</li>
        <li>Nombre o razón social: {{$dat ['nom'] }}</li>
        <li>Direccion: {{$dat ['dir'] }}</li>
        <li>Correo de contacto: {{$dat ['correo'] }}</li>
        
    </ul>
</body>
</html>