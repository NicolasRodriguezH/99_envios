<?php

namespace App\Imports;

use App\Models\Guide;
use App\Models\Receiver;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class CollectionGuidesImport implements ToCollection, WithHeadingRow
{
    use Importable;

    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        foreach ($collection as $row) {
            Guide::create([
                'valor_declarado' => (integer) $row['valordeclarado'],
                'nombre_tipo_envio' => $row['nombretipoenvio'],
                'aplica_contrapago' => $row['aplicacontrapago'],
                'peso_bruto' => (integer) $row['pesobruto'],
                'unidad' => $row['unidad'],
                'dice_contener' => $row['dicecontener'],
                'observaciones' => $row['observaciones'],
                'peso' => (integer) $row['peso'],
                'largo' => (integer) $row['largo'],
                'ancho' => (integer) $row['ancho'],
                'alto' => (integer) $row['alto'],
             ]);
            Receiver::create([
                'tipo_documento' => $row['tipodocumento'],
                'numero_documento' => $row['numerodocumento'],
                'nombre' => $row['nombre'],
                'primer_apellido' => $row['primerapellido'],
                'segundo_apellido' => $row['segundoapellido'],
                'telefono' => $row['telefono'],
                'correo' => $row['correo'],
                'direccion' => $row['direccion'],
            ]);
        }
    }
}
