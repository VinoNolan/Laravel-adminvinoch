<?php

namespace Database\Seeders;

use App\Models\Pemesanan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pemesanan::create([
            "pesanan" => "Nama Pesanan 2",
            "quantity" => 5,
            "totalharga" => 2000000.00,
            "namapembeli" => "Yanti",
            "email" => "yanti123@gmail.com",
            "kabupaten" => "Boyolali",
            "kecamatan" => "Sawit",
            "alamatlengkap" => "Rt 03 Rw 04",
            "tipepembayaran" => "Transfer bank BCA",
            "catatan" => "Hubungi saya jam 1 siang ya",
        ]);
    }
}
