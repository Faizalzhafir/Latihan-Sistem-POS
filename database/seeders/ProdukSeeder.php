<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Produk::create([
            'products_id'   =>  'KDBRG010001',
            'products_name' =>  'Aqua 1 Liter',
            'buying_price'  =>  'Rp15000',
            'selling_price' =>  'Rp17000',
        ]);
    }
}
