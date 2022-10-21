<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Guide;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OwnGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
                $guide = new Guide();
                $guide->id_cliente_credito = $request->IdClienteCredito;
                $guide->codigo_convenio_remitente = $request->CodigoConvenioRemitente;
                $guide->id_tipo_entrega = $request->IdTipoEntrega;
                $guide->aplica_contrapago = $request->AplicaContrapago;
                $guide->id_servicio = $request->IdServicio;
                $guide->peso = $request->Peso;
                $guide->largo = $request->Largo;
                $guide->ancho = $request->Ancho;
                $guide->alto = $request->Alto;
                $guide->dice_contener = $request->DiceContener;
                $guide->valor_declarado = $request->ValorDeclarado;
                $guide->id_tipo_envio = $request->IdTipoEnvio;
                $guide->id_forma_pago = $request->IdFormaPago;
                $guide->numero_pieza = $request->NumeroPieza;
                $guide->descripcion_tipo_entrega = $request->DescripcionTipoEntrega;
                $guide->nombre_tipo_envio = $request->NombreTipoEnvio;
                $guide->codigo_convenio = $request->CodigoConvenio;
                $guide->id_sucursal = $request->IdSucursal;
                $guide->id_cliente = $request->IdCliente;
                $guide->observaciones = $request->Observaciones;
                            
                $guide->save();

                if($guide) {
                    return response()->json([
                        'datos_res' => "envia_y_salva_data_respuesta?"
                    ], 201);
                }

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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
