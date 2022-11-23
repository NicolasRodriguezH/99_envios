<?php

namespace App\Imports;

use App\Models\Receiver;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;

class ReceiversImport implements ToModel, WithHeadingRow
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
        return new Receiver([
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
