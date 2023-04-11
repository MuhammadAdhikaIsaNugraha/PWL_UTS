<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tabel_barang')->insert([
            'id_barang' => '1',
            'kode_barang' => 'PRD001',
            'nama_barang' => 'Indomie',
            'kategori_barang' => 'Makanan',
            'harga' => '3000',
            'qty' => '100'
        ]);
        DB::table('tabel_barang')->insert([
            'id_barang' => '2',
            'kode_barang' => 'PRD002',
            'nama_barang' => 'Pocari Sweat',
            'kategori_barang' => 'Minuman',
            'harga' => '6000',
            'qty' => '50'
        ]);

        
    }
}
