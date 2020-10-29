<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Models\Kriteria;
use App\Models\Rental;
use App\Models\RentalKriteria;
use Illuminate\Support\Arr;

class Controller extends BaseController
{

    protected function successResponse($data = null)
    {
        return response()->json([
            'message' => 'success',
            'data' => $data
        ], 200);
    }

    protected function errorResponse($message, $status)
    {
        return response()->json([
            'message' => $message
        ], $status);
    }
    
    public function createRentalKriteria(Request $request){
        $input = $request->all();
        $kriterias = Kriteria::where('kode', $input['kode_kriteria'])->get();
        

        return response()->json([
            'status' => 200,
            'message' => 'success'
        ], 200);
    }


    private function matrikTernomalisasi($matriks){
        $index = 0;       
        foreach ($matriks as $key => $value) {
            if ($index == 0) {
                for ($i=0; $i < count($value); $i++) { 
                    $pembagi[$i] = 0;
                 }
            }
            $index++;
        }

        foreach ($matriks as $keys => $value) {
            foreach ($value as $key => $val) { 
                $pembagi[$key] += pow($val, 2) ; 
            }
        }

        foreach ($pembagi as $key => $value) {
            $sqrtPembagi[] = sqrt($value);
        }

        //FINISH PEMBAGI
        $c_matriks = $matriks;
        
        foreach ($c_matriks as &$v) {
            $index = 0;
            foreach ($v as &$p) {
               $p = $p/$sqrtPembagi[$index];
               $index++;
            }
        }
        return $c_matriks;
        
    }

    private function matrikTerbobot($matriks, $bobot){
        $c_matriks = $matriks;

        foreach ($c_matriks as &$v) {
            $index = 0;
            foreach ($v as &$p) {
               $p = $p*$bobot[$index];
               $index++;
            }
        }

        return $c_matriks;
    }

    public function getKeterangan($rentalKriteria){
        foreach ($rentalKriteria as $key => $value) {
            $relation[$value['id_rental']][] = $value['kriteria']['keterangan'];  
        }

        $index = 0;
        foreach ($relation as $key => $value) {
            if ($index == 0) {
                for ($i=0; $i < count($value); $i++) { 
                    $keterangan[$i] = $value[$i];
                 }
            }
            $index++;
        }

        return $keterangan;
    }
    
    private function idealPositif($matriksTerbobot, $keterangan){
        foreach ($matriksTerbobot as $keys => $value) {
            $index = 0;
           foreach ($value as $key => $val) {
               $temp[$index][] = $val;
               $index++;
           }
        }

        foreach ($temp as $keys => $value) {   
            if($keterangan[$keys] == 'benefit'){
                    $idealPositif[$keys] = max($value);
            }else{
                $idealPositif[$keys] = min($value);
            }   
        }

       return $idealPositif;
    }

    private function idealNegatif($matriksTerbobot, $keterangan){
        foreach ($matriksTerbobot as $keys => $value) {
            $index = 0;
           foreach ($value as $key => $val) {
               $temp[$index][] = $val;
               $index++;
           }
        }

        foreach ($temp as $keys => $value) {   
            if($keterangan[$keys] == 'benefit'){
                    $idealNegatif[$keys] = min($value);
            }else{
                $idealNegatif[$keys] = max($value);
            }   
        }

       return $idealNegatif;
    }

    public function dPlus($matriks, $idealPositif){
        $c_matriks = $matriks;
        foreach ($c_matriks as $key => &$v) {
            $index = 0;
            foreach ($v as &$p) {
               $p = pow($idealPositif[$index] - $v[$index], 2);
               $index++;
            }
        }

        foreach ($c_matriks as $key => $value) {
            $temp[$key] = sqrt(array_sum($value));
        }

        return $temp;

    }

    public function dMin($matriks, $idealNegatif){
        $c_matriks = $matriks;
        foreach ($c_matriks as $key => &$v) {
            $index = 0;
            foreach ($v as &$p) {
               $p = pow($v[$index] - $idealNegatif[$index], 2);
               $index++;
            }
        }

        foreach ($c_matriks as $key => $value) {
            $temp[$key] = sqrt(array_sum($value));
        }

        return $temp;
    }

    public function nilaiPreferensi($dPlus, $dMin){
        foreach ($dMin as $key => $value) {
            $nilaiPreferensi[$key] = $value / ($value + $dPlus[$key]);
        }

        return $nilaiPreferensi;
    }

    public function rangking($nilaiPreferensi){
        $arrNilaiPreferensi = (array) $nilaiPreferensi;      
        arsort($arrNilaiPreferensi);
        
        foreach ($arrNilaiPreferensi as $key => $value) {
            $rangking[] = $key;
        }

        return $rangking;
    }


    public function hitungTopsis(Request $request){
        $input = $request->all();

        $bobot = $input['bobot'];

        $rentalKriteria = RentalKriteria::with('kriteria')->get();
        // dd($rentalKriteria);

        foreach ($rentalKriteria as $key => $value) {
            $matriks[$value['id_rental']][] = $value['input_nilai'];  
        }
        
        $keterangan = $this->getKeterangan($rentalKriteria);
        // dd($keterangan);
        $matriksTernormalisasi = $this->matrikTernomalisasi($matriks);
        $matriksTerbobot = $this->matrikTerbobot($matriksTernormalisasi, $bobot);
        $idealNegatif = $this->idealNegatif($matriksTerbobot, $keterangan);
        $idealPositif = $this->idealPositif($matriksTerbobot, $keterangan);

        $dPlus = $this->dPlus($matriksTerbobot, $idealPositif);
        $dMin = $this->dMin($matriksTerbobot, $idealNegatif);

        $nilaiPreferensi = $this->nilaiPreferensi($dPlus, $dMin);

        $rangking = $this->rangking($nilaiPreferensi);

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'matrik' => $matriks,
            'matrikTernormalisasi' => $matriksTernormalisasi,
            'matrikTerbobot' => $matriksTerbobot,
            'idealPositif' => $idealPositif,
            'idealNegatif' => $idealNegatif,
            'dPlus' => $dPlus,
            'dMin' => $dMin,
            'nilaiPreferensi' => $nilaiPreferensi,
            'rangking' => $rangking
        ], 200);

    }
    public function getKendaraan(){
        $rental = Rental::select('id', 'jenis_truk')->get();
        $names = Arr::pluck($rental, 'jenis_truk', 'id');
        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => $names
        ]);
    }
}
