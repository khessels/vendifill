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
            $table->integer('parent_id')->nullable();
            $table->integer('source_id')->nullable(false);
            $table->enum('source', ['user', 'web', 'app', 'outlet', 'location', 'company'])->nullable(false);
            $table->integer('target_id')->nullable(false);
            $table->enum('target', ['user', 'machine', 'location', 'company', 'route', 'outlet'])->nullable(false);
            $table->enum('message_type', ['comment', 'response', 'feedback', 'complaint'])->nullable(false);
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
