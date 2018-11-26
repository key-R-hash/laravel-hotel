<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('ids');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('id');
            $table->string('id_number');
            $table->string('address');
            $table->string('id_address');
            $table->string('email');
            $table->string('phonenumber');
            $table->string('date');
            $table->string('reserve');
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
        Schema::dropIfExists('rooms');
    }
}
