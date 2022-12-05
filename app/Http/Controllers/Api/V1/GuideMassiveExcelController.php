<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Imports\CollectionGuidesImport;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class GuideMassiveExcelController extends Controller
{
    public function createMassiveGuides() {
        
        try {
            /* Deberia convertir esta collection en los parametros de la colleccion misma */
            (new CollectionGuidesImport)->import(request()->file('file'));

            //$rowable->collection();
            /* $arr = array($rowable);
            $len_rowable = count($arr); */
            $rowable = new CollectionGuidesImport();
            $rowable->collection->row;
            $rowable->toArray();
            
            //dd($len_rowable);

            /* while ($len_rowable > 0) {
                $len_rowable--;
                
                $pdf = PDF::loadView('massive_pdf.generate', [
                    'len_rowable' => $len_rowable
                ]);
    
                $pdf->setPaper('a4', 'landscape');
                
                return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');
            } */

            foreach ($rowable as $row) {
                //$guide = $row;                
                $pdf = PDF::loadView('massive_pdf.generate', [
                    'row' => $row
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
