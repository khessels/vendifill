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
        Schema::create('machine_types', function (Blueprint $table) {
            $table->id();
            $table->string('machine_type')->nullable(false);
            $table->timestamps();
        });
        Schema::create('machines', function (Blueprint $table) {
            $table->id();

            $table->geography('coordinates')->nullable();
            $table->uuid('uuid')->nullable();
            $table->string('brand')->nullable();
            $table->string('brand_model')->nullable();
            $table->smallInteger('year')->nullable();
            $table->unsignedBigInteger('location_id')->index();
            $table->foreign('location_id')
                ->references('id')
                ->on('locations');

            $table->unsignedBigInteger('machine_type_id')->index();
            $table->foreign('machine_type_id')
                ->references('id')
                ->on('machine_types');
            $table->timestamps();
        });

        Schema::create('machine_slots', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('machine_id')->index();
            $table->foreign('machine_id')
                ->references('id')
                ->on('machines')
                ->onDelete(' cascade');

            $table->smallInteger('slot_index')->nullable(false);
            $table->smallInteger('product_count')->nullable(false);
            $table->timestamps();
        });

        // represents the products that are actually in the machine
        Schema::create('machine_stock', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('machine_id')->index();
            $table->foreign('machine_id')
                ->references('id')
                ->on('machines')
                ->onDelete(' cascade');

            $table->unsignedBigInteger('machine_slot_id')->index();
            $table->foreign('machine_slot_id')
                ->references('id')
                ->on('machine_slots')
                ->onDelete(' cascade');

            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');

            $table->double('recommended_price', 6,2)->nullable(false);
            $table->timestamps();
        });

        // represents how the machine should be filled
        Schema::create('machine_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');

            $table->unsignedBigInteger('machine_id')->index();
            $table->foreign('machine_id')
                ->references('id')
                ->on('machines')
                ->onDelete('cascade');
            $table->unsignedBigInteger('machine_slot_id')->index();
            $table->foreign('machine_slot_id')
                ->references('id')
                ->on('machine_slots')
                ->onDelete(' cascade');

            $table->smallInteger('count')->nullable(false)->default(0);
            $table->double('price', 6,2)->nullable(false);
            $table->timestamps();
        });
        Schema::create('machine_journal', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('machine_id')->index();
            $table->foreign('machine_id')
                ->references('id')
                ->on('machines')
                ->onDelete('cascade');

            $table->string('event')->nullable(false);
            $table->json('data')->nullable();

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
