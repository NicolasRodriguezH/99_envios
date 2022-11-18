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
                $origin = new Origin();
                $valor_flete = $origin->find(2)->valor_flete;
                
                $arraySum = $request->ValorDeclarado + $valor_flete;

                $average = $arraySum * 3;
                $average /= 100;

                $arraySum += $average;

            return response()->json([
                'success' => true,
                'cotizacion' => round($arraySum, 0),
            ], 201);
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
