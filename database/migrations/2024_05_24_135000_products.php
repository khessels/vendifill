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
//        Schema::create('barcode_providers', function (Blueprint $table) {
//            $table->id();
//            $table->string('name')->nullable(false);
//            $table->json('config')->nullable();
//            $table->timestamps();
//        });

        Schema::create('packaging', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->integer('weight')->nullable(false);
            $table->enum('active', ['YES', 'NO'])->nullable(false);
            $table->timestamps();
        });

//        Schema::create('brands', function (Blueprint $table) {
//            $table->id();
//            $table->string('name')->nullable(false);
//            $table->enum('active', ['YES', 'NO'])->nullable(false);
//            $table->timestamps();
//        });
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->enum('active', ['YES', 'NO'])->nullable(false);
            $table->double('msrp', 6, 2)->nullable(false);
//            $table->string('barcode')->nullable();
//            $table->unsignedBigInteger('barcode_provider_id')->index();
//            $table->foreign('barcode_provider_id')
//                ->references('id')
//                ->on('barcode_providers');

//            $table->unsignedBigInteger('brand_id')->index();
//            $table->foreign('brand_id')
//                ->references('id')
//                ->on('brands');

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
