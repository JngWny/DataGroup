<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //these are the columns i want to use in my post column
        Schema::create('posts',function (Blueprint $table)
        {
            $table->increments('id');
            $table->user_id('user_id')
            $table->string('title');
            $table->text('body');
            $table->boolean('approved')->default(true);
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
        //when restting post table
        Schema::drop('posts');
    }
}
