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
        Schema::create('detail_companies', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->string('client_email')->nullable();
            $table->string('client_no_ktp', 25)->nullable();
            $table->string('client_phone_number', 25)->nullable();
            $table->string('client_address')->nullable();
            $table->integer('client_province_id')->nullable();
            $table->integer('client_city_id')->nullable();
            $table->integer('client_kecamatan_id')->nullable();
            $table->bigInteger('client_kel_desa_id')->nullable();
            $table->string('client_rt_rw', 25)->nullable();
            $table->string('client_postcode', 25)->nullable();
            $table->string('client_no_kk')->nullable();
            $table->string('client_npwp')->nullable();
            $table->string('merchant_name')->nullable();
            $table->string('mechant_amount')->nullable();
            $table->string('merchant_address')->nullable();
            $table->integer('merchant_province_id')->nullable();
            $table->integer('merchant_city_id')->nullable();
            $table->integer('merchant_kecamatan_id')->nullable();
            $table->bigInteger('merchant_kel_desa_id')->nullable();
            $table->string('merchant_rt_rw',25)->nullable();
            $table->string('merchant_postcode')->nullable();
            $table->string('bank_name')->nullable();
            $table->string('account_number')->nullable();
            $table->string('account_name')->nullable();
            $table->text('file_ktp')->nullable();
            $table->text('file_rekeninig')->nullable();
            $table->text('file_tempat_usaha')->nullable();
            $table->text('file_npwp')->nullable();
            $table->text('file_siup')->nullable();
            $table->text('file_nib')->nullable();
            $table->text('file_akta_pendirian')->nullable();
            $table->text('file_akta_perubahan')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->date('submit_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_companies');
    }
};
