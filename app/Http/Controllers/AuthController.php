<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Firebase\JWT\JWT;
use App\User;
use App\Models\Rental;
use App\Models\Petani;
use App\Models\RentalKriteria;
use App\Models\Kriteria;

class AuthController extends Controller
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

    protected function jwt(User $user) {
      $payload = [
          'iss' => "lumen-jwt", // Issuer of the token
          'sub' => $user->id, // Subject of the token
          'iat' => time(), // Time when JWT was issued. 
          'exp' => time() + 30*24*60*60 // Expiration time
      ];
      
      // As you can see we are passing `JWT_SECRET` as the second parameter that will 
      // be used to decode the token in the future.
      return JWT::encode($payload, env('JWT_SECRET'));
  } 


    public function login(Request $request){
      try {
        $this->validate($request, [
          'email' => 'required|string',
          'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return $this->errorResponse('Username does not exist', 400);
        }

        if (Hash::check($request->password, $user->password)) {
            return $this->successResponse(['user' => $user, 'token' => $this->jwt($user)]);  
        }
        
        return $this->errorResponse('Password or username wrong', 400);

      } catch (\Exception $e) {
        return $this->errorResponse($e, 500);
      }
    }

    public function petaniRegister(Request $request){
        try {
          $input = $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
            'nama' => 'required|string'
          ]);
  
          DB::beginTransaction();
  
          $user = new User();
          $user->email = $input['email'];
          $user->password =  Hash::make($input['password']);
          $user->level = 'PETANI';
          $user->save();
  
          $petani = new Petani();
          $petani->id_user = $user->id;
          $petani->nama = $input['nama'];
          $petani->save();

          DB::commit();

          return $this->successResponse(['user' => $user, 'petani' => $petani]); 

        } catch (\Exception $e) {
          DB::rollBack();
          return $this->errorResponse($e, 500);
        }
        
    }

    public function rentalRegister(Request $request){
      try {
          $input = $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
            'nama' => 'required|string',
            'jenis_truk' => 'required|string',
            'alamat' => 'required|string',
            'long' => 'required|string',
            'lat' => 'required|string',
             //spesifikasi
             'kapasitas_muatan' => 'required|numeric',
             'kapasitas_mesin' => 'required|numeric',
             'harga_sewa' => 'required|integer',
             'tahun' => 'required|integer'
          ]);

          DB::beginTransaction();
          $user = new User();
          $user->email = $input['email'];
          $user->password =  Hash::make($input['password']);
          $user->level = 'RENTAL';
          $user->save();

          $rental = new Rental();
          $rental->id_user = $user->id;
          $rental->nama = $input['nama'];
          $rental->jenis_truk = $input['jenis_truk'];
          $rental->alamat = $input['alamat'];
          $rental->long = $input['long'];
          $rental->lat = $input['lat'];
          $rental->save();

          $kriteria = Kriteria::all();

          foreach ($kriteria as $value) {
            if ($value->kode == 'C1') {
                if ($input['kapasitas_muatan'] >= $value->interval_min && $input['kapasitas_muatan'] <= $value->interval_max) {
                  $rentalKriteria = new RentalKriteria();
                  $rentalKriteria->id_rental = $rental->id;
                  $rentalKriteria->id_kriteria = $value->id;
                  $rentalKriteria->input_nilai = $input['kapasitas_muatan'];
                  $rentalKriteria->save();
                }
            }else if ($value->kode == 'C2') {
              if ($input['kapasitas_mesin'] >= $value->interval_min && $input['kapasitas_mesin'] <= $value->interval_max) {
                $rentalKriteria = new RentalKriteria();
                $rentalKriteria->id_rental = $rental->id;
                $rentalKriteria->id_kriteria = $value->id;
                $rentalKriteria->input_nilai = $input['kapasitas_mesin'];
                $rentalKriteria->save();
              }
            }else if ($value->kode == 'C3') {
              if ($input['harga_sewa'] >= $value->interval_min && $input['harga_sewa'] <= $value->interval_max) {
                $rentalKriteria = new RentalKriteria();
                $rentalKriteria->id_rental = $rental->id;
                $rentalKriteria->id_kriteria = $value->id;
                $rentalKriteria->input_nilai = $input['harga_sewa'];
                $rentalKriteria->save();
              }
            }else if ($value->kode == 'C4') {
              if ($input['tahun'] >= $value->interval_min && $input['tahun'] <= $value->interval_max) {
                $rentalKriteria = new RentalKriteria();
                $rentalKriteria->id_rental = $rental->id;
                $rentalKriteria->id_kriteria = $value->id;
                $rentalKriteria->input_nilai = $input['tahun'];
                $rentalKriteria->save();
              }
            }
          }

          DB::commit();

          return $this->successResponse(['user' => $user, 'rental' => $rental]); 

      } catch (\Exception $e) {
          DB::rollBack();
          return $this->errorResponse($e, 500);
      }
    }

    //
}
