<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
{
    $data = [];
    for ($i = 1; $i <= 10; $i++) {
        $data[] = [
            'stok_id' => $i,
            'supplier_id' => ($i % 3) + 1, // Berputar antara supplier 1, 2, 3
            'barang_id' => $i,
            'user_id' => 1, // Admin
            'stok_tanggal' => now(),
            'stok_jumlah' => 100,
        ];
    }
    DB::table('t_stok')->insert($data);
}
}
