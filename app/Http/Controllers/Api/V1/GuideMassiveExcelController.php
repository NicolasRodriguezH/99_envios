<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Imports\CollectionGuidesImport;
use App\Imports\GuidesImport;
use App\Imports\ReceiversImport;
use Maatwebsite\Excel\Excel;

class GuideMassiveExcelController extends Controller
{
    public function createMassiveGuides() {

        try {
            //$guia = (new GuidesImport)->import(request()->file('file'));
            //$destino = (new ReceiversImport)->import(request()->file('file'));
            $collection = (new CollectionGuidesImport)->import(request()->file('file'));

            if ($collection) {
                return response()->json([
                    //'data' => back()->with('success', 'Excel guides imported successfully')
                    'data' => 'success, Excel guides imported successfully'
                ], 201);
            }
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
