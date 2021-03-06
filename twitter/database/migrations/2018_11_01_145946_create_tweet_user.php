<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTweetUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tweet_user', function (Blueprint $table) {
            $table->unsignedInteger('tweet_id');
            $table->unsignedInteger('user_id');
            $table->primary(['tweet_id','user_id']);
            // $table->increments('id'); don't need for join table it has composite primary key instesd
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tweet_user');
    }
}
