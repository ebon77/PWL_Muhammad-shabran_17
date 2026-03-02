<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
{
    $data = [];
    $detail_id = 1;
    for ($i = 1; $i <= 10; $i++) { // Untuk setiap transaksi
        for ($j = 1; $j <= 3; $j++) { // Beli 3 barang per transaksi
            $data[] = [
                'detail_id' => $detail_id++,
                'penjualan_id' => $i,
                'barang_id' => rand(1, 10),
                'harga' => 15000, // Harga dummy sederhana
                'jumlah' => rand(1, 5),
            ];
        }
    }
    DB::table('t_penjualan_detail')->insert($data);
}
}
