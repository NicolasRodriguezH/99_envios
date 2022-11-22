<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Imports\GuidesImport;
use App\Models\Guide;
use App\Models\Receiver;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Excel;
use Maatwebsite\Excel\Facades\Excel as FacadesExcel;

class GuideMassiveExcelController extends Controller
{
    public function createMassiveGuides() {

        //$data = FacadesExcel::import($path, function($reader) {});
        //(new GuidesImport)->toCollection(request()->file('document'));
        (new GuidesImport)->toCollection(request()->file('file'));


        /* if ($request->hasFile('document')) {
            $path = $request->file('document')
            ->getRealPath();
            
            (new GuidesImport)->toCollection($path);

            if(!empty($data)) {
                $data = $data->toArray();
                for ($i=0; $i < count($data); $i++) { 
                    $dataImport[] = $data[$i];
                }
            }
            
            //Guide::insert($dataImport);
            //Receiver::insert($dataImport);
        } */
        return response()->json([
            //'data' => back()->with('success', 'Excel guides imported successfully')
            'data' => 'success, Excel guides imported successfully'
        ], 201);
    }
}
