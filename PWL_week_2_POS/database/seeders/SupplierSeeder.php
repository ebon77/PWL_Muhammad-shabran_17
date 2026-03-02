<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $data = [
            ['supplier_id' => 1, 'supplier_kode' => 'S01', 'supplier_nama' => 'Indofood', 'supplier_alamat' => 'Jakarta'],
            ['supplier_id' => 2, 'supplier_kode' => 'S02', 'supplier_nama' => 'Unilever', 'supplier_alamat' => 'Surabaya'],
            ['supplier_id' => 3, 'supplier_kode' => 'S03', 'supplier_nama' => 'Wings Group', 'supplier_alamat' => 'Gresik'],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
