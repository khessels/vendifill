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
            $table->string('name')->nullable(false);
            $table->string('contact')->nullable(false);
            $table->string('country_code')->nullable(false);
            $table->enum('active', ['YES', 'NO'])->nullable(false)->default('NO');
            $table->geography('coordinates')->nullable();
            $table->unsignedBigInteger('outlet_type_id')->index();
            $table->foreign('outlet_type_id')
                ->references('id')
                ->on('outlet_types');
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
