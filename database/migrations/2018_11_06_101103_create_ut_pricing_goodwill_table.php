<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtPricingGoodwillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ut_pricing_goodwill', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('pricing_id')->unsigned();
            $table->integer('goodwill_id')->unsigned();
            $table->timestamps();

            //$table->foreign('pricing_id')->references('id')->on('ut_pricing');
            //$table->foreign('goodwill_id')->references('id')->on('ut_goodwill');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ut_pricing_goodwill');
    }
}
