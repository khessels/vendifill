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

            $table->string('name')->nullable(false);
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('zip')->nullable();
            $table->integer('country_code')->nullable(false)->default(506);
            $table->string('province')->nullable();
            $table->string('canton')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();
            $table->string('description', 255)->nullable();
            $table->enum('access',['PUBLIC', 'PRIVATE'])->default('PUBLIC')->nullable(false);
            $table->enum('active',['YES', 'NO'])->default('YES')->nullable(false);
            $table->text('contact_details')->nullable();
            $table->string('managed_by')->nullable();
            $table->string('location_emergency')->nullable();
            $table->geography('coordinates', 'point', 4326)->nullable(false);

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
