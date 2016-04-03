<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews',function(Blueprint $table){

                $table->increments('review_id');
                $table->integer('product_id');
                $table->integer('user_id');
                $table->integer('rating');
                $table->text('comment');
                $table->tinyInteger('approved');
                $table->tinyInteger('spam');
                $table->timestamp('created_at');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reviews');
    }
}
