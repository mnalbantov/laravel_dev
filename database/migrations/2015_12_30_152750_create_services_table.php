<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services',function(Blueprint $table){
            $table->increments('id');
            $table->string('title');
            $table->text('service_content');
            $table->string('icon_name');
            $table->timestamp('published_at');
        });
        Schema::create('services_tabs',function(Blueprint $table){
            $table->increments('sct_id');
            $table->string('sct_title');
            $table->text('sct_body');
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
        Schema::drop('services');
        Schema::drop('services_tabs');
    }
}
