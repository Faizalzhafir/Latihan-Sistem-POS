<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'customer_name' =>  'Ilallika',
            'phone'         =>  '+6288888888',
            'live'          =>  'Jati',
            'status'        =>  'Pelanggan Tetap',
        ]);
    }
}
