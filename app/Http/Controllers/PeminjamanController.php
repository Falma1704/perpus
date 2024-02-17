<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;
use App\Models\Peminjaman;

class PeminjamanController extends Controller
{
    public function index(){
    $peminjaman = Peminjaman ::all();
    return view('peminjaman',compact('peminjaman'));
    }
}
