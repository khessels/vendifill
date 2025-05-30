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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable(false);
            $table->string('sku')->nullable(false);
            $table->enum('cooling', ['none', 'cool', 'freeze'])->nullable(false)->default('NONE');
            $table->enum('active', ['YES', 'NO'])->nullable(false);
            $table->double('msrp', 6, 2)->nullable(false);

            $table->timestamps();
        });

        Schema::create('product_kv', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete(' cascade');

            $table->string('key')->nullable(false);
            $table->string('value')->nullable(true);
            $table->json('json')->nullable(true);

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
