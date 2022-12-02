<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Imports\CollectionGuidesImport;
use App\Models\Guide;
use App\Models\Receiver;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use LengthException;
use Maatwebsite\Excel\Concerns\ToArray;

class GuideMassiveExcelController extends Controller
{
    public function createMassiveGuides() {
        
        try {
            $mg = (new CollectionGuidesImport)->toCollection(request()->file('file'));
            
            /* Deberia convertir esta collection en los parametros de la colleccion misma */
            /* AACA QUEDO Y VOY CON Novelty para CULMINAR */

            if ($mg) {
                //$guide = new Guide();
                $receiver = new Receiver();

                $collections = (new CollectionGuidesImport());
                $collections->collection($mg);
                //$collection->collection->row;
                
                    
                    $guide = $collections;

                    //$guide = new Guide();
                    //$mg->collection();
        
                        $pdf = PDF::loadView('massive_pdf.generate', [
                            /* 'valor_declarado' => (integer)['valordeclarado'],
                            'aplica_contrapago' =>['aplicacontrapago'],
                            'peso_bruto' => (integer)['pesobruto'],
                            'unidad' =>['unidad'],
                            'dice_contener' =>['dicecontener'],
                            'observaciones' =>['observaciones'],
                            'peso' => (integer)['peso'],
                            'largo' => (integer)['largo'],
                            'ancho' => (integer)['ancho'],
                            'alto' => (integer)['alto'], */
                            'guide' => $guide,
                        ]);
            
                        $pdf->setPaper('a4', 'landscape');
                        
                        return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');
                
            }

            /* return response()->json([
                // back()->with('success', 'Excel guides imported successfully')
                'data' => 'success, Excel guides imported successfully',
            ], 201); */
                
        } catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
            $failures = $e->failures();

            foreach ($failures as $failure) {
                $failure->row(); // row that went wrong
                $failure->attribute(); // either heading key (if using heading row concern) or column index
                $failure->errors(); // Actual error messages from Laravel validator
                $failure->values(); // The values of the row that has failed.
            }
        }
    }
}
