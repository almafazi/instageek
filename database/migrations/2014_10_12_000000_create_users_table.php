<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username');
            $table->string('email');
            $table->string('name');
            $table->text('bio');
            $table->string('website');
            $table->string('phone');
            $table->enum('gender', ['male', 'female']);
            $table->string('profile_picture');
            $table->unsignedInteger('post_count');
            $table->unsignedInteger('follower_count');
            $table->unsignedInteger('following_count');
            $table->string('password');
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
        Schema::dropIfExists('user');
    }
}
