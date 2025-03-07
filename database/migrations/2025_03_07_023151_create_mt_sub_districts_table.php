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
        Schema::create('mt_sub_districts', function (Blueprint $table) {
            $table->string('kode_provinsi');
            $table->string('kode_kabkota');
            $table->string('kode_kecamatan');
            $table->string('kode_desa_kelurahan');
            $table->string('nama_desa_kelurahan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mt_sub_districts');
    }
};
