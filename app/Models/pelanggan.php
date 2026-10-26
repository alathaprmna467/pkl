
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pelanggan extends Model
{
    protected $fillable = [
        'id',
        'id_pelanggan',
        'Nama_Pelanggan',
        'No_Telp',
        'Alamat',
    ];
}


