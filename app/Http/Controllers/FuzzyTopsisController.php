<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\RentalKriteria;

class FuzzyTopsisController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    public function index(Request $request){
        $input = $request->all();

        // $bobot = $input['bobot'];

        $rentalKriteria = RentalKriteria::with('kriteria')->get();

        foreach ($rentalKriteria as $key => $value) {
           dd($value);
        }


        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $matriks
        ], 200);
    }

    //
}
