<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**w
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mt_cities', function (Blueprint $table) {
            $table->string('kode_provinsi');
            $table->string('kode_kab_kota');
            $table->string('nama_kab_kota');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mt_cities');
    }
};
