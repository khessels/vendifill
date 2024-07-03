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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->geography('coordinates')->nullable();
            $table->string('name')->nullable(false);


            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->string('country_code_2')->nullable(false)->default('CR');
            $table->string('province')->nullable();
            $table->string('canton')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('description')->nullable();
            $table->enum('access',['public', 'private'])->default('public')->nullable(false);
            $table->enum('active',['yes', 'no'])->default('yes')->nullable(false);
            $table->text('contact_details')->nullable();
            $table->string('managed_by')->nullable();
            $table->text('location_emergency')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
