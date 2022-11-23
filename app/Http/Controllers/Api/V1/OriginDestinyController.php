<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Destiny;
use App\Models\Origin;
use Illuminate\Http\Request;

class OriginDestinyController extends Controller
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
            $destiny = new Destiny();
            return response()->json([
                $origin->all(),
                $destiny->all()
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
    public function store(Request $request)
    {
        try {
            $origin = new Origin();
                $origin->origin = $request->Origin;
                $origin->save();
    
            $destiny = new Destiny();
                $destiny->destiny = $request->Destiny;
                $destiny->save();
    
                return [$origin, $destiny];
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
    public function show(Origin $origin, Destiny $destiny)
    {
        return [$origin, $destiny];
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Origin $origin, Destiny $destiny)
    {
        try {
            $origin->update([
                $origin->origin = $request->Origin
            ]);

            $destiny->update([
                $destiny->destiny = $request->Destiny
            ]);

            return [$origin, $destiny];
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
    public function destroy($origin_destiny)
    {
        try {
            $origin = new Origin();
            $origin->destroy($origin_destiny);

            /* $destiny = new Destiny();
            $destiny->delete($origin_destiny); */
    
            return "Element's deleted";
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
