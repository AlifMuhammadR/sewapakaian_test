<?php

namespace Database\Seeders;

use App\Models\Clothes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClothesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Clothes::create([
            'nama_pakaian' => 'T-Shirt Oversized',
            'jenis' => 'T-Shirt',
            'model' => 'Oversized',
            'warna' => 'Black',
            'ukuran' => 'XL',
            'bahan' => 'Cotton Combed 30s',
            'deskripsi' => 'T-Shirt Oversized
            Nikmati kenyamanan maksimal dan tampilan trendi dengan T-Shirt Oversized yang dirancang khusus untuk gaya santai Anda. Dibuat dari bahan katun premium yang lembut dan breathable, kaos ini cocok untuk aktivitas sehari-hari maupun acara santai. Tersedia dalam beberapa ukuran agar pas untuk berbagai bentuk tubuh.

Detail Produk:
Bahan: 100% Katun Combed, lembut dan tidak mudah melar
Model: Oversized, dengan potongan lebar dan longgar yang mengikuti tren
Warna: Hitam, Putih, Abu-abu, Biru, Hijau
Desain: Minimalis dengan detail jahitan rapi
Cocok Untuk: Gaya kasual, streetwear, dan aktivitas sehari-hari
Ukuran:
Size S: Panjang 68 cm, Lebar Dada 55 cm
Size M: Panjang 70 cm, Lebar Dada 57 cm
Size L: Panjang 72 cm, Lebar Dada 59 cm
Size XL: Panjang 74 cm, Lebar Dada 61 cm
Size XXL: Panjang 76 cm, Lebar Dada 63 cm
Catatan: T-shirt oversized ini memang didesain untuk tampilan loose dan nyaman. Jika menginginkan ukuran yang lebih ketat, disarankan memilih satu ukuran di bawah ukuran biasa Anda.

Perawatan:
Cuci dengan suhu air dingin untuk menjaga warna tetap awet
Jangan gunakan pemutih
Setrika dengan suhu rendah jika diperlukan',
            'foto1' => 'Pakaian/black.webp',
            'foto2' => 'Pakaian/man1.webp',
            'stok' => '1000',
            'harga_sewa' => '200000',
        ]);
        Clothes::create([
            'nama_pakaian' => 'Sweatpants LOOSE SIGNATURE Heavyweight',
            'jenis' => 'Pants',
            'model' => 'Sweatpants Loose',
            'warna' => 'Stone Black',
            'ukuran' => 'L',
            'bahan' => 'Fleece 340 GSM',
            'deskripsi' => 'Terinspirasi dari siluet taylor asal italy, rilisan long pants pertama ravharren ini terbuat dari Fleece 340 GSM (Stone Black) dengan detail embroidery di bagian lutut dan back pocket. Disesuaikan dengan fit loose untuk mendapatkan kesan memakai yang nyaman dan leluasa, memiliki total 4 kantong dan tambahan zipper di bagian open leg.

Size (measurements in cm)

Size 1 Length 100, Thigh 32, Open Leg 25, Waist 65-85
Size 2 Length 103, Thigh 34, Open Leg 25, Waist 70-100

Model (180 Cm/62 Kg) using size 2',
            'foto1' => 'Pakaian/sweatpants fr.jpg',
            'foto2' => 'Pakaian/sweatpants man.jpg',
            'foto3' => 'Pakaian/sweatpants rr.jpg',
            'stok' => '25',
            'harga_sewa' => '330000',
        ]);
    }
}
