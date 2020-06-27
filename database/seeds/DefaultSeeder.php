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
                    'id' => 1,
                    'nama' => "Doni Setiawan",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 2,
                    "nama" => 'Eko Suhartono',
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ]
            ]
        );

        DB::table('rental')->insert(
            [
                [
                    'id' => 1,
                    "nama" => "Budi Setiawan",
                    "jenis_truk" => "Mobil Pickup",
                    "alamat" => "Jl Keputih Tegal Surabaya",
                    "long" => "-0.92415",
                    "lat" => "-27.40278",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 2,
                    "nama" => "Tono Setyono",
                    "jenis_truk" => "Colt Diesel",
                    "alamat" => "Jl Medokan Semampir Surabaya",
                    "long" => "-0.92415",
                    "lat" => "-27.40278",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'), 
                ],
                [
                    'id' => 3,
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
                    'id' => 1,
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
                    'id' => 2,
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
                    'id' => 3,
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
                    'id' => 4,
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
                    'id' => 5,
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
                    'id' => 6,
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
                    'id' => 7,
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
                    'id' => 8,
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
                    'id' => 9,
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
                    'id' => 10,
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
                    'id' => 11,
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
                    'id' => 12,
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

        DB::table('rental_kriteria')->insert([
            [
                'id' => 1,
                'id_rental' => 1,
                'id_kriteria' => 2,
                'input_nilai' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 2,
                'id_rental' => 1,
                'id_kriteria' => 4,
                'input_nilai' => 1800,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 3,
                'id_rental' => 1,
                'id_kriteria' => 7,
                'input_nilai' => 300000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 4,
                'id_rental' => 1,
                'id_kriteria' => 10,
                'input_nilai' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 6,
                'id_rental' => 2,
                'id_kriteria' => 2,
                'input_nilai' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 7,
                'id_rental' => 2,
                'id_kriteria' => 6,
                'input_nilai' => 5000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 8,
                'id_rental' => 2,
                'id_kriteria' => 9,
                'input_nilai' => 1500000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 9,
                'id_rental' => 2,
                'id_kriteria' => 10,
                'input_nilai' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 10,
                'id_rental' => 3,
                'id_kriteria' => 3,
                'input_nilai' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 11,
                'id_rental' => 3,
                'id_kriteria' => 5,
                'input_nilai' => 2500,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 12,
                'id_rental' => 3,
                'id_kriteria' => 9,
                'input_nilai' => 1200000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 13,
                'id_rental' => 3,
                'id_kriteria' => 11,
                'input_nilai' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
        ]);

    }
}
