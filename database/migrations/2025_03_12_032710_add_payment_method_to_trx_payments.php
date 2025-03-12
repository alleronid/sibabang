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
        Schema::table('trx_payments', function (Blueprint $table) {
            $table->text('payment_code')->nullable();
            $table->text('ket')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('trx_payments', function (Blueprint $table) {
            $table->dropColumn('payment_code');
            $table->dropColumn('ket');
        });
    }
};
