<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScPersonalInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sc_personal_info', function (Blueprint $table) {
          $table->increments('id');
            $table->string('username');
          $table->string('firstname');
          $table->string('lastname');
          $table->string('gender');
          $table->string('location');
          $table->string('primaryrole');
          $table->text('about')->nullable();
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
          Schema::drop('sc_personal_info');
    }
}
