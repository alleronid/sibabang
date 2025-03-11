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
        Schema::create('trx_disbursements', function (Blueprint $table) {
            $table->id();
            $table->string('no_trx');
            $table->unsignedInteger('merchant_bank');
            $table->decimal('nominal');
            $table->enum('status', ['PENDING', 'SUCCESS', 'CANCEL', 'PROCESS'])->default('PENDING');
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('merchant_id');
            $table->unsignedBigInteger('approved_by')->nullable();
            $table->date('proccess_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trx_disbursements');
    }
};
