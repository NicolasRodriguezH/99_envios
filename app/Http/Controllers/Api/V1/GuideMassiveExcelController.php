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
            /* Deberia convertir esta collection en los parametros de la colleccion misma */
            (new CollectionGuidesImport)->import(request()->file('file'));
            
            return response()->json([
                // back()->with('success', 'Excel guides imported successfully')
                'data' => 'success, Excel guides imported successfully',
            ], 201);
                
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
