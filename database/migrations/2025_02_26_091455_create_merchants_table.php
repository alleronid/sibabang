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
        Schema::create('merchants', function (Blueprint $table) {
            $table->bigIncrements('merchant_id');
            $table->string('merchant_name');
            $table->enum('status', ['ACTIVE', 'DEACTIVE', 'PENDING', ''])->default('ACTIVE');
            $table->unsignedBigInteger('vendor_id')->default(1);
            $table->string('token');
            $table->enum('env', ['PRODUCTION', 'SANDBOX'])->default('SANDBOX');
            $table->string('api_key_prod')->nullable();
            $table->string('cb_key_prod')->nullable();
            $table->string('api_key_sb')->nullable();
            $table->string('cb_key_sb')->nullable();
            $table->text('public_key')->nullable();
            $table->text('private_key')->nullable();
            $table->text('api_key_ext')->nullable();
            $table->text('external_id')->nullable();
            $table->boolean('soundbox')->default(0);
            $table->string('nmid')->nullable();
            $table->string('api_key_sb_vendor')->nullable();
            $table->string('secret_key_sb_vendor')->nullable();
            $table->string('api_key_vendor')->nullable();
            $table->string('secret_key_vendor')->nullable();
            $table->unsignedBigInteger('company_id');
            $table->unsignedBigInteger('created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('merchants');
    }
};
