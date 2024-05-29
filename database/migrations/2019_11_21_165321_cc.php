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
        Schema::create('credit_cards', function (Blueprint $table) {

            $table->id();
            $table->unsignedInteger('brand_id')->nullable(false);
            //$table->unsignedInteger('sub_id')->nullable(true);
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
