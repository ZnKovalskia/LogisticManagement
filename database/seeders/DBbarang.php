<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DBbarang extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('barang')->insert([
            'kode_barang' => 'BRG001',
            'nama_barang' => 'Barang Contoh',
            'quantity' => 10,
            'barang_masuk' => 0,
            'barang_keluar' => 0,
        ]);
    }
}
