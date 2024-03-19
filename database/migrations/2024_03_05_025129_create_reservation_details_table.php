<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   
    public function up(): void
    {
        Schema::create('reservation_details', function (Blueprint $table) {
            $table->increments('reservationdetailid');
            $table->unsignedInteger('reservationid');
            $table->unsignedInteger('roomid');
            $table->string('note', 500);
            $table->timestamps();

            $table->foreign('reservationid')->references('reservationid')->on('reservations');
            $table->foreign('roomid')->references('roomid')->on('rooms');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('reservation_details');
    }
};
