<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtPricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ut_pricing', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->decimal('monthly_charged_amount');
            $table->integer('campaing_advisor_manager');
            $table->decimal('credit_upto');
            $table->integer('no_of_campagins');
            $table->integer('tracking_campaigns');
            $table->decimal('discount_on_advance_payment');
            $table->integer('staus');
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
        Schema::dropIfExists('ut_pricing');
    }
}
