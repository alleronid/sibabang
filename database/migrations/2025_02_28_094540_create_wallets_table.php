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
        Schema::create('wallets', function (Blueprint $table) {
            $table->id();
            $table->string('merchant_name');
            $table->decimal('pending_balance')->default(0);
            $table->decimal('avail_balance')->default(0);
            $table->decimal('total_balance')->default(0);
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('merchant_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wallets');
    }
};
