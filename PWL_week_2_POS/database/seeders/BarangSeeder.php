<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
   public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'B01', 'barang_nama' => 'Indomie Goreng', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 2, 'kategori_id' => 1, 'supplier_id' => 1, 'barang_kode' => 'B02', 'barang_nama' => 'Indomie Kari Ayam', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 3, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'B03', 'barang_nama' => 'Pepsodent 190g', 'harga_beli' => 10000, 'harga_jual' => 12000],
            ['barang_id' => 4, 'kategori_id' => 2, 'supplier_id' => 2, 'barang_kode' => 'B04', 'barang_nama' => 'Lifebuoy Soap', 'harga_beli' => 3500, 'harga_jual' => 4500],
            ['barang_id' => 5, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'B05', 'barang_nama' => 'Ale-Ale', 'harga_beli' => 1000, 'harga_jual' => 1500],
            ['barang_id' => 6, 'kategori_id' => 3, 'supplier_id' => 3, 'barang_kode' => 'B06', 'barang_nama' => 'Sedaap Mie Soto', 'harga_beli' => 2500, 'harga_jual' => 3000],
            ['barang_id' => 7, 'kategori_id' => 4, 'supplier_id' => 1, 'barang_kode' => 'B07', 'barang_nama' => 'Pop Mie', 'harga_beli' => 4500, 'harga_jual' => 5500],
            ['barang_id' => 8, 'kategori_id' => 4, 'supplier_id' => 2, 'barang_kode' => 'B08', 'barang_nama' => 'Rexona Men', 'harga_beli' => 15000, 'harga_jual' => 18000],
            ['barang_id' => 9, 'kategori_id' => 5, 'supplier_id' => 3, 'barang_kode' => 'B09', 'barang_nama' => 'Sapu Ijuk', 'harga_beli' => 20000, 'harga_jual' => 25000],
            ['barang_id' => 10, 'kategori_id' => 5, 'supplier_id' => 3, 'barang_kode' => 'B10', 'barang_nama' => 'Ember Plastik', 'harga_beli' => 12000, 'harga_jual' => 15000],
        ];
        DB::table('m_barang')->insert($data);
    }
}
