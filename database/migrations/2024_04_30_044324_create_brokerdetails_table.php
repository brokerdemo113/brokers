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
        Schema::create('brokerdetails', function (Blueprint $table) {
                    $table->id();

                $table->string('name');
                 $table->string('phone')->nullable();
                 $table->string('address')->nullable();
                 $table->string('image')->nullable();
                 $table->string('company_abb')->nullable();
                 $table->string('platform_reg')->nullable();
                 $table->year('year')->nullable();
                 $table->string('email')->unique();
                 $table->string('website')->unique();
                 $table->string('facebook_link')->nullable();
                 $table->string('instagram_link')->nullable();
                 $table->string('youtube_link')->nullable();
                 $table->string('linkedin_link')->nullable();
                 $table->string('twitter_link')->nullable();

                 $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('brokerdetails');
    }
};
