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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete(' cascade');

            $table->integer('parent_id')->nullable();
            $table->integer('source_id')->nullable(false);
            $table->enum('source', ['USER', 'WEB', 'APP', 'OUTLET', 'LOCATION', 'COMPANY'])->nullable(false);
            $table->integer('target_id')->nullable(false);
            $table->enum('target', ['USER', 'MACHINE', 'LOCATION', 'COMPANY', 'ROUTE', 'OUTLET'])->nullable(false);
            $table->enum('message_type', ['COMMENT', 'RESPONSE', 'FEEDBACK', 'COMPLAINT'])->nullable(false);
            $table->string('message', 255)->nullable(false);
            $table->double('rating', 2, 1)->nullable();

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
