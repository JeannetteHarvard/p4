<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartnersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partners', function (Blueprint $table) {
              # Increments method will make a Primary, Auto-Incrementing field.
              # Most tables start off this way
              $table->increments('id'); // autoincrements

              # This generates two columns: `created_at` and `updated_at` to
              # keep track of changes to a row
              $table->timestamps(); // 2 fields to fill

              # Partner specific info
              $table->string('name');
              $table->string('url');
              $table->string('logo_url');
              $table->text('description');
              $table->integer('founded_year');
              $table->string('headquarters_city');
              $table->string('headquarters_country');
              $table->string('annual_revenue');
              $table->integer('number_of_employees');

              # Partner relationship specific info
              $table->string('partner_portal_url');
              $table->string('training_portal_url')->nullable();
              $table->text('partner_agreements');
              $table->string('partner_tier');


              # solution tags

              # partner contacts

              # alliance managers
             });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('partners');
    }
}
