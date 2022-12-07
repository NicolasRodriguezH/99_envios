try {
    $mg = (new CollectionGuidesImport)->import(request()->file('file'));
    
    //$g = array($mg);
        
        //$guide = $g;
        $pdf = PDF::loadView('massive_pdf.generate', [
            'mg->row' => $mg->row
        ]);

        $pdf->setPaper('a4', 'landscape');
        
        return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');



    /* return response()->json([
        // back()->with('success', 'Excel guides imported successfully')
        'data' => 'success, Excel guides imported successfully',
    ], 201); */
        
} catch (\Maatwebsite\Excel\Validators\ValidationException $e) {
    $failures = $e->failures();

    foreach ($failures as $failure) {
        $failure->row(); // row that went wrong
        $failure->attribute(); // either heading key (if using heading row concern) or column index
        $failure->errors(); // Actual error messages from Laravel validator
        $failure->values(); // The values of the row that has failed.
    }
}

--

        try {
            $mg = (new CollectionGuidesImport)->import(request()->file('file'));
            
            /* Deberia convertir esta collection en los parametros de la colleccion misma */

            if ($mg) {
                //$guide = new Guide();
                $receiver = new Receiver();

                $collections = (new CollectionGuidesImport());
                //$collection->collection->row;
                
                    
                    $guides = $collections;

                    //$guide = new Guide();
                    //$mg->collection();

                    foreach ($guides as $guide) {
                        
                        $pdf = PDF::loadView('massive_pdf.generate', [
                            'guide' => $guide,
                        ]);
            
                        $pdf->setPaper('a4', 'landscape');
                        
                        return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');
                    }
                
            }

            /* return response()->json([
                // back()->with('success', 'Excel guides imported successfully')
                'data' => 'success, Excel guides imported successfully',
            ], 201); */
                
        } catch

        ----

        {
            $guide = (new CollectionGuidesImport)->import(request()->file('file'));

            /* Deberia convertir esta collection en los parametros de la colleccion misma; Como? */
                

            while ((new CollectionGuidesImport)->import(request()->file('file')) != false) {
                $pdf = PDF::loadView('massive_pdf.generate', [
                    'guide' => $guide
                ]);
    
                $pdf->setPaper('a4', 'landscape');
                
               return $pdf->download('guia_generada.pdf');//.$pdf->stream('guia_generada.pdf');
            }

            
            /* return response()->json([
                // back()->with('success', 'Excel guides imported successfully')
                'data' => 'success, Excel guides imported successfully',
            ], 201); */
        }