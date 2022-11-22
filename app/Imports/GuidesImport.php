<?php

namespace App\Imports;

use App\Models\Guide;
use App\Models\Receiver;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GuidesImport implements ToCollection, WithHeadingRow
{
    use Importable;
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {   
        foreach ($rows as $row) {
            Guide::create([
                'valor_declarado' => $row[0],
                'nombre_tipo_envio' => $row[1],

             ]);
            Receiver::create([
                'tipo_documento' => $row[3],
                'numero_documento' => $row[4],
                
            ]);
        }
    }

    public function header() {

    }
}
