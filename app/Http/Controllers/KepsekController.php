<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepsekController extends Controller
{
    public function keuangan()
    {
        return view('pages.binus.keuangan-data');
    }
    public function Pembayaranperkelas()
    {
        return view('pages.binus.pembayaranperkelas-data', [
            'pembayaranperkelas' => Pembayaran::class
        ]);
    }
    public function Pembayaransppperkelas()
    {
        return view('pages.binus.pembayaransppperkelas-data', [
            'pembayaransppperkelas' => Pembayaran::class
        ]);
    }
}
