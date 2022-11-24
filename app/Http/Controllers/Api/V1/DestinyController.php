<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Destiny;
use Illuminate\Http\Request;

class DestinyController extends Controller
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
            return response()->json([
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
            $destiny = new Destiny();
                $destiny->destiny = $request->Destiny;
                $destiny->save();
    
                return response()->json([
                    'new_status' => $destiny->name
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
    public function show(Destiny $destiny)
    {
        return $destiny;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Destiny $destiny)
    {
        try {
            $destiny->update([
                $destiny->destiny = $request->Destiny
            ]);

            return response()->json([
                'status_updated' => $destiny->id
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
            $destiny = new Destiny();
            $destiny->destroy($id);
    
            return response()->json([
                'status_deleted' => "Status $destiny->name deleted"
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
