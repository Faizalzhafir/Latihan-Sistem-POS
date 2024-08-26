<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PembelianController extends Controller
{
    public function pembelian(){
        return view('Transaksi.pembelian');
    }
}
