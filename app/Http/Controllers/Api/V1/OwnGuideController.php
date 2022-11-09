<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Guide;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\OwnGuideRequest;
use App\Models\Destiny;
use App\Models\Origin;
use App\Models\OriginDestiny;
use App\Models\RapiRadicado;
use App\Models\Receiver;
use App\Models\Status;
use App\Models\StatusGuide;
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
        try {
            $origin = new Origin();
            /* Como se le deberian mandar? retornando una view? o con json? PREGUNTAR A CHRIS */

            return response()->json([
                'origen' => $origin->all()
            ]);

        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(OwnGuideRequest $request)
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
                $guide->shipping_pickup = $request->shipping_pickup;

                //$guide->status_id = $request->status_id;
                $status = new StatusGuide();
                $guide->status_id = $status->id = 1;
                //$guide->status_id = $guide->first()->status->id = 1;

                /* $origin = new Origin();
                $guide->origin_id = $origin->id = 1; */
                $guide->origin_id = $request->origin_id;

                /* $destiny = new Destiny();
                $guide->destiny_id = $destiny->id = 5; */
                $guide->destiny_id = $request->destiny_id;

                $guide->save();

                $receiver = new Receiver();
                $receiver->tipo_documento = $request->Destinatario['tipoDocumento'];
                $receiver->numero_documento = $request->Destinatario['numeroDocumento'];
                $receiver->nombre = $request->Destinatario['nombre'];
                $receiver->primer_apellido = $request->Destinatario['primerApellido'];
                $receiver->segundo_apellido = $request->Destinatario['segundoApellido'];
                $receiver->telefono = $request->Destinatario['telefono'];
                $receiver->direccion = $request->Destinatario['direccion'];
                $receiver->id_destinatario = $request->Destinatario['idDestinatario'];
                $receiver->id_remitente = $request->Destinatario['idRemitente'];
                $receiver->id_localidad = $request->Destinatario['idLocalidad'];
                $receiver->codigo_convenio = $request->Destinatario['CodigoConvenio'];
                $receiver->convenio_destinatario = $request->Destinatario['ConvenioDestinatario'];
                $receiver->correo = $request->Destinatario['correo'];
                $receiver->guide_id = $guide->id;
                
                $receiver->save();
                
                $rapiradicado = new RapiRadicado();
                $rapiradicado->numero_de_folios = $request->RapiRadicado['numerodeFolios'];
                $rapiradicado->codigo_rapi_radicado = $request->RapiRadicado['CodigoRapiRadicado'];
                $rapiradicado->guide_id = $guide->id;
        
                $rapiradicado->save();

                /* TIENE QUE HABER UN CAMPO origin_id en guides e igual con destiny_id */
        
                if( $request ) {
                    return response()->json([
                        'data' => [
                            'res' => "guia generada satisfactoriamente",
                            'guia' => $guide->id,
                            'contrapago' => $guide->aplica_contrapago,
                            'contenido' => $guide->dice_contener,
                            'peso' => $guide->peso,
                            'largo' => $guide->largo,
                            'ancho' => $guide->ancho,
                            'alto' => $guide->alto,
                            'valor' => $guide->valor_declarado,
                            'observaciones' => $guide->observaciones,
                            'nombre' => $receiver->nombre,
                            'primerApellido' => $receiver->primer_apellido,
                            'telefono' => $receiver->telefono,                        
                            'direccion' => $receiver->direccion,
                            'correo' => $receiver->correo,
                            'status_id' => [$guide->status->name, $guide->status->color],
                            'origen y destino' => [$guide->origin->origin, $guide->destiny->destiny]
                        ]
                    ], 201);
                }

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
