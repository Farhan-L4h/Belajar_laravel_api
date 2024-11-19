<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'kategori_id' => 1, 
                'kategori_kode' => 'ATK' , 
                'kategori_nama' => 'Alat Tulis Kerja'
            ],
            [
                'kategori_id' => 2,
                'katgori_kode' => 'MKN',
                'kategori_nama' => 'Makanan',
            ],
            [
                'kategori_id' => 3,
                'katgori_kode' => 'MMN',
                'kategori_nama' => 'Minuman',
            ],
            [
                'kategori_id' => 4,
                'katgori_kode' => 'ETK',
                'kategori_nama' => 'Elektronik',
            ],
            [
                'kategori_id' => 5,
                'katgori_kode' => 'PKN',
                'kategori_nama' => 'Pakayan',
            ],
        ];
        DB::table('m_kategori')->insert($data);
    }
}
