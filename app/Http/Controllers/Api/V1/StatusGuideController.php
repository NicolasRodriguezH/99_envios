<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\StatusGuide;
use Illuminate\Http\Request;

class StatusGuideController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $status = new StatusGuide();
            return response()->json([
                $status->all()
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
            $status = new StatusGuide();
            $status->name = $request->Name;
            $status->color = $request->Color;
            $status->save();
    
            return response()->json([
                'new_status' => $status->name
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
    public function show(StatusGuide $status)
    {
        return $status;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StatusGuide $status)
    {
        try {
            $status->update([
                $status->name = $request->Name,
                $status->color = $request->Color
            ]);
    
            return response()->json([
                'status_updated' => $status->id
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
    public function destroy(StatusGuide $status)
    {
        try {
            $status->delete();
            return response()->json([
                'status_deleted' => "Status $status->name deleted"
            ], 200);
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
