<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('reservationid');
            $table->unsignedInteger('customerid');
            $table->date('checkindate');
            $table->integer('scheckin');
            $table->integer('numberofdays');
            $table->integer('numberofadults');
            $table->integer('numberofchildrens');
            $table->string('memo', 500);
            $table->date('checkoutdate');
            $table->integer('ischeckout');
            $table->timestamps();

            $table->foreign('customerid')->references('customerid')->on('customers');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
