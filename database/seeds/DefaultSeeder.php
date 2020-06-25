<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('petani')->insert(
            [
                [
                    'nama' => "Doni Setiawan",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    "nama" => 'Eko Suhartono',
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ]
            ]
        );

        DB::table('rental')->insert(
            [
                [
                    "nama" => "Budi Setiawan",
                    "jenis_truk" => "Mobil Pickup",
                    "alamat" => "Jl Keputih Tegal Surabaya",
                    "long" => "-0.92415",
                    "lat" => "-27.40278",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    "nama" => "Tono Setyono",
                    "jenis_truk" => "Colt Diesel",
                    "alamat" => "Jl Medokan Semampir Surabaya",
                    "long" => "-0.92415",
                    "lat" => "-27.40278",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'), 
                ],
                [
                    "nama" => "Dendi Sulistyo",
                    "jenis_truk" => "Truk Fuso Engkel",
                    "alamat" => "Jl Medokan Semampir Surabaya",
                    "long" => "-0.92415",
                    "lat" => "-27.40278",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ]
            ]
        );
        
        DB::table('kriteria')->insert(
            [
                [
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 0,
                    "interval_max" =>  2,
                    "himpunan" => "Sedikit",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 2,
                    "interval_max" =>  8,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 8,
                    "interval_max" =>  25,
                    "himpunan" => "Banyak",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 0,
                    "interval_max" =>  2000,
                    "himpunan" => "Kecil",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                    
                ],

                [
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 2000,
                    "interval_max" =>  4000,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                    
                ],

                [
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 4000,
                    "interval_max" =>  12000,
                    "himpunan" => "Besar",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                    
                ],

                [
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 0,
                    "interval_max" =>  300000,
                    "himpunan" => "Kecil",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 300000,
                    "interval_max" =>  1000000,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 1000000,
                    "interval_max" =>  3000000,
                    "himpunan" => "Besar",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    "kode"=> "C4",
                    "nama"=> "Jarak",
                    "satuan" => "KM",
                    "keterangan" => "cost",
                    "interval_min" => 0,
                    "interval_max" =>  20,
                    "himpunan" => "Dekat",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    "kode"=> "C4",
                    "nama"=> "Jarak",
                    "satuan" => "KM",
                    "keterangan" => "cost",
                    "interval_min" => 20,
                    "interval_max" =>  60,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    "kode"=> "C4",
                    "nama"=> "Jarak",
                    "satuan" => "KM",
                    "keterangan" => "cost",
                    "interval_min" => 60,
                    "interval_max" =>  100,
                    "himpunan" => "Jauh",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ]
            ]
                );

    }
}
