<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Guide;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\V1\OwnGuideRequest;
use App\Models\Destiny;
use App\Models\Origin;
use App\Models\Receiver;
use App\Models\StatusGuide;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

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
            $destiny = new Destiny();
            $origin = new Origin();

            return response()->json([
                'origen' => $origin->all(),
                'destinos' => $destiny->all()
            ], 200);

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
                $guide->valor_declarado = $request->ValorDeclarado;
                $guide->tipo_envio_id = $request->TipoEnvioId;
                $guide->aplica_contrapago = $request->AplicaContrapago;
                $guide->peso_bruto = $request->PesoBruto;
                $guide->unidad = $request->Unidad;
                $guide->dice_contener = $request->DiceContener;
                $guide->observaciones = $request->Observaciones;
                $guide->peso = $request->Peso;
                $guide->largo = $request->Largo;
                $guide->ancho = $request->Ancho;
                $guide->alto = $request->Alto;
                $guide->recogida_envio = $request->RecogidaEnvio;
                $guide->urlguide = $request->UrlGuide;
                $guide->origin_id = $request->OriginId;
                $guide->destiny_id = $request->DestinyId;
                //$novelty = new Novelty();
                //$guide->novelty_id = $novelty->novelty = 3;
                //$guide->novelty_id = $request->NovedadId;

                $guide->user_id = 1;
                //$guide->user_id = auth()->id();


                //Status
                /* Primera opcion: Se asigna el request un campo status_id, se envia valor por el request, y el front podria poner un campo status_id en hidden si lo desea */

                //$guide->status_id = $request->status_id;

                /* Segunda opcion: seria solo llamando al modelo de status y asignando el valor id 1 que es igual a "creado", "REVISAR CUAL PODRIA USAR MEJOR"*/
                
                $status = new StatusGuide();
                $guide->status_id = $status->id = 1;

                $guide->save();

                $receiver = new Receiver();
                $receiver->tipo_documento = $request->Destinatario['tipoDocumento'];
                $receiver->numero_documento = $request->Destinatario['numeroDocumento'];
                $receiver->nombre = $request->Destinatario['nombre'];
                $receiver->primer_apellido = $request->Destinatario['primerApellido'];
                $receiver->segundo_apellido = $request->Destinatario['segundoApellido'];
                $receiver->telefono = $request->Destinatario['telefono'];
                $receiver->correo = $request->Destinatario['correo'];
                $receiver->direccion = $request->Destinatario['direccion'];
                $receiver->guide_id = $guide->id;
                
                $receiver->save();
        
                if( !empty($guide && $request) ) {

                    


                    $pdf = PDF::loadView('pdf.generate', [
                        'guide' => $guide,/* 
                        'code' => $code */
                    ]);
        
                    $pdf->setPaper('a4', 'landscape');
                    
                    return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');

                   /*  return response()->json([
                        'data' => [
                            'success' => 'PDF generado y descargado con exito',
                            'user' => $guide->user->name,
                            'guia' => $guide->id,
                            'contrapago' => $guide->aplica_contrapago,
                            'contenido' => $guide->dice_contener,
                            'peso' => $guide->peso,
                            'largo' => $guide->largo,
                            'ancho' => $guide->ancho,
                            'alto' => $guide->alto,
                            'valor' => $guide->valor_declarado,
                            'observaciones' => $guide->observaciones,
                            'nombre_destinatario' => $guide->receiver->nombre,
                            'primerApellido' => $guide->receiver->primer_apellido,
                            'telefono' => $guide->receiver->telefono,                        
                            'direccion' => $guide->receiver->direccion,
                            'correo' => $guide->receiver->correo,
                            'urlguide' => $guide->urlguide,
                            'status_id' => [$guide->status->name, $guide->status->color],
                            'origen y destino' => [$guide->origin->origin, $guide->destiny->destiny],
                            'tipo_envio_id' => $guide->tipoEnvio->nombre,
                            //'novedad' => $guide->novelty->novelty,
                        ],
                    ], 201); */
                }

        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
