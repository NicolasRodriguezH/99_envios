<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <header>
        <h1 style="text-align: center"> Guia en PDF </h1>
        <hr> <br>
        <p style="text-align: center">{{ $guide->valor_declarado }}</p>
        <p style="text-align: center">{{ $guide->tipoEnvio->nombre }}</p>
        <p style="text-align: center">{{ $guide->aplica_contrapago }}</p>
        <p style="text-align: center">{{ $guide->peso_bruto }}</p>
        <p style="text-align: center">{{ $guide->unidad }}</p>
        <p style="text-align: center">{{ $guide->dice_contener }}</p>
        <p style="text-align: center">{{ $guide->observaciones }}</p>
        <p style="text-align: center">{{ $guide->shipping_pickup }}</p>
        <p style="text-align: center">{{ $guide->urlguide }}</p>
         
        <p style="text-align: center">{{ $receiver->tipo_documento }}</p>
        <p style="text-align: center">{{ $receiver->numero_documento }}</p>
        <p style="text-align: center">{{ $receiver->nombre }}</p>
        <p style="text-align: center">{{ $receiver->primer_apellido }}</p>
        <p style="text-align: center">{{ $receiver->segundo_apellido }}</p>
        <p style="text-align: center">{{ $receiver->telefono }}</p>
        <p style="text-align: center">{{ $receiver->correo }}</p>
        <p style="text-align: center">{{ $receiver->direccion }}</p>
    </header>



    
</body>
</html>