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
            $table->increments('Id');
            $table->string('Title');
            $table->text('Body');
            $table->boolean('Approved')->default(true);
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
