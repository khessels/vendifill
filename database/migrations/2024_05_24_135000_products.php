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
        Schema::create('packaging', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->enum('active', ['yes', 'no'])->nullable(false);
            $table->timestamps();
        });
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->enum('active', ['yes', 'no'])->nullable(false);
            $table->timestamps();
        });
        Schema::create('brand_products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->enum('active', ['yes', 'no'])->nullable(false);
            $table->double('min_price', 6, 2)->nullable(false);
            $table->double('msrp', 6, 2)->nullable(false);

            $table->unsignedBigInteger('brand_id')->index();
            $table->foreign('brand_id')
                ->references('id')
                ->on('brands');

            $table->unsignedBigInteger('packaging_id')->index();
            $table->foreign('packaging_id')
                ->references('id')
                ->on('packaging');

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
