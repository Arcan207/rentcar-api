<?php

namespace Database\Seeders;

use App\Models\Mobil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Mobil::create([
            "gambar" => "gambar1.jpg",
            "pemilik" => "Arya",
            "kota" => "Balikpapan",
            "merk" => "Toyota Grand New Avanza",
            "harga" => 500000,
            "plat" => "KT 1010 DT",
            "warna" => "Putih",
            "tahun" => "2012",
            "transmisi" => "automatic"
        ]);
    }
}
