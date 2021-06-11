<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableStaffAccount extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('StaffAcounts', function (Blueprint $table) {
            $table->id();
            $table->string('carpark_id');
            $table->string('employee_id');
            $table->string('employee_name');
            $table->string('employee_bỉthday');
            $table->string('position_power');
            $table->string('identity_card_id');
            $table->string('identity_card_time');
            $table->string('identity_card_city');
            $table->string('employee_ranking');
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
        Schema::dropIfExists('StaffAcounts');
    }
}
