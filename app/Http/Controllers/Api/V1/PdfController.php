<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Guide;
use App\Models\Receiver;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class PdfController extends Controller
{
    public function store(Request $request)
    {
        /* MIRAR SI LO QUE SE LE ENVIA DE INFO SI ES EL $request->all() */
        try {
            $pdf = PDF::loadView('pdf.generate', $request->all());
            dd($pdf);
            return $pdf->download('guia_generada.pdf')->stream('guia_generada.pdf');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}