<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id');
            $table->integer('category_id');
            $table->float('rating_cache');
            $table->integer('rating_count');
            $table->string('product_name');
            $table->string('short_description');
            $table->text('long_description');
            $table->float('price');
            $table->string('icon');
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
        Schema::drop('products');
    }
}
