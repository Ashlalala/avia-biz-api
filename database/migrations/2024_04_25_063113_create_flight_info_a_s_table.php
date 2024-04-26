<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightInfoASTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_info_a_s', function (Blueprint $table) {
            $table->id();
            $table->foreignId('flight_id')->nullable()->constrained('flights');
            $table->string('std')->nullable();
            $table->string('ptd')->nullable();
            $table->string('etd')->nullable();
            $table->string('atd')->nullable();
            $table->string('sta')->nullable();
            $table->string('pta')->nullable();
            $table->string('eta')->nullable();
            $table->string('ata')->nullable();
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
        Schema::dropIfExists('flight_info_a_s');
    }
}
