<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ongkirs extends Model
{
    use HasFactory;

    protected $table = 'ongkirs';

    protected $fillable = [
        'nama_ekspedisi',
        'logo_ekspedisi',
        'jenis_ongkir',
        'propinsi',
        'kota',
        'biaya_ongkir',
    ];
}
