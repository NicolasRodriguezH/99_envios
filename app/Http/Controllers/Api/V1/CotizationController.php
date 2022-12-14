<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Destiny;
use App\Models\Guide;
use App\Models\Origin;
use App\Models\Receiver;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Global_;

class CotizationController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            /* Segun lo hablado seria asi */
            /* Pero deberia incluir el valor delcarado en caso de que AplicaContrapago sea true, segun yo */

            if ($request->AplicaContrapago === true) {
                    $origin = new Origin();
                    $cotizacion = $origin->find($request->OriginId)->valor_flete;

                    //$cotizacion = $request->ValorDeclarado + $cotizacion; // Como aca que se incluye ValorDeclarado

                    /* $percentage = $cotizacion * 3; // Porcentaje 3 seria variable - SE MANEJA DEL OTRO LADO
                    $percentage /= 100;
                    $cotizacion += $percentage; */

                return response()->json([
                    'success' => true,
                    'cotizacion' => round($cotizacion, 0),
                ], 201);
            }

            return response()->json([
                'success' => $request->AplicaContrapago
            ], 200);
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
