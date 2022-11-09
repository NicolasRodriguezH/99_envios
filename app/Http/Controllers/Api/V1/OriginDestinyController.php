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
                $origin->origin = $request->origin;
                $origin->save();
    
            $destiny = new Destiny();
                $destiny->destiny = $request->destiny;
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
            $origin->update($request->all());
            $origin->save();

            $destiny->update($request->all());
            $destiny->save();

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
    public function destroy(Origin $origin, Destiny $destiny)
    {
        [$origin->delete(), $destiny->delete()];
    }
}
