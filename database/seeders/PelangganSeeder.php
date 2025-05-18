<?php

namespace Database\Seeders;

use App\Models\Pelanggans;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;



class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggans::create([
            'nama' => 'Alif Muhammad Rizky',
            'jk' => 'L',
            'email' => 'alif@gmail.com',
            'password' => Hash::make('alif'),
            'tgl_lahir' => '2000-05-18',
            'telepon' => '08123456789',
            'propinsi1' => 'Jakarta',
            'kota1' => 'Jakarta',
            'kodepos1' => '12345',
            'alamat1' => 'Jl. Raya No. 1',
            'propinsi2' => 'Jawa Barat',
            'kota2' => 'Bandung',
            'kodepos2' => '23451',
            'alamat2' => 'Jl. Raya No. 2',
            'propinsi3' => 'Banten',
            'kota3' => 'Tangerang',
            'kodepos3' => '34512',
            'alamat3' => 'Jl. Raya No. 3',
            'kartu_id' => '1234567890',
            'foto' => 'Pakaian/w.JPG',
        ]);
    }
}
