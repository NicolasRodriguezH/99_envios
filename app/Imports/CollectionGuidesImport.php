<?php

namespace App\Imports;

use App\Models\Guide;
use App\Models\Receiver;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToArray;
use Maatwebsite\Excel\Concerns\WithBatchInserts;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class CollectionGuidesImport implements ToCollection, WithHeadingRow, WithChunkReading, WithBatchInserts
{
    use Importable;

    public function startRow(): int
    {
        return 2;
    }

    /**
    * @param Collection $collection
    */

    private $rows = 0;
    private $guide = Guide::class;
    private $receiver = Receiver::class;

    public function collection(Collection $collection)
    {

        foreach ($collection as $row) {

            ++$this->rows;

            $guide = Guide::create([
                'valor_declarado' => (integer) $row['valordeclarado'],
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
            $receiver = Receiver::create([
                'tipo_documento' => $row['tipodocumento'],
                'numero_documento' => $row['numerodocumento'],
                'nombre' => $row['nombre'],
                'primer_apellido' => $row['primerapellido'],
                'segundo_apellido' => $row['segundoapellido'],
                'telefono' => $row['telefono'],
                'correo' => $row['correo'],
                'direccion' => $row['direccion'],
            ]);
            $this->guide = $guide;
            $this->receiver = $receiver;
        }
    }

    public function getData(): array
    {
        return [$this->guide, $this->receiver];
    }

    public function getRowCount(): int {
        return $this->rows;
    }

    //por si fuesen archivos muy grandes
    public function batchSize(): int
    {
        return 500;   
    }

    //por si fuesen archivos muy grandes
    public function chunkSize(): int
    {
        return 500;
    }
}
