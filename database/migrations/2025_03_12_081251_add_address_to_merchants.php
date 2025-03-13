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
        Schema::table('merchants', function (Blueprint $table) {
            $table->text('address')->nullable();
            $table->string('nmid_qris')->nullable();
            $table->string('mid_qris')->nullable();
            $table->string('mid_dana')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('merchants', function (Blueprint $table) {
            $table->dropColumn('address');
            $table->dropColumn('nmid_qris');
            $table->dropColumn('mid_qris');
            $table->dropColumn('mid_dana');
        });
    }
};
