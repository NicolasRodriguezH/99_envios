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
            /* Calcular valor_flete mas contrapago de ser elegido */
            /* Al cliente solo le muestra el valor del flete, independientemente del valor declarado */

            /* Si no aplica contrapago se le cobra solo el flete = varia */

            if ($request->AplicaContrapago === true) {
                    $origin = new Origin();
                    $valor_flete = $origin->find($request->OriginId)->valor_flete;
                    
                    //$cotizacion = $request->ValorDeclarado + $valor_flete;
                    //$valor_flete = $origin->valor_flete;

                    $percentage = $valor_flete * 3; // Porcentaje 3 es variable - SE MANEJA DEL OTRO LADO
                    $percentage /= 100;

                    $valor_flete += $percentage;

                return response()->json([
                    'success' => true,
                    'cotizacion' => round($valor_flete, 0),
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
