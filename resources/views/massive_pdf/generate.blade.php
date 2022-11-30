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
        <p style="text-align: center">{{ $mg->Guide->valordeclarado }}</p>
        {{-- <p style="text-align: center">{{ $mg->Guide->tipoEnvio->nombre }}</p> --}}
        <p style="text-align: center">{{ $mg->Guide->aplicacontrapago }}</p>
        <p style="text-align: center">{{ $mg->Guide->pesobruto }}</p>
        <p style="text-align: center">{{ $mg->Guide->unidad }}</p>
        <p style="text-align: center">{{ $mg->Guide->dice_contener }}</p>
        <p style="text-align: center">{{ $mg->Guide->observaciones }}</p>
        <p style="text-align: center">{{ $mg->Guide->shipping_pickup }}</p>
        <p style="text-align: center">{{ $mg->Guide->urlguide }}</p>
        {{-- <p style="text-align: center">{{ $collection->receiver->tipo_documento }}</p>
        <p style="text-align: center">{{ $collection->receiver->numero_documento }}</p>
        <p style="text-align: center">{{ $collection->receiver->nombre }}</p>
        <p style="text-align: center">{{ $collection->receiver->primer_apellido }}</p>
        <p style="text-align: center">{{ $collection->receiver->segundo_apellido }}</p>
        <p style="text-align: center">{{ $collection->receiver->telefono }}</p>
        <p style="text-align: center">{{ $collection->receiver->correo }}</p>
        <p style="text-align: center">{{ $collection->receiver->direccion }}</p> --}}

        <hr> <br>
        {{-- <p style="text-align: center">{{ $guide->valor_declarado }}</p>
        <p style="text-align: center">{{ $guide->tipoEnvio->nombre }}</p>
        <p style="text-align: center">{{ $guide->aplica_contrapago }}</p>
        <p style="text-align: center">{{ $guide->peso_bruto }}</p>
        <p style="text-align: center">{{ $guide->unidad }}</p>
        <p style="text-align: center">{{ $guide->dice_contener }}</p>
        <p style="text-align: center">{{ $guide->observaciones }}</p>
        <p style="text-align: center">{{ $guide->shipping_pickup }}</p>
        <p style="text-align: center">{{ $guide->urlguide }}</p>
        <p style="text-align: center">{{ $guide->receiver->tipo_documento }}</p>
        <p style="text-align: center">{{ $guide->receiver->numero_documento }}</p>
        <p style="text-align: center">{{ $guide->receiver->nombre }}</p>
        <p style="text-align: center">{{ $guide->receiver->primer_apellido }}</p>
        <p style="text-align: center">{{ $guide->receiver->segundo_apellido }}</p>
        <p style="text-align: center">{{ $guide->receiver->telefono }}</p>
        <p style="text-align: center">{{ $guide->receiver->correo }}</p>
        <p style="text-align: center">{{ $guide->receiver->direccion }}</p> --}}
    </header>



    
</body>
</html>