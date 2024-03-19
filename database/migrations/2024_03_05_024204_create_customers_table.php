<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->increments('customerid');
            $table->string('customercode', 50);
            $table->unsignedInteger('customertypeid');
            $table->string('customername', 50);
            $table->string('sex');
            $table->date('dob');
            $table->string('phone', 200);
            $table->string('passportnumber', 200);
            $table->string('country', 50);
            $table->timestamps();

            $table->foreign('customertypeid')->references('customertypeid')->on('customer_types');
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
