<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScProfilepictures extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
          Schema::create('sc_profilepictures', function (Blueprint $table) {
          $table->increments('id');
          $table->string('username');
          $table->string('fullsize');
          $table->string('thumb')->nullable();
          $table->string('xsmall')->nullable();
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
        //
            Schema::drop('sc_profilepictures');
    }
}
