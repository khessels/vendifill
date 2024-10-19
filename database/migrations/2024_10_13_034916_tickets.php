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
        $schema = Schema::connection($this->getConnection());

        $schema->create('tickets', function (Blueprint $table) {
            $table->id();

            $table->foreignUuid('machine_id')->references('id')->on('machines')->onDelete(' cascade');

        });

        $schema->create('ticket_items', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ticket_id')->index();
            $table->foreign('ticket_id')
                ->references('id')
                ->on('tickets')
                ->onDelete(' cascade');

            $table->unsignedBigInteger('product_id')->index();
            $table->foreign('product_id')
                ->references('id')
                ->on('products')
                ->onDelete(' cascade');

            $table->smallInteger('quantity')->nullable(false);
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
