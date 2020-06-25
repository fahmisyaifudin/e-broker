<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Kriteria;

class Controller extends BaseController
{
    public function createRentalKriteria(Request $request){
        $input = $request->all();
        $kriterias = Kriteria::where('kode', $input['kode_kriteria'])->get();
        
        // foreach ($kriterias as $key => $kriteria) {
        //     if ($input['input_nilai'] >= $kriteria['interval_min'] && $input['input_nilai'] <= $kriteria['interval_max']) {
        //         $result = $kriteria;
        //     }
        // }
        

        return response()->json([
            'status' => 200,
            'message' => 'success'
        ], 200);
    }
}
