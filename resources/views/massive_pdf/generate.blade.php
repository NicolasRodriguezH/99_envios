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

        @foreach ($guides as $guide)
            
            <h1 style="text-align: center"> Guia en PDF </h1>
            <hr> <br>
            <p style="text-align: center">{{ $guide['valordeclarado'] }}</p>
            {{-- <p style="text-align: center">{{ $guide['aplicacontrapago'] }}</p> --}}
            <p style="text-align: center">{{ $guide['pesobruto'] }}</p>
            <p style="text-align: center">{{ $guide['unidad'] }}</p>
            <p style="text-align: center">{{ $guide['dicecontener'] }}</p>
            <p style="text-align: center">{{ $guide['observaciones'] }}</p>
            {{-- <p style="text-align: center">{{ $guide->shipping_pickup }}</p>
            <p style="text-align: center">{{ $guide->urlguide }}</p> --}}
            <p style="text-align: center">{{ $guide['tipodocumento'] }}</p>
            <p style="text-align: center">{{ $guide['numerodocumento'] }}</p>
            <p style="text-align: center">{{ $guide['nombre'] }}</p>
            <p style="text-align: center">{{ $guide['primerapellido'] }}</p>
            <p style="text-align: center">{{ $guide['segundoapellido'] }}</p>
            <p style="text-align: center">{{ $guide['telefono'] }}</p>
            <p style="text-align: center">{{ $guide['correo'] }}</p>
            <p style="text-align: center">{{ $guide['direccion'] }}</p>

        @endforeach

    </header>



    
</body>
</html>