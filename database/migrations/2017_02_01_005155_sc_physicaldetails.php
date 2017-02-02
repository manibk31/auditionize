<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ScPhysicaldetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('sc_physicaldetails', function (Blueprint $table) {
        $table->increments('id');
        $table->string('username');
        $table->string('height')->nullable();
        $table->string('weight')->nullable();
        $table->string('haircolour')->nullable();
        $table->string('skincolour')->nullable();
        $table->string('eyecolour')->nullable();
        $table->string('waist')->nullable();
        $table->string('chest')->nullable();
        $table->string('hairlength')->nullable();
        $table->string('hairstyle')->nullable();
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
        Schema::drop('sc_physicaldetails');
    }
}
