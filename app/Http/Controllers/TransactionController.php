<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Transaksi;
use App\Models\OrderLokasi;
use App\Models\Petani;
use App\Models\Rental;
use App\Models\Rating;

class TransactionController extends Controller
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
        //
    }

    public function view($id){
        try {
            $transaction = Transaksi::where('id', $id)->with('location')->first();

            $rute = $this->savingMatrik($transaction['location']);
            
            for ($i=0; $i < 5; $i++) { 
                $route[$i]['longitude'] = $transaction['location'][$rute[$i]]['longitude'];
                $route[$i]['latitude'] = $transaction['location'][$rute[$i]]['latitude'];
                $route[$i]['alamat'] = $transaction['location'][$rute[$i]]['alamat'];
                $route[$i]['kg_pick'] = $transaction['location'][$rute[$i]]['kg_pick'];
            }

            $transaction['rute'] = $route;
            
            return $this->successResponse($transaction, 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);   
        }
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

    public function savingMatrik($input){

        for ($i=0; $i < count($input); $i++) { 
            for ($j=0; $j < count($input); $j++) { 
                $s_matrik[$i][$j] = sqrt(pow(($input[$i]['latitude'] - $input[$j]['latitude']), 2) + pow(($input[$i]['longitude'] - $input[$j]['longitude']), 2))* 111.319;
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

        return $route;
    }

    public function create(Request $request){
        try {
            $input = $this->validate($request, [
                'lokasi' => 'required',
            ]);
    
            DB::beginTransaction();
            
            $petani = Petani::where('id_user', $request->identity)->first();

            $transaction = new Transaksi();
            $transaction->id_petani = $petani['id'];
            $transaction->status = 'Menunggu';
            $transaction->save();
            
            if (is_array($input['lokasi'])) {
                foreach ($input['lokasi'] as $key => $value) {
                    $orderLokasi = new OrderLokasi();
                    $orderLokasi->id_transaksi = $transaction->id;
                    $orderLokasi->longitude = $value['longitude'];
                    $orderLokasi->latitude = $value['latitude'];
                    $orderLokasi->kg_pick = $value['kg_pick'];
                    $orderLokasi->alamat = $value['alamat'];
                    $orderLokasi->save();
                }
            }

            DB::commit();

            return $this->successResponse($transaction, 200);
        } catch (\Exception $e) {
            DB::rollback();
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    public function create_2(Request $request){
        try {
            $input = $this->validate($request, [
                'id_transaksi' => 'required',
                'id_rental' => 'required'
            ]);

            $transaction = Transaksi::find($input['id_transaksi']);
            $transaction->id_rental = $input['id_rental'];
            $transaction->save();
          
            return $this->successResponse(null, 200);
        } catch (\Exception $e) {
            DB::rollback();
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    public function accept($id)
    {
        try {
            $transaction = Transaksi::find($id);
            $transaction->status = 'Diproses';
            $transaction->save();

            return $this->successResponse(null, 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    public function finish($id)
    {
        try {
            $transaction = Transaksi::find($id);
            $transaction->status = 'Selesai';
            $transaction->save();

            return $this->successResponse(null, 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    public function giveRating(Request $request)
    {
        try {
            $input = $this->validate($request, [
                'id_rental' => 'required',
                'rating' => 'required|numeric',
            ]);

            $petani = Petani::where('id_user', $request->identity)->first();

            $rating = new Rating();
            $rating->id_rental = $input['id_rental'];
            $rating->id_petani = $petani['id'];
            $rating->nilai = $input['rating'];
            $rating->save();

            return $this->successResponse($rating, 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    public function list(Request $request)
    {
        try {
            $petani = Petani::where('id_user', $request->identity)->first();
            $rental = Rental::where('id_user', $request->identity)->first();


            if ($petani) 
                $transaction = Transaksi::where('id_petani', $petani['id'])->get();
            else
                $transaction = Transaksi::where('id_rental', $rental['id'])->get();

            return $this->successResponse($transaction, 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }

    public function detailRental(Request $request, $id)
    {
        try {
            $petani = Petani::where('id_user', $request->identity)->first();
            $rental = Rental::where('id', $id)
                        ->with(['rental_kriteria' =>function($query) use ($petani){
                            $query->where('id_petani', null)->orWhere('id_petani', $petani['id']);
                        }, 'rental_kriteria.kriteria'])->first();
            return $this->successResponse($rental, 200);
        } catch (\Exception $e) {
            return $this->errorResponse($e->getMessage(), 500);
        }
    }
}
