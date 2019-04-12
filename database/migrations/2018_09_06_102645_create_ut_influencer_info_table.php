<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtInfluencerInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ut_influencer_info', function (Blueprint $table) {
            $table->increments('id')->primarykey();   
            $table->string('firstname');
            $table->string('lastname');
            $table->string('avatar');
            $table->unsignedInteger('profession_id');
            $table->string('username');
            $table->string('target_audience_gender');
            $table->string('target_audience_age');
            $table->longText('interested_for');
            $table->float('ceiling_like',10,2);
            $table->unsignedInteger('user_id')->unique();
            $table->integer('goodwill_id')->unique();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('profession_id')->references('id')->on('ut_profession');
            // $table->foreign('goodwill_id')->references('id')->on('ut_goodwill');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ut_influencer_info');
    }
}
