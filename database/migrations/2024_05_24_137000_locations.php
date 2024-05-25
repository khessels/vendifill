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
            $table->point('location')->nullable();
            $table->string('name')->nullable(false);
            $table->string('address')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('zip')->nullable();
            $table->string('country')->nullable(false);
            $table->string('province')->nullable(false);
            $table->string('canton')->nullable();
            $table->string('phone_1')->nullable();
            $table->string('phone_2')->nullable();
            $table->string('fax')->nullable();
            $table->string('email')->nullable();

            $table->string('description');
            $table->text('comments')->nullable();

            $table->enum('access',['public', 'private'])->default('public')->nullable(false);

            $table->text('location_responsible_by')->nullable();
            $table->integer('location_managed_by')->nullable();
            $table->text('location_emergency')->nullable();
            $table->text('location_description')->nullable();
            $table->string('demographics')->nullable();

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
