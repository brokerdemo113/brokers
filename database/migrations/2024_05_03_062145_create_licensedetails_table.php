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
        Schema::create('licensedetails', function (Blueprint $table) {
            $table->id();

            $table->string('selectbroker')->nullable();
            $table->string('selectlicense')->nullable();
            $table->string('currentstatus')->nullable();
            $table->string('country')->nullable();
            $table->string('licensed_institution')->nullable();
            $table->string('email_license')->nullable();
            $table->string('website_institution')->nullable();
            $table->string('address_license')->nullable();
            $table->string('license_type')->nullable();
            $table->string('license_no')->nullable();
            $table->string('effective_date')->nullable();
            $table->string('expiration_time')->nullable();
            $table->string('phone_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('licensedetails');
    }
};
