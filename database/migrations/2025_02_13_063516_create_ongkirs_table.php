<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ongkirs', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ekspedisi', 255);
            $table->string('logo_ekspedisi', 255);
            $table->enum('jenis_ongkir', ['ekonomi', 'express', 'cod', 'sameday']);
            $table->string('propinsi', 100)->nullable(false);
            $table->string('kota', 100)->nullable(false);
            $table->integer('biaya_ongkir');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ongkirs');
    }
};
