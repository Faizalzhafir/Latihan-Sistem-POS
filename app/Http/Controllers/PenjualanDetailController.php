<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PenjualanDetailController extends Controller
{
    public function index() {
         $produk = Produk::orderBy('nama_produk')-get();
         
    }
}
