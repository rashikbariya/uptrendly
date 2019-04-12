<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtGoodwillValueTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ut_goodwill_value', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('goodwill_id')->unsigned();
            $table->decimal('goodwill_amount');
            $table->timestamps();

            $table->foreign('goodwill_id')->references('id')->on('ut_goodwill');
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ut_goodwill_value');
    }
}
