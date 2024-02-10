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
        Schema::create(table: 'siswas', callback: function (Blueprint $table) {
            $table->char(column: 'nis', length:10)->primary();
            $table->char(column: 'nis', length:8);
            $table->string(column: 'nama', length:35);
            $table->foreignId(column: 'id_kelass')->references(column: 'id_kelas')->on(table: 'kelas');
            $table->text(column: 'alamat');
            $table->string(column: 'on_telp', length:13);
            $table->foreignId(column: 'id_spps')->references(column: 'id_spps')->on(table: 'spps');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};