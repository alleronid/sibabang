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
        Schema::create('merchant_payments', function (Blueprint $table) {
            $table->id();
            $table->string('channel_name');
            $table->string('payment_code');
            $table->enum('status', ['PENDING', 'ACCEPT'])->default('PENDING');
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('process_by')->nullable();
            $table->date('process_date')->nullable();
            $table->text('data_raw');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchant_payments');
    }
};
