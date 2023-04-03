<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReservationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('reservations', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->nullable();
        $table->string('surname')->nullable();
        $table->string('phone')->nullable();
        $table->string('email')->nullable();
        $table->string('passenger')->nullable();
        $table->string('bags')->nullable();
        $table->string('service')->nullable();
        $table->string('pickupaddress')->nullable();
        $table->string('dropoffaddress')->nullable();
        $table->string('pickupdate')->nullable();
        $table->string('pickuptime')->nullable();
        $table->string('vechile')->nullable();
        $table->string('status')->nullable();
        $table->string('message')->nullable();
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
    }
}
