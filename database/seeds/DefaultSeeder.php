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
                    "jenis_truk" => "Suzuki New Carry",
                    "alamat" => "Jl Keputih Tegal Surabaya",
                    "long" => "112.7322998",
                    "lat" => "-7.3264187",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 2,
                    "nama" => "Tono Setyono",
                    "jenis_truk" => "Daihatsu Gran Max",
                    "alamat" => "Jl Medokan Semampir III Surabaya",
                    "long" => "112.7962998",
                    "lat" => "-7.3064177",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'), 
                ],
                [
                    'id' => 3,
                    "nama" => "Syarifudin Maulana",
                    "jenis_truk" => "Mitsubishi Colt T120SS",
                    "alamat" => "Jl Gubeng Timur Surabaya",
                    "long" => "112.7476048",
                    "lat" => "-7.2722327",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 4,
                    "nama" => "Bramastio Wahyudi",
                    "jenis_truk" => "Mitsubishi L300",
                    "alamat" => "Jl Pasar Turi Surabaya",
                    "long" => "112.7355568",
                    "lat" => "-7.2451687",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 5,
                    "nama" => "Dede Subandi",
                    "jenis_truk" => "Isuzu Traga Pick Up FD",
                    "alamat" => "Jl Babadan Rukun II Surabaya",
                    "long" => "112.7267268",
                    "lat" => "-7.2447747",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 6,
                    "nama" => "Galang Perkasa",
                    "jenis_truk" => "Mitsubishi Colt Diesel FE 71",
                    "alamat" => "Jl Manukan Lor 2 Surabaya",
                    "long" => "112.6625743",
                    "lat" => "-7.2599027",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 7,
                    "nama" => "Dede Pratama",
                    "jenis_truk" => "Tata LPT 407",
                    "alamat" => "Jl Gemblongan V Surabaya",
                    "long" => "112.7350433",
                    "lat" => "-7.2544327",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 8,
                    "nama" => "Dimas Septoaji",
                    "jenis_truk" => "Mitsubishi Colt Diesel FE 73",
                    "alamat" => "Jl Bhaskara Sari Surabaya",
                    "long" => "112.7965893",
                    "lat" => "-7.2671317",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 9,
                    "nama" => "Danang Utomo",
                    "jenis_truk" => "Hino Dutro 130 HD",
                    "alamat" => "Jl Raya Sedati Agung Sidoarjo",
                    "long" => "112.7594373",
                    "lat" => "-7.3832387",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 10,
                    "nama" => "Unggul Pambudi",
                    "jenis_truk" => "Isuzu Elf NLR 71 T",
                    "alamat" => "Jl Peterongan Utara Sidoarjo",
                    "long" => "112.6869833",
                    "lat" => "-7.3809557",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 11,
                    "nama" => "Dimas Saputra",
                    "jenis_truk" => "Tata LPT 813",
                    "alamat" => "Jl Kedanyang Gresik",
                    "long" => "112.6341383",
                    "lat" => "-7.1692247",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 12,
                    "nama" => "Sultan Pradana",
                    "jenis_truk" => "Tata LPT 1116",
                    "alamat" => "Jl Usman Sadar Gresik",
                    "long" => "112.6468083",
                    "lat" => "-7.1566927",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 13,
                    "nama" => "Muhammad Fikri",
                    "jenis_truk" => "Mitsubushi Fighter FN 61 FS",
                    "alamat" => "Jl Letkol Sumarjo Mojokerto",
                    "long" => "112.4331233",
                    "lat" => "-7.4632197",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 14,
                    "nama" => "Fajar Penggalih",
                    "jenis_truk" => "Hino Ranger FM 285 JD",
                    "alamat" => "Jl Teratai Mojokerto",
                    "long" => "112.4294413",
                    "lat" => "-7.4828517",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 15,
                    "nama" => "Taufan Ramadhan",
                    "jenis_truk" => "Isuzu Giga FVR 34 PD",
                    "alamat" => "Jl DR Soetomo Bangil",
                    "long" => "112.7852873",
                    "lat" => "-7.5993297",
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
                    "interval_max" =>  1.49,
                    "himpunan" => "Sangat Sedikit",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 2,
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 1.5,
                    "interval_max" =>  1.99,
                    "himpunan" => "Sedikit",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 3,
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 2,
                    "interval_max" =>  2.49,
                    "himpunan" => "Cukup Sedikit",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 4,
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 2.5,
                    "interval_max" =>  2.99,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 5,
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 3,
                    "interval_max" =>  4.99,
                    "himpunan" => "Cukup Banyak",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 6,
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 5,
                    "interval_max" =>  14.99,
                    "himpunan" => "Banyak",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 7,
                    "kode" =>  "C1",
                    "nama" =>  "Kapasitas Muatan",
                    "satuan" => "TON",
                    "keterangan" => "benefit",
                    "interval_min" => 15,
                    "interval_max" =>  40,
                    "himpunan" => "Sangat Banyak",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    'id' => 8,
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 0,
                    "interval_max" =>  1499,
                    "himpunan" => "Sangat Sedikit",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 9,
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 1500,
                    "interval_max" =>  1999,
                    "himpunan" => "Sedikit",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 10,
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 2000,
                    "interval_max" =>  2999,
                    "himpunan" => "Cukup Sedikit",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                    
                ],
                [
                    'id' => 11,
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 3000,
                    "interval_max" =>  3999,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 12,
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 4000,
                    "interval_max" =>  4999,
                    "himpunan" => "Cukup Banyak",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                    
                ],
                [
                    'id' => 13,
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 5000,
                    "interval_max" =>  5999,
                    "himpunan" => "Banyak",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                    
                ],
                [
                    'id' => 14,
                    "kode" => "C2",
                    "nama" => "Kapasitas Mesin",
                    "satuan" => "CC",
                    "keterangan" => "benefit",
                    "interval_min" => 6000,
                    "interval_max" =>  12000,
                    "himpunan" => "Sangat Banyak",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    'id' =>15,
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 0,
                    "interval_max" =>  239999,
                    "himpunan" => "Murah",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 16,
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 240000,
                    "interval_max" =>  349999,
                    "himpunan" => "Cukup Murah",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 17,
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 350000,
                    "interval_max" =>  449999,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' =>18,
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 450000,
                    "interval_max" =>  799999,
                    "himpunan" => "Cukup Mahal",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 19,
                    "kode"=> "C3",
                    "nama"=> "Harga Sewa",
                    "satuan" => "Rp",
                    "keterangan" => "cost",
                    "interval_min" => 800000,
                    "interval_max" =>  2000000,
                    "himpunan" => "Mahal",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    'id' => 20,
                    "kode"=> "C4",
                    "nama"=> "Tahun",
                    "satuan" => "",
                    "keterangan" => "benefit",
                    "interval_min" => 2000,
                    "interval_max" =>  2013,
                    "himpunan" => "Tua",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 21,
                    "kode"=> "C4",
                    "nama"=> "Tahun",
                    "satuan" => "",
                    "keterangan" => "benefit",
                    "interval_min" => 2014,
                    "interval_max" =>  2015,
                    "himpunan" => "Cukup Tua",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 22,
                    "kode"=> "C4",
                    "nama"=> "Tahun",
                    "satuan" => "",
                    "keterangan" => "benefit",
                    "interval_min" => 2016,
                    "interval_max" =>  2017,
                    "himpunan" => "Menengah",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 23,
                    "kode"=> "C4",
                    "nama"=> "Tahun",
                    "satuan" => "",
                    "keterangan" => "benefit",
                    "interval_min" => 2018,
                    "interval_max" =>  2019,
                    "himpunan" => "Cukup Baru",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 24,
                    "kode"=> "C4",
                    "nama"=> "Tahun",
                    "satuan" => "",
                    "keterangan" => "benefit",
                    "interval_min" => 2020,
                    "interval_max" =>  2021,
                    "himpunan" => "Baru",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],

                [
                    'id' => 25,
                    "kode"=> "C5",
                    "nama"=> "Jarak",
                    "satuan" => "Km",
                    "keterangan" => "cost",
                    "interval_min" => 0,
                    "interval_max" =>  4.99,
                    "himpunan" => "Dekat",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 26,
                    "kode"=> "C5",
                    "nama"=> "Jarak",
                    "satuan" => "Km",
                    "keterangan" => "cost",
                    "interval_min" => 5,
                    "interval_max" =>  9.99,
                    "himpunan" => "Cukup Dekat",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 27,
                    "kode"=> "C5",
                    "nama"=> "Jarak",
                    "satuan" => "Km",
                    "keterangan" => "cost",
                    "interval_min" => 10,
                    "interval_max" =>  14.99,
                    "himpunan" => "Sedang",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 28,
                    "kode"=> "C5",
                    "nama"=> "Jarak",
                    "satuan" => "Km",
                    "keterangan" => "cost",
                    "interval_min" => 15,
                    "interval_max" =>  29.99,
                    "himpunan" => "Cukup Jauh",
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ],
                [
                    'id' => 29,
                    "kode"=> "C5",
                    "nama"=> "Jarak",
                    "satuan" => "Km",
                    "keterangan" => "cost",
                    "interval_min" => 30,
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
                'input_nilai' => 1.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 2,
                'id_rental' => 1,
                'id_kriteria' => 8,
                'input_nilai' => 1462,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 3,
                'id_rental' => 1,
                'id_kriteria' => 16,
                'input_nilai' => 240000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 4,
                'id_rental' => 1,
                'id_kriteria' => 23,
                'input_nilai' => 2019,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 5,
                'id_rental' => 1,
                'id_kriteria' => 25,
                'input_nilai' => 3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 6,
                'id_rental' => 2,
                'id_kriteria' => 1,
                'input_nilai' => 1.2,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 7,
                'id_rental' => 2,
                'id_kriteria' => 8,
                'input_nilai' => 1300,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 8,
                'id_rental' => 2,
                'id_kriteria' => 15,
                'input_nilai' => 200000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 9,
                'id_rental' => 2,
                'id_kriteria' => 23,
                'input_nilai' => 2018,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 10,
                'id_rental' => 2,
                'id_kriteria' => 27,
                'input_nilai' => 13,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],


            [
                'id' => 11,
                'id_rental' => 3,
                'id_kriteria' => 2,
                'input_nilai' => 1.6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 12,
                'id_rental' => 3,
                'id_kriteria' => 9,
                'input_nilai' => 1500,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 13,
                'id_rental' => 3,
                'id_kriteria' => 15,
                'input_nilai' => 220000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 14,
                'id_rental' => 3,
                'id_kriteria' => 22,
                'input_nilai' => 2016,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 15,
                'id_rental' => 3,
                'id_kriteria' => 28,
                'input_nilai' => 16,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 16,
                'id_rental' => 4,
                'id_kriteria' => 4,
                'input_nilai' => 2.9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 17,
                'id_rental' => 4,
                'id_kriteria' => 10,
                'input_nilai' => 2477,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 18,
                'id_rental' => 4,
                'id_kriteria' => 16,
                'input_nilai' => 300000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 19,
                'id_rental' => 4,
                'id_kriteria' => 21,
                'input_nilai' => 2014,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 20,
                'id_rental' => 4,
                'id_kriteria' => 26,
                'input_nilai' => 6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 21,
                'id_rental' => 5,
                'id_kriteria' => 3,
                'input_nilai' => 2.4,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 22,
                'id_rental' => 5,
                'id_kriteria' => 10,
                'input_nilai' => 2499,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 23,
                'id_rental' => 5,
                'id_kriteria' => 16,
                'input_nilai' => 320000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 24,
                'id_rental' => 5,
                'id_kriteria' => 24,
                'input_nilai' => 2020,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 25,
                'id_rental' => 5,
                'id_kriteria' => 28,
                'input_nilai' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 26,
                'id_rental' => 6,
                'id_kriteria' => 5,
                'input_nilai' => 3.6,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 27,
                'id_rental' => 6,
                'id_kriteria' => 11,
                'input_nilai' => 3908,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 28,
                'id_rental' => 6,
                'id_kriteria' => 17,
                'input_nilai' => 400000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 29,
                'id_rental' => 6,
                'id_kriteria' => 21,
                'input_nilai' => 2015,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 30,
                'id_rental' => 6,
                'id_kriteria' => 27,
                'input_nilai' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 31,
                'id_rental' => 7,
                'id_kriteria' => 5,
                'input_nilai' => 3.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 32,
                'id_rental' => 7,
                'id_kriteria' => 10,
                'input_nilai' => 2956,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 33,
                'id_rental' => 7,
                'id_kriteria' => 17,
                'input_nilai' => 370000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 34,
                'id_rental' => 7,
                'id_kriteria' => 23,
                'input_nilai' => 2017,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 35,
                'id_rental' => 7,
                'id_kriteria' => 28,
                'input_nilai' => 24,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 36,
                'id_rental' => 8,
                'id_kriteria' => 5,
                'input_nilai' => 4.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 37,
                'id_rental' => 8,
                'id_kriteria' => 11,
                'input_nilai' => 3908,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 38,
                'id_rental' => 8,
                'id_kriteria' => 18,
                'input_nilai' => 450000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 39,
                'id_rental' => 8,
                'id_kriteria' => 20,
                'input_nilai' => 2013,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 40,
                'id_rental' => 8,
                'id_kriteria' => 27,
                'input_nilai' => 10,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 41,
                'id_rental' => 9,
                'id_kriteria' => 6,
                'input_nilai' => 5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 42,
                'id_rental' => 9,
                'id_kriteria' => 12,
                'input_nilai' => 4009,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 43,
                'id_rental' => 9,
                'id_kriteria' => 18,
                'input_nilai' => 490000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 44,
                'id_rental' => 9,
                'id_kriteria' => 22,
                'input_nilai' => 2016,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 45,
                'id_rental' => 9,
                'id_kriteria' => 28,
                'input_nilai' => 15,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 46,
                'id_rental' => 10,
                'id_kriteria' => 6,
                'input_nilai' => 5.1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 47,
                'id_rental' => 10,
                'id_kriteria' => 12,
                'input_nilai' => 4570,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 48,
                'id_rental' => 10,
                'id_kriteria' => 18,
                'input_nilai' => 500000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 49,
                'id_rental' => 10,
                'id_kriteria' => 23,
                'input_nilai' => 2018,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 50,
                'id_rental' => 10,
                'id_kriteria' => 28,
                'input_nilai' => 19,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 51,
                'id_rental' => 11,
                'id_kriteria' => 6,
                'input_nilai' => 8,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 52,
                'id_rental' => 11,
                'id_kriteria' => 13,
                'input_nilai' => 5675,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 53,
                'id_rental' => 11,
                'id_kriteria' => 18,
                'input_nilai' => 680000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 54,
                'id_rental' => 11,
                'id_kriteria' => 23,
                'input_nilai' => 2018,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 55,
                'id_rental' => 11,
                'id_kriteria' => 29,
                'input_nilai' => 32,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 56,
                'id_rental' => 12,
                'id_kriteria' => 6,
                'input_nilai' => 12,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 57,
                'id_rental' => 12,
                'id_kriteria' => 13,
                'input_nilai' => 5675,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 58,
                'id_rental' => 12,
                'id_kriteria' => 18,
                'input_nilai' => 750000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 59,
                'id_rental' => 12,
                'id_kriteria' => 24,
                'input_nilai' => 2020,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 60,
                'id_rental' => 12,
                'id_kriteria' => 28,
                'input_nilai' => 25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 61,
                'id_rental' => 13,
                'id_kriteria' => 7,
                'input_nilai' => 20,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 62,
                'id_rental' => 13,
                'id_kriteria' => 14,
                'input_nilai' => 7545,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 63,
                'id_rental' => 13,
                'id_kriteria' => 19,
                'input_nilai' => 1600000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 64,
                'id_rental' => 13,
                'id_kriteria' => 20,
                'input_nilai' => 2013,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 65,
                'id_rental' => 13,
                'id_kriteria' => 26,
                'input_nilai' => 7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 66,
                'id_rental' => 14,
                'id_kriteria' => 7,
                'input_nilai' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 67,
                'id_rental' => 14,
                'id_kriteria' => 14,
                'input_nilai' => 7684,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 68,
                'id_rental' => 14,
                'id_kriteria' => 19,
                'input_nilai' => 1800000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 69,
                'id_rental' => 14,
                'id_kriteria' => 21,
                'input_nilai' => 2015,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 70,
                'id_rental' => 14,
                'id_kriteria' => 28,
                'input_nilai' => 18,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 71,
                'id_rental' => 15,
                'id_kriteria' => 7,
                'input_nilai' => 21,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 72,
                'id_rental' => 15,
                'id_kriteria' => 14,
                'input_nilai' => 7790,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 73,
                'id_rental' => 15,
                'id_kriteria' => 19,
                'input_nilai' => 2000000,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 74,
                'id_rental' => 15,
                'id_kriteria' => 23,
                'input_nilai' => 2018,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 75,
                'id_rental' => 15,
                'id_kriteria' => 28,
                'input_nilai' => 22,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
        ]);

        DB::table('kriteria_fuzzy')->insert([
            [
                'id' => 1,
                'id_kriteria' => 1,
                'fuzzy_num_a' => 0.0,
                'fuzzy_num_b' => 0.0,
                'fuzzy_num_c' => 0.1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 2,
                'id_kriteria' => 2,
                'fuzzy_num_a' => 0.0,
                'fuzzy_num_b' => 0.1,
                'fuzzy_num_c' => 0.3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 3,
                'id_kriteria' => 3,
                'fuzzy_num_a' => 0.1,
                'fuzzy_num_b' => 0.3,
                'fuzzy_num_c' => 0.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 4,
                'id_kriteria' => 4,
                'fuzzy_num_a' => 0.3,
                'fuzzy_num_b' => 0.5,
                'fuzzy_num_c' => 0.7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 5,
                'id_kriteria' => 5,
                'fuzzy_num_a' => 0.5,
                'fuzzy_num_b' => 0.7,
                'fuzzy_num_c' => 0.9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 6,
                'id_kriteria' => 6,
                'fuzzy_num_a' => 0.7,
                'fuzzy_num_b' => 0.9,
                'fuzzy_num_c' => 1.0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 7,
                'id_kriteria' => 7,
                'fuzzy_num_a' => 0.9,
                'fuzzy_num_b' => 1.0,
                'fuzzy_num_c' => 1.0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 8,
                'id_kriteria' => 8,
                'fuzzy_num_a' => 0.0,
                'fuzzy_num_b' => 0.0,
                'fuzzy_num_c' => 0.1,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 9,
                'id_kriteria' => 9,
                'fuzzy_num_a' => 0.0,
                'fuzzy_num_b' => 0.1,
                'fuzzy_num_c' => 0.3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 10,
                'id_kriteria' => 10,
                'fuzzy_num_a' => 0.1,
                'fuzzy_num_b' => 0.3,
                'fuzzy_num_c' => 0.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 11,
                'id_kriteria' => 11,
                'fuzzy_num_a' => 0.3,
                'fuzzy_num_b' => 0.5,
                'fuzzy_num_c' => 0.7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 12,
                'id_kriteria' => 12,
                'fuzzy_num_a' => 0.5,
                'fuzzy_num_b' => 0.7,
                'fuzzy_num_c' => 0.9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 13,
                'id_kriteria' => 13,
                'fuzzy_num_a' => 0.7,
                'fuzzy_num_b' => 0.9,
                'fuzzy_num_c' => 1.0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 14,
                'id_kriteria' => 14,
                'fuzzy_num_a' => 0.9,
                'fuzzy_num_b' => 1.0,
                'fuzzy_num_c' => 1.0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 15,
                'id_kriteria' => 15,
                'fuzzy_num_a' => 0.1,
                'fuzzy_num_b' => 0.1,
                'fuzzy_num_c' => 0.3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 16,
                'id_kriteria' => 16,
                'fuzzy_num_a' => 0.1,
                'fuzzy_num_b' => 0.3,
                'fuzzy_num_c' => 0.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 17,
                'id_kriteria' => 17,
                'fuzzy_num_a' => 0.3,
                'fuzzy_num_b' => 0.5,
                'fuzzy_num_c' => 0.7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 18,
                'id_kriteria' => 18,
                'fuzzy_num_a' => 0.5,
                'fuzzy_num_b' => 0.7,
                'fuzzy_num_c' => 0.9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 19,
                'id_kriteria' => 19,
                'fuzzy_num_a' => 0.7,
                'fuzzy_num_b' => 0.9,
                'fuzzy_num_c' => 0.9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 20,
                'id_kriteria' => 20,
                'fuzzy_num_a' => 0.0,
                'fuzzy_num_b' => 0.0,
                'fuzzy_num_c' => 0.25,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 21,
                'id_kriteria' => 21,
                'fuzzy_num_a' => 0.0,
                'fuzzy_num_b' => 0.25,
                'fuzzy_num_c' => 0.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 22,
                'id_kriteria' => 22,
                'fuzzy_num_a' => 0.25,
                'fuzzy_num_b' => 0.5,
                'fuzzy_num_c' => 0.75,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 23,
                'id_kriteria' => 23,
                'fuzzy_num_a' => 0.5,
                'fuzzy_num_b' => 0.75,
                'fuzzy_num_c' => 1.0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 24,
                'id_kriteria' => 24,
                'fuzzy_num_a' => 0.75,
                'fuzzy_num_b' => 1.0,
                'fuzzy_num_c' => 1.0,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],

            [
                'id' => 25,
                'id_kriteria' => 25,
                'fuzzy_num_a' => 0.1,
                'fuzzy_num_b' => 0.1,
                'fuzzy_num_c' => 0.3,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 26,
                'id_kriteria' => 26,
                'fuzzy_num_a' => 0.1,
                'fuzzy_num_b' => 0.3,
                'fuzzy_num_c' => 0.5,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 27,
                'id_kriteria' => 27,
                'fuzzy_num_a' => 0.3,
                'fuzzy_num_b' => 0.5,
                'fuzzy_num_c' => 0.7,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 28,
                'id_kriteria' => 28,
                'fuzzy_num_a' => 0.5,
                'fuzzy_num_b' => 0.7,
                'fuzzy_num_c' => 0.9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ],
            [
                'id' => 29,
                'id_kriteria' => 29,
                'fuzzy_num_a' => 0.7,
                'fuzzy_num_b' => 0.9,
                'fuzzy_num_c' => 0.9,
                'created_at' => date('Y-m-d H:m:s'),
                'updated_at' => date('Y-m-d H:m:s')
            ]
        ]);

    }
}
