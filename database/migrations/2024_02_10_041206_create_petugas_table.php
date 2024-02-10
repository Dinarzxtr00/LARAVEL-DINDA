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
        Schema::create(table: 'petugass', callback: function (Blueprint $table) {
            $table->id(column: 'id_tugass');
            $table->string(column: 'username', length:25);
            $table->string(column: 'password', length:32);
            $table->string(column: 'nama_petugas', length:35);
            $table->enum(column: 'level', allowed:['admin', 'petugas']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('petugass');
    }
};