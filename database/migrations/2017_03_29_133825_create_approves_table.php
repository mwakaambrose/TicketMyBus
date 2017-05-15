<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApprovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('approves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('phone_number');
            $table->string('to_from');
            $table->string('price');
            $table->string('departure_time');
            $table->boolean('is_approved')->default(1);
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
        Schema::drop('approves');
    }
}
