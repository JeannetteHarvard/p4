<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerTechnologyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('partner_technology', function (Blueprint $table) {

          $table->increments('id');
          $table->timestamps();

          # foreign keys, so they have to be unsigned
          $table->integer('partner_id')->unsigned();
          $table->integer('technology_id')->unsigned();

          # Make foreign keys
          $table->foreign('partner_id')->references('id')->on('partners');
          $table->foreign('technology_id')->references('id')->on('technologies')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partner_technology');
    }
}
