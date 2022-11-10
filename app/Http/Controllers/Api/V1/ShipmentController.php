<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
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
                    'data' => [
                        'mis_envios' => $shipments->all([   
                            'id_sucursal', 
                            'status_id',
                            'peso', 
                            'largo', 
                            'ancho', 
                            'alto', 
                            'aplica_contrapago',
                            'valor_declarado',
                            'created_at',
                            'id_cliente'
                        ]),
                    ]
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
                        'seguimiento' => $shipment->id_sucursal,
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
                            $shipment->id_cliente
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
    public function update(Request $request, Guide $guide)
    {
        try {
            $guide->update($request->all());
            $guide->save();

            return $guide;
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
