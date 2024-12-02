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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->enum('reason', ['SEED', 'NEW REGISTRATION', 'BANNED', 'OPT-OUT'])->default('NEW REGISTRATION');
            $table->double('rating', 2,1)->nullable()->default(5);
            $table->enum('user_type', ['SYSTEM', 'SERVICE', 'USER'])->default('USER');

            $table->rememberToken();
            $table->timestamps();
        });
        Schema::create('user_journal', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');

            $table->string('event')->nullable(false);
            $table->json('data')->nullable();
            $table->enum('archive', ['YES', 'NO'])->default('NO')->nullable(false);
            $table->timestamps();
        });
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
