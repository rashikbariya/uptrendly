<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtTestimonialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ut_testimonials', function (Blueprint $table) {
            $table->increments('id');
            $table->string('fullname');
            $table->longText('description');
            $table->unsignedInteger('profession_id');
            $table->string('status');
            $table->string('photo_path');
            $table->integer('sort_order');
            $table->foreign('profession_id')->references('id')->on('ut_profession');
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
        Schema::dropIfExists('ut_testimonials');
    }
}
