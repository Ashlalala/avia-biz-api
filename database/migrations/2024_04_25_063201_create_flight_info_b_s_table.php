<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightInfoBSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_info_b_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_id')->nullable()->constrained('flights');
            $table->string('baggage')->nullable();
            $table->string('cargo')->nullable();
            $table->string('eic')->nullable();
            $table->string('mail')->nullable();
            $table->string('total')->nullable();
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
        Schema::dropIfExists('flight_info_b_s');
    }
}
