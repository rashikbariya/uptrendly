<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSocialProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('social_providers', function (Blueprint $table) {
            $table->increments('id')->primarykey();
            $table->integer('user_id')->references('id')->on('users');
            $table->string('provider_id')->unique();
            $table->string('provider');
            $table->string('followers');
            $table->string('social_avatar');
            $table->string('social_username');
            $table->decimal('engagement');
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
        Schema::dropIfExists('social_providers');
    }
}
