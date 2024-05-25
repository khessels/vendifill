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

        Schema::create('stock', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_product_id')->index();
            $table->foreign('brand_product_id')
                ->references('id')
                ->on('brand_products');

            $table->unsignedBigInteger('machine_id')->index();
            $table->foreign('machine_id')
                ->references('id')
                ->on('machines')
                ->onDelete('cascade');

            $table->double('price', 6,2)->nullable(false);
            $table->integer('slot')->nullable(false);
            $table->integer('count')->nullable(false)->default(0);
            $table->integer('max')->nullable(false);
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
