<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtBrandInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ut_brand_info', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('brand_name');
            $table->string('brand_website_url');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('photo_name');
            $table->string('about_brand');
            $table->integer('category_id');
            $table->integer('status');
            $table->boolean('email_status');
            $table->integer('phone_number')->unique();
            $table->integer('VAT/PAN')->unique();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ut_brand_info');
    }
}
