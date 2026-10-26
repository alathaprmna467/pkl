<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class jenis_barang extends Model
{
    protected $fillable = [
        'Id_Jenis',
        'Nama_Barang',
        'Tarif',
    ];
}

