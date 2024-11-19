<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class BarangSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 2,
                'barang_kode' => 'beng',
                'barang_nama' => 'Bem-Beng',
                'harga_jual' => 4000,
                'harga_beli' => 3500 
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 2,
                'barang_kode' => 'ctos',
                'barang_nama' => 'Chitos',
                'harga_jual' => 4000,
                'harga_beli' => 2000 
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 1,
                'barang_kode' => 'pcl',
                'barang_nama' => 'Pensil',
                'harga_jual' => 1500,
                'harga_beli' => 1000 
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 1,
                'barang_kode' => 'ppn',
                'barang_nama' => 'Pulpen',
                'harga_jual' => 1500,
                'harga_beli' => 1000 
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 1,
                'barang_kode' => 'pgs',
                'barang_nama' => 'Pengaris',
                'harga_jual' => 200,
                'harga_beli' => 1000 
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 4,
                'barang_kode' => 'ac',
                'barang_nama' => 'AC-LG',
                'harga_jual' => 120000,
                'harga_beli' => 100000 
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 4,
                'barang_kode' => 'tv',
                'barang_nama' => 'TV-LG',
                'harga_jual' => 120000,
                'harga_beli' => 100000
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 3,
                'barang_kode' => 'pie',
                'barang_nama' => 'Pop-Ice',
                'harga_jual' => 3000,
                'harga_beli' => 2500 
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 3,
                'barang_kode' => 'mnl',
                'barang_nama' => 'Mineral',
                'harga_jual' => 3000,
                'harga_beli' => 2500 
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 3,
                'barang_kode' => 'mnl',
                'barang_nama' => 'Mineral',
                'harga_jual' => 3000,
                'harga_beli' => 2500 
            ],
        ];
        DB::table('m_barang')->insert($data);
    }
}
