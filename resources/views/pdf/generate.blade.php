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
        <div class="container py-8">
            <div class="text-right">
                <img class="h-20 w-20 rounded-full" src="proyecto2.jpeg" alt="Logo 99envios">
            </div>
            <div>
                {!! DNS1D::getBarcodeHTML($guide->id, 'EAN2') !!}
                {!! $guide->id !!}
            </div>
        </div>

        <div>
            <table class="w-full border-separate">
                <thead>
                    <tr>
                        <th class="border border-gray-400 py-4 px-4 text-gray-800 text-2xl">Detalle del envío</th>
                        <th class="border border-gray-400 py-4 px-4 text-gray-800 text-2xl">Receptor</th>
                    </tr>
                </thead>

                <tbody>
                    <tr class="bg-gray-500">
                        <td class="border border-gray-400 py-2 px-2 text-base">Valor declarado: {{ $guide->valor_declarado }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Tipo de documento: {{ $guide->receiver->tipo_documento }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 py-2 px-2 text-base">Aplica contrapago: {{ $guide->aplica_contrapago }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Numero de documento: {{ $guide->receiver->numero_documento }}</td>
                    </tr>
                    <tr class="bg-gray-500">
                        <td class="border border-gray-400 py-2 px-2 text-base">Peso bruto: {{ $guide->peso_bruto }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Nombre destinatario: {{ $guide->receiver->nombre }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 py-2 px-2 text-base">Unidades: {{ $guide->unidad }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Primer apellido: {{ $guide->receiver->primer_apellido }}</td>
                    </tr>
                    <tr class="bg-gray-500">
                        <td class="border border-gray-400 py-2 px-2 text-base">Dice contener: {{ $guide->dice_contener }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Segundo apellido: {{ $guide->receiver->segundo_apellido }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 py-2 px-2 text-base">Recogida de envio: {{ $guide->shipping_pickup }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Telefono: {{ $guide->receiver->telefono }}</td>
                    </tr>
                    <tr class="bg-gray-500">
                        <td class="border border-gray-400 py-2 px-2 text-base">Guia No: {{ $guide->id }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Correo: {{ $guide->receiver->correo }}</td>
                    </tr>
                    <tr>
                        <td class="border border-gray-400 py-2 px-2 text-base">Observaciones: {{ $guide->observaciones }}</td>
                        <td class="border border-gray-400 py-2 px-2 text-base">Direccion: {{ $guide->receiver->direccion }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
</body>
</html>