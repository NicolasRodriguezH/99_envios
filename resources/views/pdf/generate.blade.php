<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/app.css">
    <title>Guía PDF</title>
</head>
<body>
    <header>
        <div class="container py-12">

            <div class="text-right">
                <img class="h-12 w-12 rounded-full" src="proyecto2.jpeg" alt="Logo 99envios">
            </div>

            <div>
                {!! DNS1D::getBarcodeHTML($guide->id, 'EAN2') !!}
                {{$guide->id}}
            </div>

            <br>
            <br>
            {{-- <div class="grid grid-cols-2 gap-2 justify-center">
                <div class="text-center inline-block">{{ $guide->valor_declarado }}</div>
                <div class="text-center inline-block">{{ $guide->aplica_contrapago }}</div>
                <div class="text-center inline-block">{{ $guide->peso_bruto }}</div>
                <div class="text-center inline-block">{{ $guide->unidad }}</div>
                <div class="text-center inline-block">{{ $guide->dice_contener }}</div>
                <div class="text-center inline-block">{{ $guide->observaciones }}</div>
                <div class="text-center inline-block">{{ $guide->shipping_pickup }}</div>
                <div class="text-center inline-block">{{ $guide->urlguide }}</div>

                <div class="text-center inline-block">{{ $guide->receiver->tipo_documento }}</div>
                <div class="text-center inline-block">{{ $guide->receiver->numero_documento }}</div>
                <div class="text-center inline-block">{{ $guide->receiver->nombre }}</div>
                <div class="text-center inline-block">{{ $guide->receiver->primer_apellido }}</div>
                <div class="text-center inline-block">{{ $guide->receiver->segundo_apellido }}</div>
                <div class="text-center inline-block">{{ $guide->receiver->telefono }}</div>
                <div class="text-center inline-block">{{ $guide->receiver->correo }}</div>
                <div class="text-center inline-block">{{ $guide->receiver->direccion }}</div>
            </div> --}}
            <div class="grid grid-cols-2 gap-4 place-content-around">
                <table class="table-auto">
                    <thead>
                        <tr>
                            <th>Detalle del envío</th>
                            <th>Receptor</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Valor declarado: {{ $guide->valor_declarado }}</td>
                            <td>Tipo de documento: {{ $guide->receiver->tipo_documento }}</td>
                        </tr>
                        <tr>
                            <td>Aplica contrapago: {{ $guide->aplica_contrapago }}</td>
                            <td>Numero de documento: {{ $guide->receiver->numero_documento }}</td>
                        </tr>
                        <tr>
                            <td>Peso bruto: {{ $guide->peso_bruto }}</td>
                            <td>Nombre destinatario: {{ $guide->receiver->nombre }}</td>
                        </tr>
                        <tr>
                            <td>Unidades: {{ $guide->unidad }}</td>
                            <td>Primer apellido: {{ $guide->receiver->primer_apellido }}</td>
                        </tr>
                        <tr>
                            <td>Dice contener: {{ $guide->dice_contener }}</td>
                            <td>Segundo apellido: {{ $guide->receiver->segundo_apellido }}</td>
                        </tr>
                        <tr>
                            <td>Recogida de envio: {{ $guide->shipping_pickup }}</td>
                            <td>Telefono: {{ $guide->receiver->telefono }}</td>
                        </tr>
                        <tr>
                            <td>Guia No: {{ $guide->id }}</td>
                            <td>Correo: {{ $guide->receiver->correo }}</td>
                        </tr>
                        <tr>
                            <td>Observaciones: {{ $guide->observaciones }}</td>
                            <td>Direccion: {{ $guide->receiver->direccion }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            </div>


                {{-- <hr> <br> --}}
                {{-- <p style="text-align: center">{{ $guide->valor_declarado }}</p>
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

            </div>
        </div>
    </header>
</body>
</html>