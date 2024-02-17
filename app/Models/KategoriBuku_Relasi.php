<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriBuku_Relasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'kategoribukuid',
        'bukuid',
        'kategoriid',
    ];
}
