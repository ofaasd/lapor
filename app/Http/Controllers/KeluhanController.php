<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;

class KeluhanController extends Controller
{
    //
    public function index(){
        $var['kategori'] = Kategori::get();
        return view('keluhan.index', compact('var'));
    }
    public function simpan(){
        echo "simpan";
    }
}
