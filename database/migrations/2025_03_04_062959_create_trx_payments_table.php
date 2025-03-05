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
        Schema::create('trx_payments', function (Blueprint $table) {
            $table->id();
            $table->string('trx_id');
            $table->decimal('amount');
            $table->string('email')->nullable();
            $table->string('fullname')->nullable();
            $table->string('phone_number')->nullable();
            $table->decimal('fee_amount')->nullable();
            $table->decimal('total_amount')->nullable();
            $table->string('method');
            $table->enum('status', ['EXPIRED', 'PAID', 'CANCEL', 'UNPAID'])->default('UNPAID');
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('company_id');
            $table->text('data_raw')->nullable();
            $table->date('payed_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_payments');
    }
};
