<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('roomid');
            $table->integer('roomnumber');
            $table->unsignedInteger('roomtypeid');
            $table->string('roomname', 50);
            $table->timestamps();

            $table->foreign('roomtypeid')->references('roomtypeid')->on('room_types');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
