<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableCarBill extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('CarBills', function (Blueprint $table) {
            $table->id();
            $table->string('license_plate');
            $table->string('time');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('bill_money');
            $table->string('user_id');
            $table->string('car_park_id');
            $table->string('staff_id');
            $table->string('type_id');
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
        Schema::dropIfExists('CarBills');
    }
}
