<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SavingMatrikController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $sv_matrik;
    public $s_matrik;

    public function __construct()
    {
    
    }

    public function countDistance($route, $index){
        $i = 0;
        $j = 1;
        $sum = 0;

        if ($index != 0) {
            while (isset($route[$j])) {
                $sum += $this->s_matrik[$route[$i]][$route[$j]];
                $i++;
                $j++;
            }
        }else{
            $sum = 2 * $this->s_matrik[$route[$i]][$route[$j]];
        }
       
        return $sum;
    }

    public function index(Request $request){
        $input = $request->all();

        for ($i=0; $i < count($input); $i++) { 
            for ($j=0; $j < count($input); $j++) { 
                $s_matrik[$i][$j] = sqrt(pow(($input[$i]['lat'] - $input[$j]['lat']), 2) + pow(($input[$i]['long'] - $input[$j]['long']), 2))* 111.319;
            }
        }

        $this->s_matrik = $s_matrik;

        for ($i=0; $i < count($input); $i++) { 
            for ($j=0; $j < count($input); $j++) {
                if ($i != $j) {
                    $sv_matrik[$i][$j] = $s_matrik[0][$j] + $s_matrik[0][$i] - $s_matrik[$i][$j];
                    $key = sprintf("%.4f", $sv_matrik[$i][$j]);
                    $temp[$key] = [$i, $j];
                }else{
                    $sv_matrik[$i][$j] = 0;
                } 
                
            }
        }

        $this->sv_matrik = $sv_matrik;

        krsort($temp, SORT_NATURAL);

        $route = [0, 0];
        $index = 0;
        foreach ($temp as $key => $value) {
            $i = array_search($value[0], $route);
            $j = array_search($value[1], $route);
            
           if ((!($i && $j)) && floatval($key) > 0 ) {
               $route_op1 = $route;
               $route_op2 = $route;
               if ($i) {
                   $start = $i;
                   array_splice( $route_op1, $start, 0, $value[1] );
                   array_splice( $route_op2, $start + 1, 0, $value[1] );
               }else if($j){
                   $start = $j;
                   array_splice( $route_op2, $start, 0, $value[0] );
                   array_splice( $route_op1, $start + 1, 0, $value[0] );
               }else{
                    $start = (int) count($route) / 2;

                    array_splice( $route_op1, $start, 0, $value[1] );
                    array_splice( $route_op1, $start + 1, 0, $value[0] );              

                    array_splice( $route_op2, $start, 0, $value[0] );
                    array_splice( $route_op2, $start + 1, 0, $value[1] );
               }


               $distance_op1 = $this->countDistance($route_op1, $index);
               $distance_op2 = $this->countDistance($route_op2, $index);


               if ($distance_op1 <= $distance_op2) {
                  $route = $route_op1;
               }else{
                $route = $route_op2;
               }
               
               $index++;
           }else{
            continue;
           }
        }

        return response()->json(['matrik_jarak' => $s_matrik, 'saving_matrik' => $sv_matrik, 'sort' => $temp, 'route' => $route]);
    }

    //
}
