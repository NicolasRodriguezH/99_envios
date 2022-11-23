<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\OwnGuideRequest;
use App\Models\Guide;
use App\Models\StatusGuide;
use Illuminate\Http\Request;

class ShipmentController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $shipments = new Guide();

                return response()->json([
                    'mis_envios' => $shipments->all([   
                        'dice_contener', 
                        'status_id',
                        'peso', 
                        'largo', 
                        'ancho', 
                        'alto', 
                        'aplica_contrapago',
                        'valor_declarado',
                        'created_at',
                        'urlguide'
                    ]),
                ]);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Guide $shipment)
    {
        try {
            return response()->json([
                'data' => [
                    'mis_envios' => [
                        'seguimiento' => $shipment->dice_contener,
                        'estado' => $shipment->status->name,
                        'destino' => [
                            $shipment->receiver->nombre, 
                            $shipment->receiver->direccion
                        ],
                        'envio' => [
                            $shipment->peso, 
                            $shipment->largo, 
                            $shipment->alto, 
                            $shipment->ancho],
                        'aplica contrapago' => $shipment->aplica_contrapago,
                        'guia valor' => $shipment->valor_declarado,
                        'usuario' => [
                            $shipment->created_at, 
                            $shipment->urlguide
                        ],
                    ],
                ]
            ]);   
        } catch (\Throwable $th) {
            throw $th;
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Guide $shipment, Request $request)
    {
        try {
            $shipment->update([
                $shipment->status_id = $request->StatusId
            ]);

            return response()->json([
                'success' => $shipment->status_id
            ], 200);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Guide $guide)
    {
        try {
            $guide->delete();
            return "Guide deleted";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
