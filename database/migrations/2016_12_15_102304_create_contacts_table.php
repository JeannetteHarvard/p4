<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('contacts', function (Blueprint $table) {
            # Increments method will make a Primary, Auto-Incrementing field.
            # Most tables start off this way
            $table->increments('id'); // autoincrements

            # This generates two columns: `created_at` and `updated_at` to
            # keep track of changes to a row
            $table->timestamps(); // 2 fields to fill

            # Contact specific info
            $table->string('first_name');
            $table->string('last_name');
            $table->string('picture_url');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('role');
            $table->string('sbu');
           });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contacts');
    }
}
