<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Imports\CollectionGuidesImport;
use App\Models\Guide;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use LengthException;
use Maatwebsite\Excel\Concerns\ToArray;

class GuideMassiveExcelController extends Controller
{
    public function createMassiveGuides() {

        try {
            $mg = (new CollectionGuidesImport)->import(request()->file('file'));
            
            //$g = array($mg);
                
                //$guide = $g;
                $pdf = PDF::loadView('massive_pdf.generate', [
                    'mg->row' => $mg->row
                ]);
    
                $pdf->setPaper('a4', 'landscape');
                
                return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');



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
