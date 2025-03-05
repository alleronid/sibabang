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
        Schema::create('merchant_banks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('bank_id');
            $table->string('bank_name');
            $table->string('account_name');
            $table->string('account_number');
            $table->boolean('is_active')->default(0);
            $table->date('approved_date')->nullable();
            $table->unsignedBigInteger('approved_by')->nullable();
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
        Schema::dropIfExists('merchant_banks');
    }
};
