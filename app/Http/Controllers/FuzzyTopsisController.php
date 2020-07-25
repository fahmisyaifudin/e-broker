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

    public function matrikTernormalisasi($matriks, $keterangan){
            // dd($matriks);
            foreach ($matriks as $key => $a) {
                foreach ($a as $k => $b) {
                    $c_val[$k][] = $a[$k][2];
                    $a_val[$k][] = $a[$k][0];
                }
            }

            $c_matriks = $matriks;
            foreach ($c_matriks as $key => &$a) {
                foreach ($a as $k => &$b) {
                   if($keterangan[$k] == 'benefit'){
                        $max_c = max($c_val[$k]);
                        $temp = $b;

                        $b[0] = $temp[0]/$max_c;
                        $b[1] = $temp[1]/$max_c;
                        $b[2] = $temp[2]/$max_c;
                    
                   }else if($keterangan[$k] == 'cost'){
                        $min_a = min($a_val[$k]);
                        $temp = $b;

                        $b[0] = $min_a/$temp[2];
                        $b[1] = $min_a/$temp[1];
                        $b[2] = $min_a/$temp[0];
                   }
                }
            }            

            return $c_matriks;
    }

    public function matrikTerbobot($matrik, $bobot){
        foreach ($matrik as $key => &$a) {
            foreach ($a as $k => &$b) {
                $b[0] = $b[0] * $bobot[$k][0];
                $b[1] = $b[1] * $bobot[$k][1];
                $b[2] = $b[2] * $bobot[$k][2];
            }
        }

        return $matrik;
    }


    private function idealPositif($matriks){
        // dd($matriks);
        foreach ($matriks as $key => $a) {
            foreach ($a as $k => $b) {
                $temp_a[$k][0][] = $a[$k][0];
                $temp_a[$k][1][] = $a[$k][1];
                $temp_a[$k][2][] = $a[$k][2];
            }
        }

       foreach ($temp_a as $key => $val) {
           $idealPositif[$key][0] = max($val[0]);
           $idealPositif[$key][1] = max($val[1]);
           $idealPositif[$key][2] = max($val[2]);
       }

        return $idealPositif;
    }

    private function idealNegatif($matriks){
        foreach ($matriks as $key => $a) {
            foreach ($a as $k => $b) {
                $temp_a[$k][0][] = $a[$k][0];
                $temp_a[$k][1][] = $a[$k][1];
                $temp_a[$k][2][] = $a[$k][2];
            }
        }

       foreach ($temp_a as $key => $val) {
           $idealNegatif[$key][0] = min($val[0]);
           $idealNegatif[$key][1] = min($val[1]);
           $idealNegatif[$key][2] = min($val[2]);
       }

        return $idealNegatif;
    }

    public function dPlus($matriks, $idealPositif){
        foreach ($matriks as $key => &$a) {
            foreach ($a as $k => &$b) {
                $b = sqrt((1/3) * (pow($b[0] - $idealPositif[$k][0], 2) + pow($b[1] - $idealPositif[$k][1], 2) + pow($b[2] - $idealPositif[$k][2], 2)));   
            }
        }

        foreach ($matriks as $key => &$a) {
            $a = array_sum($a);
        }

        return $matriks;
    }

    public function dMin($matriks, $idealNegatif){
        foreach ($matriks as $key => &$a) {
            foreach ($a as $k => &$b) {
                $b = sqrt((1/3) * (pow($b[0] - $idealNegatif[$k][0], 2) + pow($b[1] - $idealNegatif[$k][1], 2) + pow($b[2] - $idealNegatif[$k][2], 2)));   
            }
        }

        foreach ($matriks as $key => &$a) {
            $a = array_sum($a);
        }

        return $matriks;
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


    public function index(Request $request){
        $input = $request->all();

        // $bobot = $input['bobot'];

        $rentalKriteria = RentalKriteria::with('kriteria.fuzzy')->get();

        $keterangan = $this->getKeterangan($rentalKriteria);
        $bobot = $input['bobot'];
        // dd($bobot);
        foreach ($rentalKriteria as $key => $value) {
            $matriks[$value['id_rental']][] = [
                $value['kriteria']['fuzzy']['fuzzy_num_a'],
                $value['kriteria']['fuzzy']['fuzzy_num_b'],
                $value['kriteria']['fuzzy']['fuzzy_num_c']
            ]; 
        }

        $matrikTernormalisasi = $this->matrikTernormalisasi($matriks, $keterangan);
        $matriksTerbobot = $this->matrikTerbobot($matrikTernormalisasi,$bobot);
        $idealPositif = $this->idealPositif($matriksTerbobot);
        $idealNegatif = $this->idealNegatif($matriksTerbobot);
        $dPlus = $this->dPlus($matriksTerbobot, $idealPositif);
        $dMin = $this->dMin($matriksTerbobot, $idealNegatif);

        $nilaiPreferensi = $this->nilaiPreferensi($dPlus, $dMin);

        $rangking = $this->rangking($nilaiPreferensi);
        

        return response()->json([
            'status' => 200,
            'message' => 'success',
            'data' => [
                'matrik' => $matriks,
                'matrikTernormalisasi' => $matrikTernormalisasi,
                'matrikTerbobot' => $matriksTerbobot,
                'idealPositif' => $idealPositif,
                'idealNegatif' => $idealNegatif,
                'dPlus' => $dPlus,
                'dMin' => $dMin,
                'nilaiPreferensi' => $nilaiPreferensi,
                'rangking' => $rangking
            ]
        ], 200);
    }

    //
}
