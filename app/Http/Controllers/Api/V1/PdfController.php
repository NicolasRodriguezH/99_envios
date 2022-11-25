<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use App\Models\Receiver;
use Barryvdh\DomPDF\Facade as PDF;

class PdfController extends Controller
{
    public function generatePDF($id)
    {
        try {
            $guide = Guide::find($id);
            $receiver = Receiver::find($id);

            $pdf = PDF::loadView('pdf.generate', [
                'guide' => $guide,
                'receiver' => $receiver,
            ]);

            $pdf->setPaper('a4', 'landscape');

            
            return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');
            /* return response()->json([
                'download' => $pdf->download('guia_generada.pdf').$pdf->stream('guia_generada.pdf')
            ], 200); */

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}