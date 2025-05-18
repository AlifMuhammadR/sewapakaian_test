<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggans extends Model
{
    use HasFactory;
    protected $table = 'pelanggans';
    protected $fillable = [
        'nama',
        'jk',
        'email',
        'password',
        'tgl_lahir',
        'telepon',
        'propinsi1',
        'kota1',
        'alamat1',
        'kodepos1',
        'propinsi2',
        'kota2',
        'alamat2',
        'kodepos2',
        'propinsi3',
        'kota3',
        'alamat3',
        'kodepos3',
        'kartu_id',
        'foto',
    ];
}
