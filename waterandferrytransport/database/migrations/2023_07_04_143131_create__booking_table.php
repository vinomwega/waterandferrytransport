<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookingTable extends Migration
{
    public function up()
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Ferry_Id');
            $table->unsignedInteger('Customer_Id');
            $table->string('CapacityBooked');
            $table->timestamps();

            $table->foreign('Ferry_Id')->references('id')->on('ferry')->onDelete('cascade');
            $table->foreign('Customer_Id')->references('id')->on('customer')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('bookings');
    }
}


/*
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
/*    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('Ferry_Id');
            $table->unsignedInteger('Customer_Id');
            $table->string('CapacityBooked');
            $table->timestamps();

            //fk for booking
            //$table->foreign('Ferry_Id')->references('id')->on('ferry');
            //$table->foreign('Customer_Id')->references('id')->on('customer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
   /* public function down()
    {
        Schema::dropIfExists('_booking');
    }
}
*/
