<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KoleksiPribadi;

class KoleksiPribadiController extends Controller
{
    public function index(){
        $koleksipribadi = KoleksiPribadi::all();
        return view('koleksipribadi', compact('koleksipribadi'));
    }
}
