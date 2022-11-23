<?php

namespace App\Imports;

use App\Models\Guide;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class GuidesImport implements ToModel, WithHeadingRow
{
    use Importable;

    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Guide([
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
    }
}
