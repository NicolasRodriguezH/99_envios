<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Destiny;
use App\Models\Origin;
use Illuminate\Http\Request;

class OriginDestinyController extends Controller
{

    /* ESTE CONTROLADOR SE ELIMINARÍA */

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $origin = new Origin();
            $destiny = new Destiny();
            return response()->json([
                $origin->all(),
                $destiny->all()
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
    public function store(Request $request)
    {
        try {
            $origin = new Origin();
                $origin->origin = $request->Origin;
                $origin->save();
    
            $destiny = new Destiny();
                $destiny->destiny = $request->Destiny;
                $destiny->save();
    
                return response()->json([
                    'data' => [$origin, $destiny]
                ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    /* public function originDestroy($id)
    {
        try {
            $origin = new Origin();
            $origin->destroy($id);
    
            return "Element origin deleted";
        } catch (\Throwable $th) {
            throw $th;
        }
    }

    public function destinyDestroy($id)
    {
        try {
            $destiny = new Destiny();
            $destiny->destroy($id);
    
            return "Element destiny deleted";
        } catch (\Throwable $th) {
            throw $th;
        }
    } */
}
