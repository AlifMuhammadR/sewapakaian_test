<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::statement("
        CREATE VIEW vwkeranjang AS
        SELECT
            k.id,
            k.id_pelanggan,
            k.id_pakaian,
            p.foto1,
            p.nama_pakaian AS nama_pakaian,
            p.harga_sewa,
            k.jumlah_order,
            (p.harga_sewa * k.jumlah_order) AS subtotal,
            k.created_at,
            k.updated_at
        FROM
            keranjangs k
        JOIN
            pakaians p ON k.id_pakaian = p.id
    ");
    }

    public function down(): void
    {
        DB::statement("DROP VIEW IF EXISTS vwkeranjang");
    }
};
