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
        Schema::create('register_companies', function (Blueprint $table) {
            $table->bigIncrements('company_id');
            $table->string("nationality_id")->unique();
            $table->string("tax_number")->unique()->nullable();
            $table->string("fullname");
            $table->string("email")->unique();
            $table->string("phone_number");
            $table->string("merchant_name");
            $table->unsignedBigInteger("business_type");
            $table->text("address");
            $table->string("nib")->nullable();
            $table->string('siup')->nullable();
            $table->string('akta')->nullable();
            $table->string("referall", 10)->nullable();
            $table->string('password', 50);
            $table->enum('status', ['SUBMIT', 'NOT VERIFY' ,'REJECT', 'APPROVED'])->default('SUBMIT');
            $table->text('file_ktp');
            $table->date('applicant_date')->nullable();
            $table->date('process_date')->nullable();
            $table->unsignedBigInteger('process_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('register_companies');
    }
};
