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
        Schema::create('contracts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');

            $table->foreignUuid('machine_id')->references('id')->on('machines')->onDelete(' cascade');

            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone')->unique();
            $table->string('whatsapp')->unique();
            $table->timestamp('expires')->nullable();
            $table->integer('percentage')->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');

            $table->timestamps();
        });

        Schema::create('contract_history', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('contract_id')->index();
            $table->foreign('contract_id')
                ->references('id')
                ->on('contracts')
                ->onDelete('cascade');

            $table->string('description');
            $table->timestamp('follow_up')->nullable();

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
