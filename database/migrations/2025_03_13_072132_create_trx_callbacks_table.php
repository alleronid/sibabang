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
        Schema::create('trx_callbacks', function (Blueprint $table) {
            $table->id();
            $table->string('callback_id')->nullable();
            $table->string('payment_gateway')->nullable();
            $table->string('payment_type')->nullable();
            $table->string('payment_amount')->nullable();
            $table->string('partner_reference_no')->nullable();
            $table->string('original_reference_no')->nullable();
            $table->string('status')->nullable();
            $table->date('date_create')->nullable();
            $table->text('request_body')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_callbacks');
    }
};
