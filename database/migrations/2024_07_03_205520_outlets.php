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

        Schema::create('outlet_types', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_type')->nullable(false);
            $table->timestamps();
        });

        Schema::create('outlets', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->string('name')->nullable(false);
            $table->geography('coordinates', 'point', 4326)->nullable(false);
            $table->string('contact')->nullable(false);
            $table->integer('country_code')->nullable(false)->default(506);
            $table->enum('active', ['YES', 'NO'])->nullable(false)->default('NO');

            $table->unsignedBigInteger('outlet_type_id')->index();
            $table->foreign('outlet_type_id')
                ->references('id')
                ->on('outlet_types');
            $table->timestamps();
        });
        Schema::create('outlet_journal', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('outlet_id')->index();
            $table->foreign('outlet_id')
                ->references('id')
                ->on('outlets')
                ->onDelete('cascade');

            $table->string('event')->nullable(false);
            $table->json('data')->nullable();
            $table->enum('archive', ['YES', 'NO'])->default('NO')->nullable(false);
            $table->timestamps();
        });

        Schema::create('outlet_products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products');

            $table->unsignedBigInteger('outlet_id')->index();
            $table->foreign('outlet_id')
                ->references('id')
                ->on('outlets')
                ->onDelete('cascade');

            $table->double('price', 6,2)->nullable(false);
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
