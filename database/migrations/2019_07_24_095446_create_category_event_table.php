<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_event', function (Blueprint $table) {
            $table->bigIncrements('id');

           $table->bigInteger('event_id')->unsigned();

              $table->bigInteger('category_id')->unsigned();

        });

        Schema::table('category_event', function($table){
                   
                    $table->foreign('event_id')->references('id')->on('events')

                        ->onDelete('cascade');

                    $table->foreign('category_id')->references('id')->on('categories')

                        ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('category_event', function (Blueprint $table) {
            Schema::dropIfExists('categories');
        });
    }
}
