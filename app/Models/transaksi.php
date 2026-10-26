<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaksi extends Model
{
    protected $fillable = [
        'Id_Trans',
        'Date',
        'Notes',
        'Id_Karyawan',
        'Berat',
        'Id_Pelanggan',
        'Id_Jenis',
        'Tarif',
        'Total',
    ];
}
