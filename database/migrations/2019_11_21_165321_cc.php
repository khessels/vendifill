<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('card_brands', function (Blueprint $table) {
            $table->Increments('id');
            $table->string('name')->nullable(false);
            $table->timestamp('archived_at')->nullable(true);
            $table->timestamps();
        });


        Schema::create('credit_cards', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id')->index();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete(' cascade');

            $table->unsignedInteger('card_brand_id')->nullable(false);
            $table->foreign('card_brand_id')
                ->references('id')
                ->on('card_brands')
                ->onDelete(' cascade');

            $table->string('cc_number', 40);
            $table->longText('cc_mask');
            $table->longText('cc_year');
            $table->longText('cc_month');
            $table->longText('cc_name');
            $table->longText('cc_ccv');
            $table->longText('card');
            $table->enum('run_mode', ['PRODUCTION', 'TESTING'])->default('TESTING');
            $table->timestamps();
        });
        Schema::create('test_cards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('user_id')->nullable(false);
            $table->string('token');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
