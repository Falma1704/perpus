<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBuku;

class KategoriBukuController extends Controller
{
    public function index()
    {
        $kategoribuku = KategoriBuku::all();
        return view('kategoribuku', compact('kategoribuku'));
    }
}
