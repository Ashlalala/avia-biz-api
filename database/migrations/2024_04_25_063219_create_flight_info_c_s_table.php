<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightInfoCSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_info_c_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_id')->nullable()->constrained('flights');
            $table->string('in_tanks')->nullable();
            $table->string('uplifted')->nullable();
            $table->string('departure')->nullable();
            $table->string('utilised')->nullable();
            $table->string('arrival')->nullable();
            $table->string('defuel')->nullable();
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
        Schema::dropIfExists('flight_info_c_s');
    }
}
