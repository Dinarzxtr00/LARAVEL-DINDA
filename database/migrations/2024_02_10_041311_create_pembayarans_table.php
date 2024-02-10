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
        Schema::create(table: 'pembayarans', callback: function (Blueprint $table) {
            $table->id(column: 'id_pembayarans');
            $table->foreignId(column: 'id_petugass')->references(column: 'id_petugass')->on(table: 'petugass');
            $table->char(column: 'nis', length:10);
            $table->foreign($column: 'nis')->references($column: 'nis')->on(table: 'siswas');
            $table->date(column: 'tgl_dibayar');
            $table->string(column: 'bulan_dibayar', length:8);
            $table->string(column: 'tahun_dibayar', length:4);
            $table->foreignId(column: 'id_spps')->references(column: 'id_spps')->on(table: 'siswa');
            $table->integer(column: 'jumlah_bayar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayarans');
    }
};