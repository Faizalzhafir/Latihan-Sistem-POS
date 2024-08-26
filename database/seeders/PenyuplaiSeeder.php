<?php

namespace Database\Seeders;

use App\Models\Penyuplai;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PenyuplaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Penyuplai::create([
            'supplier_name' =>  'PT. Allahumma',
            'telephone'         =>  '+628796543328',
            'address'          =>  'Kawali',
            'descriptions'        =>  'Supplier Buku Tulis',
        ]);
    }
}
