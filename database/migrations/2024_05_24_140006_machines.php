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
            $table->uuid('id')->primary();
            $table->enum('stationary', ['YES', 'NO'])->default('YES');
            $table->unsignedBigInteger('location_id')->index();
            $table->foreign('location_id')
                ->references('id')
                ->on('locations');

            $table->unsignedBigInteger('machine_type_id')->index();
            $table->foreign('machine_type_id')
                ->references('id')
                ->on('machine_types');

            $table->geography('coordinates', 'point', 4326)->nullable(true);
            $table->timestamps();
        });

        Schema::create('slot_types', function (Blueprint $table) {
            $table->id();
            $table->string('slot_type')->nullable(false);
            $table->timestamps();
        });

        Schema::create('slots', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->smallInteger('product_count')->nullable(false);
            $table->smallInteger('max_product_count')->nullable(false);

            $table->unsignedBigInteger('slot_type_id')->index();
            $table->foreign('slot_type_id')
                ->references('id')
                ->on('slot_types');

            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');

            $table->double('price', 6,2)->nullable(false);

            $table->timestamps();
        });
        Schema::create('slot_journal', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('slot_id')->references('id')->on('slots')->onDelete(' cascade');

            $table->string('event')->nullable(false);
            $table->json('data')->nullable();
            $table->enum('archive', ['YES', 'NO'])->default('NO')->nullable(false);
            $table->timestamps();
        });
        Schema::create('machine_slots', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('machine_id')->references('id')->on('machines')->onDelete(' cascade');
            $table->foreignUuid('slot_id')->references('id')->on('slots')->onDelete(' cascade');

            $table->smallInteger('row')->nullable(false);
            $table->smallInteger('col')->nullable(false);

            $table->timestamps();
        });

        Schema::create('slot_kv', function (Blueprint $table) {
            $table->id();
            $table->uuid('slot_id')->index();
            $table->foreign('slot_id')
                ->references('id')
                ->on('slots')
                ->onDelete(' cascade');

            $table->string('key')->nullable(false);
            $table->string('value')->nullable(true);
            $table->json('json')->nullable(true);

            $table->timestamps();
        });
        Schema::create('machine_kv', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('machine_id')->references('id')->on('machines')->onDelete(' cascade');

            $table->string('key')->nullable(false);
            $table->string('value')->nullable(true);
            $table->json('json')->nullable(true);

            $table->timestamps();
        });

        // represents how the machine should be filled
        Schema::create('machine_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');
            $table->foreignUuid('machine_id')->references('id')->on('machines')->onDelete(' cascade');
            $table->double('price', 6,2)->nullable(false);
            $table->timestamps();
        });
        Schema::create('machine_journal', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('machine_id')->references('id')->on('machines')->onDelete(' cascade');

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
