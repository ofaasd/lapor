<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bank;
use App\Models\JenisPembayaran;

class PembayaranController extends Controller
{
    //
    public function index(){
        $var['bank_pengirim'] = Bank::get();
        $var['jenis_pembayaran'] = JenisPembayaran::get();
        return view('pembayaran.index', compact('var'));
    }
}
