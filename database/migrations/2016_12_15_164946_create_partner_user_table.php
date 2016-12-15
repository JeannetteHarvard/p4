<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnerUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('partner_user', function (Blueprint $table) {

          $table->increments('id');
          $table->timestamps();

          # foreign keys, so they have to be unsigned
          $table->integer('partner_id')->unsigned();
          $table->integer('user_id')->unsigned();

          # Make foreign keys
          $table->foreign('partner_id')->references('id')->on('partners')->onDelete('cascade');
          $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partner_user');
    }
}
