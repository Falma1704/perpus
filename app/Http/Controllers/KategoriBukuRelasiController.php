<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBuku_Relasi;

class KategoriBukuRelasiController extends Controller
{
    public function index()
    {
        $kategoribuku_relasi = KategoriBuku_Relasi::all();
        return view('kategoribuku_relasi', compact('kategoribuku_relasi'));
    }
}
