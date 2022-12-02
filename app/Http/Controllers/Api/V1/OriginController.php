<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Origin;
use Illuminate\Http\Request;

class OriginController extends Controller
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
            return response()->json([
                $origin->all()
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
    
                return response()->json([
                    'new_origin' => $origin->origin
                ], 201);
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
    public function show(Origin $origin)
    {
        return $origin;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Origin $origin)
    {
        try {
            $origin->update([
                $origin->origin = $request->Origin
            ]);

            return response()->json([
                'status_updated' => $origin->origin
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
    public function destroy($id)
    {
        try {
            $origin = new Origin();
            $origin->destroy($id);
    
            return response()->json([
                'status_deleted' => "Status $origin->name deleted"
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
