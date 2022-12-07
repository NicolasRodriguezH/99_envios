<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Imports\CollectionGuidesImport;
use App\Models\Guide;
use App\Models\Receiver;
use Barryvdh\DomPDF\Facade\Pdf as PDF;
use Maatwebsite\Excel\Facades\Excel as Excel;

class GuideMassiveExcelController extends Controller
{
    public function createMassiveGuides() {
        try {
            /* Deberia convertir esta collection en los parametros de la colleccion misma */
            //$import = (new CollectionGuidesImport)->import(request()->file('file'));

            $import = new CollectionGuidesImport;
            Excel::import($import, request()->file('file'));

            /* for ($i=0; $i < $import->getRowCount(); $i++) { 

                $guide = $import->getData();

                //dd($guide);
                $pdf = PDF::loadView('massive_pdf.generate', [
                    'guide' => $guide                    
                ]);    
                $pdf->setPaper('a4', 'landscape');                
                return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');
            } */
            $guides = $import->getData();
            //$receiver = $import->getData();
            //dd($guides);

            foreach ($guides as $guide) {
                $pdf = PDF::loadView('massive_pdf.generate', [
                    'guide' => $guide,                    
                    //'receiver' => $receiver                    
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
