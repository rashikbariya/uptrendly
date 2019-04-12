<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtBrandPricingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ut_brand_pricing', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('user_id')->unsigned();
            $table->integer('pricing_id')->unsigned();
            $table->integer('total_month');
            $table->date('from_date');
            $table->date('to_date');
            $table->integer('pricing_status');
            $table->decimal('amount_per_month');
            $table->date('changed_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('pricing_id')->references('id')->on('ut_pricing');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ut_brand_pricing');
    }
}
