<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePortOperatorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portOperator', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ferry_Id');
            $table->string('FerryName');
            $table->string('Date',255);
            $table->string('Availability',255);
            $table->string('Payment',255);
            $table->timestamps();
            
            //fk for portoperator
           //$table->foreign('Ferry_Id')->references('id')->on('ferry');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('portOperator');
    }
}
