<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenubuildersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menubuilders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();

            $table->string("title",200);
            $table->string("slug",200)->unique();
            $table->integer("order");
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menubuilders');
    }
}
