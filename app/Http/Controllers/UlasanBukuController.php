<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UlasanBuku;

class UlasanBUkuController extends Controller
{
    public function index(){
        $ulasanbuku= UlasanBuku::all();
        return view('ulasanbuku',compact('ulasanbuku'));
    }
}
